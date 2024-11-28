<?php

namespace App\Views\Client;

use App\Views\BaseView;
use App\Views\Client\Components\ProductList;
use App\Views\Client\Pages\Product\Index;
use App\Views\Client\Pages\Product\Listhome;
use App\Controllers\Client\HomeController;

class Home extends BaseView
{

  public static function render($data = null)
  { ?>

    <style>
      .card-body {
        padding: 1rem;
      }

      .card-body h5 {
        font-size: 1.25rem;
        font-weight: bold;
      }

      .price {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
      }

      .price p {
        margin: 0;
      }

      .btn-title {
        background-color: #ffcc66;
        /* Màu vàng như trong ảnh */
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        text-align: center;
        font-size: 1rem;
        font-weight: bold;
        text-decoration: none;
      }

      .btn-title:hover {
        background-color: #e6b856;
        /* Màu tối hơn khi hover */
      }

      .align-items-center p {
        margin: 0;
      }

      .mt-3 {
        margin-top: 1rem;
      }
    </style>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <!-- Indicators/Dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="https://img-b.udemycdn.com/notices/web_carousel_slide/image/e6cc1a30-2dec-4dc5-b0f2-c5b656909d5b.jpg"
            class="d-block w-100" alt="Slide 1">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="https://img-b.udemycdn.com/notices/web_carousel_slide/image/10ca89f6-811b-400e-983b-32c5cd76725a.jpg"
            class="d-block w-100" alt="Slide 2">
        </div>
      </div>

      <!-- Navigation Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <div class="container py-5">
      <!-- Khóa học miễn phí -->
      <h2 class="mb-4">Khóa học miễn phí</h2>


      <?php if (isset($data) && isset($data['products'])):

        ?>
        <div class="row g-4">
          <?php foreach ($data['products'] as $items): ?>
            <div class="col-md-3">
              <div class="card rounded-4">

                <img src="<?= APP_URL ?>/public/uploads/products/<?= $items['image'] ?>" class="card-img-top" alt=""
                  style="width: 100%; display: block;" data-holder-rendered="true">

                <div class="card-body">
                  <h5 class="card-text col-md-12 text-center">
                    <?= $items['name'] ?>
                  </h5>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                    <?php if ($items['discount_price'] > 0): ?>
                      <div>
                        <p class="text-muted mb-1">
                          Giá gốc: <strike>
                            <?= number_format($items['price']) ?> đ
                          </strike>
                        </p>
                        <p class="mb-0">
                          Giá giảm: <strong class="text-danger">
                            <?= number_format($items['price'] - $items['discount_price']) ?> đ
                          </strong>
                        </p>
                      </div>
                    <?php else: ?>
                      <p class="mb-0">Giá tiền:
                        <?= number_format($items['price']) ?> đ
                      </p>
                    <?php endif; ?>
                    <a href="/Study_page.php?courseId=<?= $items['id'] ?>&lessonId=1" class="btn btn-title">Xem Khóa Học</a>
                  </div>
                </div>


              </div>
            </div>
            <?php
          endforeach;
      else:
        echo 'Lỗi dữ liệu';
      endif; ?>
        <!-- Bài viết nổi bật -->
        <h2 class="my-5">Bài viết nổi bật</h2>
        <div class="row ">
          <div class="col-md-3">
            <div class="card rounded-4">
              <img
                src="data:image/jpeg;base64,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"
                alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Tổng hợp các sản phẩm của học viên tại F8</h5>
                <p class="info">6 phút đọc</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
  }
}
