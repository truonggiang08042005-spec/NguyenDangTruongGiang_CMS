<?php get_header(); ?>

<style>
  /* Fix lỗi bể khung do Theme Twenty Twenty */
  .search-results-wrapper {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 15px;
  }
  .search-card {
      display: flex !important;
      flex-direction: row !important;
      align-items: center !important;
      border: 1px solid #e0e0e0;
      padding: 15px;
      margin-bottom: 20px;
      background: #fff;
      border-radius: 4px;
  }
  .search-card-img {
      width: 200px !important;
      min-width: 200px;
      height: 120px;
      object-fit: cover;
      margin-right: 20px;
  }
  .search-card-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
  .search-card-date {
      min-width: 90px;
      text-align: center;
      padding: 0 15px;
      border-left: 1px solid #eee;
      border-right: 1px solid #eee;
      margin-right: 20px;
  }
  .search-card-date .day {
      font-size: 26px;
      font-weight: bold;
      line-height: 1;
      color: #333;
  }
  .search-card-date .month {
      font-size: 12px;
      color: #777;
      text-transform: uppercase;
      margin-top: 4px;
  }
  .search-card-content {
      flex-grow: 1;
  }
  .search-card-title {
      font-size: 18px !important;
      font-weight: bold !important;
      margin: 0 0 8px 0 !important;
  }
  .search-card-title a {
      color: #0056b3;
      text-decoration: none;
  }
  .search-card-excerpt {
      font-size: 14px;
      color: #666;
      margin: 0;
      line-height: 1.5;
  }
</style>

<div class="search-results-wrapper">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); 
            // Đoạn code lấy ngày tháng theo đúng gợi ý của bài tập
            $post = get_post();
            $post_date = get_the_date('d', $post->ID);
            $post_month = get_the_date('m', $post->ID);
        ?>
            
            <!-- Khối từng bài viết theo định dạng hàng ngang -->
            <div class="search-card">
                
                <!-- 1. Cột Ảnh bên trái -->
                <div class="search-card-img">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="https://via.placeholder.com/200x120" alt="No image">
                    <?php endif; ?>
                </div>

                <!-- 2. Cột Ngày/Tháng ở giữa -->
                <div class="search-card-date">
                    <div class="day"><?php echo $post_date; ?></div>
                    <div class="month">THÁNG <?php echo $post_month; ?></div>
                </div>

                <!-- 3. Cột Tiêu đề và Tóm tắt bên phải -->
                <div class="search-card-content">
                    <h3 class="search-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="search-card-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 25, ' [...]' ); ?>
                    </p>
                </div>

            </div>

        <?php endwhile; ?>
    <?php else : ?>
        <p>Không tìm thấy kết quả nào.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
