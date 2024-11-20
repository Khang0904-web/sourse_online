<?php

// namespace App\Views\Client;
namespace App\Views\Client\Pages\Study;

use App\Views\BaseView;
use App\Views\Client\Components\ProductList;
use App\Views\Client\Pages\Product\Index;
use App\Views\Client\Pages\Product\Listhome;

class Study_page extends BaseView
{
    public static function render($data = null)
    {
?>

        <body>
            <br>
            <div class="container">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid navbar-1">
                        <a class="navbar-brand" href="#">
                            <img src="/public/uploads/image/2.jpg" alt="Logo" width="50px" height="45px" class="d-inline-block align-text-center">
                        </a>
                        <h4 class="text-sourse">Tên Bài Học</h4>
                        <div class="_actions_k7irp_67">
                            <div class="_progress-bar_k7irp_73">
                                <div class="_pie-wrapper_1iwxq_1 progress-45 style-2" style="--size: 34px; --progress: 0; --bar-width: 2px; --shadow-border-color: #4d4f50;">
                                    <div class="_pie_1iwxq_1">
                                        <div class="_left-side_1iwxq_39 _half-circle_1iwxq_28"></div>
                                    </div>
                                    <div class="_shadow_1iwxq_9"></div>
                                    <div class="_body_1iwxq_52">
                                        <div class="_percent_k7irp_102"><span class="_num_k7irp_84">0</span>%</div>
                                    </div>
                                </div>
                            </div>
                        <button class="_action-btn_k7irp_110" data-tour=""><span class="_label_k7irp_137">9/12</span>
                        </button>
                        <button class="_action-btn_k7irp_110" data-tour=""><span class="_label_k7irp_137">Ghi chú</span>
                        </button>
                        <button class="_action-btn_k7irp_110" data-tour=""><span class="_label_k7irp_137">Ghi chú</span>
                        </button>
                            
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-9">
                        <div class="ratio ratio-16x9">
                            <iframe width="100" height="315" src="https://www.youtube.com/embed/7ig2lXjozdw?si=Wi2xY5EjMFjNYPL3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="container">
                            <h5>Nội dung khóa học</h5>
                            <div class="selection">
                                <select class="form-select" aria-label="Default select example">
                                    <h5>Khái niệm</h5>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            </div>
            <div class="container">
                <div class="col-md-9">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            </main>
            <!-- Bootstrap JavaScript Libraries -->
        </body>

        </html>

<?php
    }
}
