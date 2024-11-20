<?php

// namespace App\Controllers\Client;
namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Study_page;
use App\Views\Client\Stydy;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Study\Study_page as StudyStudy_page;

class StudyController
{
    // hiển thị danh sách
    public static function index()
    {
       
        
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        // Post::render($data);
        Footer::render();
    }

    public static function study()
    {
       
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        StudyStudy_page::render();
        Footer::render();
    }

}
