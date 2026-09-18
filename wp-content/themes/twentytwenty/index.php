<?php get_header(); ?>

<style>
  /* Khung chứa danh sách bài viết */
  .content-list-container {
      max-width: 900px;
      margin: 30px auto;
      padding: 0 15px;
  }

  /* Mỗi thẻ bài viết */
  .post-card-item {
      display: flex !important;
      align-items: center !important;
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      border-radius: 6px !important;
      padding: 20px !important;
      margin-bottom: 20px !important;
      box-shadow: 0 2px 4px rgba(0,0,0,0.02) !important;
  }

  /* 1. Cột Ngày & Tháng */
  .post-card-date {
      width: 80px !important;
      min-width: 80px !important;
      text-align: center !important;
      padding-right: 15px !important;
      margin-right: 15px !important;
      border-right: 1px solid #cbd5e1 !important;
  }

  .post-card-date .day-num {
      font-size: 36px !important;
      font-weight: 800 !important;
      line-height: 1 !important;
      color: #1e293b !important;
      font-family: Georgia, serif !important;
  }

  .post-card-date .month-text {
      font-size: 11px !important;
      color: #64748b !important;
      text-transform: uppercase !important;
      margin-top: 6px !important;
  }

  /* 2. Cột Ảnh đại diện sản phẩm/bài viết */
  .post-card-thumb {
      width: 140px !important;
      height: 100px !important;
      min-width: 140px !important;
      margin-right: 20px !important;
      overflow: hidden;
      border-radius: 4px;
      background-color: #f1f5f9;
  }

  .post-card-thumb img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
      display: block;
  }

  /* 3. Cột Tiêu đề & Tóm tắt */
  .post-card-info {
      flex: 1 !important;
  }

  .post-card-title {
      font-size: 16px !important;
      font-weight: 700 !important;
      margin: 0 0 8px 0 !important;
      line-height: 1.4 !important;
      text-transform: uppercase !important;
  }

  .post-card-title a {
      color: #0284c7 !important;
      text-decoration: none !important;
  }

  .post-card-title a:hover {
      text-decoration: underline !important;
  }

  .post-card-excerpt {
      font-size: 13px !important;
      color: #64748b !important;
      margin: 0 !important;
      line-height: 1.5 !important;
  }
</style>

<div class="content-list-container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); 
            $day = get_the_date('d');
            $month = get_the_date('m');
        ?>
            
            <article class="post-card-item">
                <!-- 1. Ngày / Tháng -->
                <div class="post-card-date">
                    <div class="day-num"><?php echo $day; ?></div>
                    <div class="month-text">THÁNG <?php echo $month; ?></div>
                </div>

                <!-- 2. Ảnh Đại Diện (Nếu bài viết không có ảnh sẽ dùng ảnh mặc định) -->
                <div class="post-card-thumb">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="https://via.placeholder.com/140x100?text=No+Image" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </a>
                </div>

                <!-- 3. Tiêu đề & Tóm tắt -->
                <div class="post-card-info">
                    <h2 class="post-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="post-card-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 20, ' [...]' ); ?>
                    </p>
                </div>
            </article>

        <?php endwhile; ?>
    <?php else : ?>
        <p>Chưa có bài viết nào.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
