<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Models\Category;
use App\Models\Product;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Post\Post;

class PostController
{
    
    public static function index(){
    
        Header::render();
        Notification::render();
        NotificationHelper::unset();
        Post::render();
        Footer::render();
    }


    
  
}

?>