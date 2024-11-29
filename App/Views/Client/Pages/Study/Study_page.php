<?php

// namespace App\Views\Client;
namespace App\Views\Client\Pages\Study;

use App\Views\BaseView;
use App\Views\Client\Components\ProductList;
use App\Views\Client\Pages\Product\Index;
use App\Views\Client\Pages\Product\Listhome;
use App\Controllers\Client\StudyController;

class Study_page extends BaseView
{
    public static function render($data = null)
    {
        $courseId = $_GET['courseId']  ;
        $lessonId = $_GET['lessonId'] ;
        $index = 1;
      
        if(isset($data) && isset($data['course']) && isset($data['lessons']) && isset($data['selectedLesson'])) :

            $course = $data['course'];
            $lessons = $data['lessons'];
            $selectedLesson = $data['selectedLesson'];

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $data['lessons'][$lessonId -1][2] ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            <link rel="stylesheet" href="../public/assets/css/study.css">

        </head>
        <body>
            <div class="container">
                <header class="header">
                    <a href="/" class="back-link"><i class="bi bi-chevron-left"> Quay lại</i></a>
                    <h3><?= $data['course'][0][1]?></h3>
                </header>
                <div class="main-content">
                    <div class="video-section">
                    <iframe width="800" height="350" src="<?= $data['lessons'][$lessonId -1][3]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <h2><?= $data['lessons'][$lessonId -1][2] ?></h2>
                    </div>
                    <div class="lesson-navigation">
                        <h3 class="toggle-list" onclick="toggleLessonList()">Nội dung khóa học &#9660;</h3>
                        <ul class="lesson-list">
                        <?php foreach($data['lessons'] as $listLessons) :
                            ?>
                            <li class="lesson-item active">
                                <span><a href="/study/?courseId=<?=$courseId?>&lessonId=<?=$listLessons[0]?>"><?= $index++ .". " . $listLessons[2] ?></a></span>
                            </li>
                            <?php endforeach;?>
                            <!-- <li class="lesson-item locked">
                                <span>2. Domain là gì? Tên miền là gì?</span>
                                <span class="duration">10:34</span>
                            </li>
                            <li class="lesson-item locked">
                                <span>3. Mua áo F8 | Đăng ký học Offline</span>
                                <span class="duration">01:00</span>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <footer class="fixed-buttons">
                    <button class="prev-button" "><a href="href="/study/?courseId=<?=$courseId?>&lessonId=<?=$listLessons[0] - 1?>"></a>← Bài trước</button>
                    <button class="next-button" href="/study/?courseId=<?=$courseId?>&lessonId=<?=$listLessons[0] + 1?>">Bài tiếp theo →</button>
                </footer>
            </div>
            <script src="../public/assets/js/study.js"></script>
        </body>
        </html>
<?php
   else :
    echo "Không có dữ liệu bài học";
    endif;
}
}   
