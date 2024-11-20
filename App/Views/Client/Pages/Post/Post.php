<?php

namespace App\Views\Client\Pages\Post;

use App\Views\BaseView;

class Post extends BaseView
{
  public static function render($data = null)
  {

?>
<div class="title">
    <h3>Lộ trình bài viết</h3>
    <div class="tile2">Tổng hợp các bài viết chia sẻ về kinh nghiệm tự học lập trình online và các kỹ thuật lập trình web.</div>
  </div>

  <div class="wrapper">
    <!-- Main content with scroll -->
    <div class="main-content">

      <div class="post">
        <div class="content">
          <div class="author">
            <strong>Sơn Đặng</strong> <span>✔️</span>
          </div>
          <h3><a href="#">Hoàng Bảo Trung - Học viên tiêu biểu của F8 tỏa sáng với dự án "AI Powered Learning"</a></h3>
          <p>Trong thời đại công nghệ số 4.0, việc học không còn bó buộc trong những cuốn sách truyền thống...</p>
          <div class="meta">
            <span>ReactJS</span> • <span>2 tháng trước</span> • <span>6 phút đọc</span>
          </div>
        </div>
        <img src="/public/uploads/image/kh1.jpg" alt="Ảnh bài viết">
      </div>

      <div class="post">
        <div class="content">
          <div class="author">
            <strong>Lý Cao Nguyên</strong>
          </div>
          <h3><a href="#">Mình đã làm thế nào để hoàn thành một dự án website chỉ trong 15 ngày</a></h3>
          <p>Xin chào mọi người, mình là Lý Cao Nguyên. Mình đã làm một dự án website front-end với hơn 100 bài học và 200 bài viết...</p>
          <div class="meta">
            <span>Front-end</span> • <span>5 tháng trước</span> • <span>4 phút đọc</span>
          </div>
        </div>
        <img src="/public/uploads/image/kh2.jpeg" alt="Ảnh bài viết">
      </div>

      <div class="post">
        <div class="content">
          <div class="author">
            <strong>Lý Cao Nguyên</strong>
          </div>
          <h3><a href="#">Mình đã làm thế nào để hoàn thành một dự án website chỉ trong 15 ngày</a></h3>
          <p>Xin chào mọi người, mình là Lý Cao Nguyên. Mình đã làm một dự án website front-end với hơn 100 bài học và 200 bài viết...</p>
          <div class="meta">
            <span>Front-end</span> • <span>5 tháng trước</span> • <span>4 phút đọc</span>
          </div>
        </div>
        <img src="/public/uploads/image/kh3.jpeg" alt="Ảnh bài viết">
      </div>

      <div class="post">
        <div class="content">
          <div class="author">
            <strong>Lý Cao Nguyên</strong>
          </div>
          <h3><a href="#">Mình đã làm thế nào để hoàn thành một dự án website chỉ trong 15 ngày</a></h3>
          <p>Xin chào mọi người, mình là Lý Cao Nguyên. Mình đã làm một dự án website front-end với hơn 100 bài học và 200 bài viết...</p>
          <div class="meta">
            <span>Front-end</span> • <span>5 tháng trước</span> • <span>4 phút đọc</span>
          </div>
        </div>
        <img src="/public/uploads/image/kh4.jpeg" alt="Ảnh bài viết">
      </div>

      <div class="post">
        <div class="content">
          <div class="author">
            <strong>Lý Cao Nguyên</strong>
          </div>
          <h3><a href="#">Mình đã làm thế nào để hoàn thành một dự án website chỉ trong 15 ngày</a></h3>
          <p>Xin chào mọi người, mình là Lý Cao Nguyên. Mình đã làm một dự án website front-end với hơn 100 bài học và 200 bài viết...</p>
          <div class="meta">
            <span>Front-end</span> • <span>5 tháng trước</span> • <span>4 phút đọc</span>
          </div>
        </div>
        <img src="/public/uploads/image/khoahoc.png" alt="Ảnh bài viết">
      </div>

      <div class="pagination">
        <div>&laquo;</div>
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
        <div>&raquo;</div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
    <div class="BTN2">
      <h3>XEM CÁC BÀI VIẾT THEO CHỦ ĐỀ</h3>
      <div class="button1">
        <button>Front-end / Mobile apps</button>
        <button>Back-end / Devops</button>
        <button>UI / UX / Design</button>
        <button>Others</button>
      </div>
    </div>

    <div class="course-card">
      <h4>Khóa học HTML CSS PRO</h4>
      <ul>
        <li>Thực hành 8 dự án</li>
        <li>Hơn 300 bài tập thử thách</li>
        <li>Tặng ứng dụng Flashcards</li>
        <li>Tặng 3 Games luyện HTML CSS</li>
        <li>Tặng 20+ thiết kế trên Figma</li>
      </ul>
      <a href="#" class="cta-button">Tìm hiểu thêm</a>
    </div>
  </div>
  </div>
<?php
  }
}
