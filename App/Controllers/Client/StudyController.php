<?php

// namespace App\Controllers\Client;
namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;

use App\Views\Client\Stydy\Study_page;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Study\Study_page as Lesson;
use App\Models\CourseModel;
use App\Models\LessonModel;


class StudyController
{
    // hiển thị danh sách
    // public static function index()
    // {


    //     Header::render();
    //     Notification::render();
    //     NotificationHelper::unset();
    //     // Post::render($data);

    //     Footer::render();
    // }

    // public static function study()
    // {

    //     // Header::render();
    //     Notification::render();
    //     NotificationHelper::unset();
    //     StudyStudy_page::render();
    //     // Footer::render();
    // }

    // protected $courseModel;
    // protected $lessonModel;
    public function Learn()
    {
        if (isset($_GET['courseId'])) {
            $courseId = $_GET['courseId'];
            $lessonId = $_GET['lessonId'];
            $this->viewLesson($courseId, $lessonId);
        } else {
            echo "Not Found huhu";
        }
    }

    public function viewLesson($courseId, $lessonId = null)
    {
        $courseModel = new CourseModel();
        $lessonModel = new LessonModel();
        // Kiểm tra khóa học có tồn tại không
        $course = $courseModel->getCourseByCourseId($courseId);
        if (!$course) {
            die("Khóa học không tồn tại.");
        }
        // Lấy danh sách bài học trong khóa học
        $lessons = $lessonModel->getLessonByCourseId($courseId);
        if (empty($lessons)) {
            die("Không có bài học nào trong khóa học này.");
        }
        // Nếu không có bài học được chọn, chọn bài học đầu tiên

        // Lấy thông tin chi tiết bài học
        $selectedLesson = $lessonModel->getLessonDetail($lessonId);
        if (!$selectedLesson) {
            die("Bài học không tồn tại.");
        }

        // Gửi dữ liệu tới view
        $data = [
            'course' => $course,
            'lessons' => $lessons,
            'selectedLesson' => $selectedLesson
        ];

        Lesson::render($data);
    }
}
    