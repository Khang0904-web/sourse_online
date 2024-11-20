<?php

namespace App\Controllers\Client;

use App\Helpers\AuthHelper;
use App\Helpers\NotificationHelper;
use App\Models\User;
use App\Validations\AuthValidation;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Auth\ChangePassword;
use App\Views\Client\Pages\Auth\Edit;
use App\Views\Client\Pages\Auth\Forgot;
use App\Views\Client\Pages\Auth\ForgotPassword;
use App\Views\Client\Pages\Auth\Login;
use App\Views\Client\Pages\Auth\Register;
use App\Views\Client\Pages\Auth\ResetPassword;

class AuthController
{

    //hiển thị giao diện form Register
    public static function register()
    {
        //hiển thị header
        Header::render();

        //Hiển thị thông báo
        Notification::render();

        //Hủy session
        NotificationHelper::unset();

        //hiển thị form đăng ký
        Register::render();

        //hiển thị footer
        Footer::render();
    }

    public static function registerAction()
    {

        // bắt lỗi validation


        // kiểm tra có thỏa điều kiện ko?
        // nếu có: tiếp tục chạy lệnh ở dưới
        // nếu có lỗi thì thông báo và chuyển hướng về trang đăng ký

        $is_valid = AuthValidation::register();

        if (!$is_valid) {
            NotificationHelper::error('register_valid', 'Đăng ký thất bại loi so 1');
            header('location: /register');
            exit;
        }


        //lấy dữ liệu người dùng nhập vào
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $name = $_POST['name'];

        //đưa dữ liệu vào mảng, lưu ý key phải trùng với tên cột trong csdl
        $data = [
            'username' => $username,
            'password' => $hash_password,
            'email' => $email,
            'name' => $name
        ];

        $result = AuthHelper::register($data);

        if ($result) {
            // var_dump("ok");
            header('location: /login');
        } else {
            // var_dump("loi");
            header('location: /register');
        }

    }

    public static function login()
    {
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Login::render();
        Footer::render();
    }

    public static function loginAction()
    {
        //bắt lỗi
        $is_valid = AuthValidation::login();

        if (!$is_valid) {
            NotificationHelper::error('login', 'Đăng nhập thất bại');
            header('location: /login');
            exit;
        }

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'remember' => isset($_POST['remember'])
        ];

        $result = AuthHelper::login($data);

        if ($result) {
            NotificationHelper::success('login', 'Đăng nhập thành công');
            header('location: /');
        } else {
            NotificationHelper::error('login', 'Đăng nhập thất bại');
            header('location: /login');
        }
    }

    public static function logout()
    {
        AuthHelper::logout();
        NotificationHelper::success('logout', 'Đăng xuất thành công');
        header('location: /');
    }

    public static function edit($id)
    {
        $result = AuthHelper::edit($id);

        if (!$result) {
            if (isset($_SESSION['error']['login'])) {
                header('location: /login');
                exit;
            }

            if (isset($_SESSION['error']['user_id'])) {
                $data = $_SESSION['user'];
                $user_id = $data['id'];
                header("location: /user/$user_id");
                exit;
            }
        }

        $data = $_SESSION['user'];
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Edit::render($data);
        //Giao diện thông tin user
        Footer::render();
    }

    public static function update($id)
    {
        $is_valid = AuthValidation::edit();
        if (!$is_valid) {
            NotificationHelper::error('update_user', 'Cập nhật thông tin tài khoản thất bại');
            header("location: /users/$id");
            exit;
        }

        $data = [
            'email' => $_POST['email'],
            'name' => $_POST['name']
        ];

        //kiểm tra có upload hình ảnh ko, nếu có: kiểm tra có hợp lệ ko
        $is_upload = AuthValidation::uploadAvatar();
        if ($is_upload) {
            $data['avatar'] = $is_upload;
        }

        //gọi helper để update
        $result = AuthHelper::update($id, $data);
        //kiểm tra kết quả trả về và chuyển hướng
        header("location: /users/$id");
    }

    //hiển thị form đổi mật khẩu
    public static function changePassword()
    {
        $is_login = AuthHelper::checkLogin();

        if (!$is_login) {
            NotificationHelper::error('login', 'Vui lòng đăng nhập để thay đổi mật khẩu');
            header('location: /login');
            exit;
        }

        $data = $_SESSION['user'];
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        ChangePassword::render($data);
        Footer::render();
    }

    //thực hiện đổi mật khẩu
    public static function changePasswordAction()
    {

        //validation
        $is_valid = AuthValidation::changePassword();
        if (!$is_valid) {
            NotificationHelper::error('change-password', 'Đổi mật khẩu thất bại');
            header('location: /change-password');
            exit;
        }
        $id = $_SESSION['user']['id'];

        $data = [
            'old_password' => $_POST['old_password'],
            'new_password' => $_POST['new_password']

        ];

        //gọi Authelper
        $result = AuthHelper::changePassword($id, $data);
        header('location: /change-password');
    }

    //hiển thị giao diện form lấy lại mật khẩu
    public static function forgotPassword()
    {
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Forgot::render();
        Footer::render();
    }

    //thực hiên chức năng lấy lại mật khẩu
    public static function forgotPasswordAction()
    {
        //validation
        $is_valid = AuthValidation::forgotPassword();

        if (!$is_valid) {
            NotificationHelper::error('forgot_password', 'Lấy lại mật khẩu thất bại');
            header('location: /forgot-password');
            exit;
        }

        $username = $_POST['username'];
        $email = $_POST['email'];

        $data=[
            'username' => $username
        ];
        //Authelper
        $result = AuthHelper::forgotPassword($data);
        if(!$result){
            NotificationHelper::error('username_exits', 'Không tồn tại tài khoản này');
            header("location: /forgot-password");
            exit;
        }

        if($result['email'] != $email){
            NotificationHelper::error('email_exist', 'Email không đúng');
            header("location: /forgot-password");
            exit;
            
        }

        $_SESSION['reset_password'] = [
            'username' => $username,
            'email' => $email
        ];

        header('location: /reset-password');
        
    }

    //hiển thị form Đặt lại mật khẩu
    public static function resetPassword()
    {
        if(!isset($_SESSION['reset_password'])){
            NotificationHelper::error('reset_password', 'Vui lòng nhập đầy đủ thông tin của form này');
            header('location: /forgot-password');
            exit;
        }
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        ResetPassword::render();
        Footer::render();
    }

    public static function resetPasswordAction(){
        //Validation
        $is_valid = AuthValidation::resetPassword();

        if(!$is_valid){
            NotificationHelper::error('reset_password', 'Đặt lại mật khẩu thất bại');
            header('location: /reset-password');
            exit;
        }

        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $_SESSION['reset_password']['username'],
            'email' => $_SESSION['reset_password']['email'],
            'password' => $hash_password
        ];

        $result = AuthHelper::resetPassword($data);

        if($result){
            NotificationHelper::success('reset_password', 'Đặt lại mật khẩu thành công');
            unset($_SESSION['reset_password']);
            header('location: /login');
        }else{
            NotificationHelper::error('reset_password', 'Đặt lại mật khẩu thất bại');
            header('location: /reset-password');
        }
    }
}