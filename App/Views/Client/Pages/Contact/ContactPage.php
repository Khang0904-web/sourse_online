<?php

namespace App\Views\Client\Pages\Contact;

use App\Views\BaseView;


class ContactPage extends BaseView
{
    public static function render($data = null)
    { ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-img col-md-12">
                        <img class="banner-contact" src="https://www.netlabindia.com/wp-content/uploads/2018/06/contact-us-banner.jpg" alt="">
                    </div>

                    <div class="contact-form">
                        <h4 class="text-center mb-4">Liên hệ</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Nội dung</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Nhập nội dung"></textarea>
                            </div>
                            <div class="submit d-flex justify-content-end">
                            <button type="submit" class="btn btn-submit " style="background-color: #FBCB1C; color:#ffffff">Gửi <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="container mt-5 text-center" style="border:none;">
                        <div class="card  p-4">
                            <h4 class="mb-4">Thông Tin Liên Hệ</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-house-door-fill me-2"></i>
                                    Toà nhà FPT Polytechnic, Đ. Số 22, Thường Thạnh, Cái Răng, Cần Thơ
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    0973 747 609 <span class="text-muted">(Tư vấn khóa học)</span>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    0973 747 609 <span class="text-muted">(Góp ý/Khiếu nại)</span>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-envelope-fill me-2"></i>
                                    <a href="mailto:khumtcspc07131@fpt.edu.vn" style="text-decoration: none; color:#212529;">khumtcspc07131@fpt.edu.vn</a>
                                </li>
                            </ul>
                            <h5 class="mt-4">Kết nối với chúng tôi</h5>
                            <div>
                                <a href="https://www.facebook.com/share/1GUYY3Re7n/?mibextid=LQQJ4d" class="me-3">
                                    <i class="bi bi-facebook fs-3 "></i>
                                </a>
                                <a href="https://youtu.be/YFSppMzVBak?si=qxF38oIo7-8Ti_5r">
                                    <i class="bi bi-youtube fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flash-map mt-5 col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.3800059254763!2d105.7556524742466!3d9.982081490122408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2sFPT%20Polytechnic%20College!5e1!3m2!1szh-TW!2s!4v1732137369384!5m2!1szh-TW!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>





    <?php }
}
