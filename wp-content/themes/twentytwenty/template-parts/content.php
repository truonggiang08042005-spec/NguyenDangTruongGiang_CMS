<article class="container my-5" style="max-width: 800px;">
    <!-- Tiêu đề + Ngày tháng màu vàng -->
    <div class="d-flex justify-content-between align-items-start mb-4" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
        <h1 style="font-size: 28px; font-weight: bold; margin: 0;"><?php the_title(); ?></h1>
        
        <div style="width: 60px; height: 60px; background-color: #fbc02d; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; font-weight: bold; font-size: 13px; line-height: 1.1; flex-shrink: 0; margin-left: 15px;">
            <span><?php echo get_the_date('d/m'); ?></span>
            <span>'<?php echo get_the_date('y'); ?></span>
        </div>
    </div>

    <!-- Nội dung bài viết -->
    <div class="post-detail-content">
        <?php the_content(); ?>
    </div>

    <!-- Nguồn bài viết -->
    <div style="text-align: right; font-style: italic; color: #666; margin-top: 30px;">
        (Theo Người Lao Động)
    </div>
</article>