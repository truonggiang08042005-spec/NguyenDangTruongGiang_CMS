<?php
/**
 * Trang Giới thiệu (About Us)
 */
require_once __DIR__ . '/wp-load.php';

get_header();
?>

<main id="primary" class="site-main" style="max-width: 1200px; margin: 40px auto; padding: 0 20px; font-family: system-ui, -apple-system, sans-serif;">
    <article class="page type-page status-publish hentry">
        <header class="entry-header" style="margin-bottom: 30px; text-align: center;">
            <h1 class="entry-title" style="font-size: 2.5rem; color: #1d2327;">Về Chúng Tôi (About Us)</h1>
            <p style="color: #646970; font-size: 1.1rem;">Chào mừng bạn đến với hệ thống CMS Nguyễn Đăng Trường Giang</p>
        </header>

        <div class="entry-content" style="line-height: 1.8; font-size: 1.1rem; color: #2c3338; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
            <h2>Giới thiệu dự án</h2>
            <p>Đây là hệ thống quản trị nội dung (CMS) được xây dựng trên nền tảng WordPress chuyên nghiệp, giúp tối ưu hóa việc quản lý bài viết, sản phẩm và dịch vụ công nghệ.</p>
            
            <h2 style="margin-top: 30px;">Tầm nhìn & Sứ mệnh</h2>
            <p>Cung cấp trải nghiệm người dùng hiện đại, tối ưu hiệu suất và mang lại giải pháp quản lý nội dung số hiệu quả.</p>
        </div>
    </article>
</main>

<?php
get_footer();
