<?php

namespace App\Controllers\Client;


use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\CourseModel;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Home;
use App\Views\Client\Layouts\Header;

class HomeController
{
    // hiển thị danh sách
    public static function index()
    {

        // $product = new Product();
        // $products = $product->getAllProductByStatus();

        // $data = [
        //     'products' => $products
        // ];

        $course  = new CourseModel();
        $courses = $course->getAllCourse(); // result
        $data = [
            "course" => $courses
        ];

        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Home::render($data);
        // var_dump($course);
        Footer::render();
    }
}
