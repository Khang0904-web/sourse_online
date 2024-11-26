<?php
namespace App\Validations;
use App\Helpers\NotificationHelper;

class LessonValidation
{
    public static function create()
    {
        $is_valid = true;
        //tên 
        if (!isset($_POST['title_lesson']) || $_POST['title_lesson'] === '') {
            NotificationHelper::error('title_lesson', 'Không được để trống tên sản phẩm');
            $is_valid = false;
        }


        return $is_valid;
    }

    public static function edit()
    {
        return self::create();
    }


}