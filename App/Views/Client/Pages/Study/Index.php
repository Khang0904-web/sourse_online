<?php

namespace App\Views\Client\Pages\Study;
use App\Views\BaseView;
use App\Views\Client\Components\Category;

class Index extends BaseView
{
    public static function render($data = null)
    {

?>


        <div class="bodyindex container mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    Category::render($data['sourse']);
                    ?>
                </div>
                <div class="col-md-9">
                    <?php
                    if (count($data) && count($data['lessons'])) :
                    ?>
                        <h1 class="text-center mb-3" style="color: white;">Sản phẩm</h1>
                        <div class="row">
                            <?php
                            foreach ($data['lessons'] as $item) :
                            ?>
                                
                                <div><?$item['title_lesson']?></div>

                            <?php
                            endforeach;

                            ?>
                        </div>
                    <?php
                    else :
                    ?>
                        <h3 class="text-center text-danger">Không có sản phẩm</h3>

                    <?php
                    endif;
                    ?>
                </div>
            </div>



        </div>



<?php

    }
}
