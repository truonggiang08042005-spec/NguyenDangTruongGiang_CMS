<?php get_header(); ?>

<style>
  .search-results-page {
      max-width: 900px !important;
      margin: 40px auto !important;
      padding: 0 15px !important;
      clear: both !important;
  }
  .search-result-item {
      display: flex !important;
      flex-direction: row !important;
      align-items: center !important;
      border: 1px solid #e0e0e0 !important;
      padding: 15px !important;
      margin-bottom: 20px !important;
      background: #fff !important;
      border-radius: 4px !important;
  }
  .search-item-thumb {
      width: 180px !important;
      min-width: 180px !important;
      height: 110px !important;
      overflow: hidden !important;
      margin-right: 20px !important;
  }
  .search-item-thumb img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
  }
  .search-item-date {
      width: 90px !important;
      min-width: 90px !important;
      text-align: center !important;
      padding: 0 10px !important;
      border-left: 1px solid #ddd !important;
      border-right: 1px solid #ddd !important;
      margin-right: 20px !important;
  }
  .search-item-date .day {
      font-size: 26px !important;
      font-weight: bold !important;
      line-height: 1 !important;
      color: #333 !important;
  }
  .search-item-date .month {
      font-size: 11px !important;
      color: #666 !important;
      text-transform: uppercase !important;
      margin-top: 5px !important;
  }
  .search-item-info {
      flex: 1 !important;
  }
  .search-item-title {
      font-size: 18px !important;
      font-weight: bold !important;
      margin: 0 0 8px 0 !important;
  }
  .search-item-title a {
      color: #0056b3 !important;
      text-decoration: none !important;
  }
  .search-item-excerpt {
      font-size: 13px !important;
      color: #555 !important;
      margin: 0 !important;
      line-height: 1.5 !important;
  }
</style>

<div class="search-results-page">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); 
            $post_id = get_the_ID();
            $post_day = get_the_date('d', $post_id);
            $post_month = get_the_date('m', $post_id);
        ?>
            <div class="search-result-item">
                <div class="search-item-thumb">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="https://via.placeholder.com/180x110" alt="No Image">
                    <?php endif; ?>
                </div>

                <div class="search-item-date">
                    <div class="day"><?php echo $post_day; ?></div>
                    <div class="month">THÁNG <?php echo $post_month; ?></div>
                </div>

                <div class="search-item-info">
                    <h3 class="search-item-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="search-item-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 25, ' [...]' ); ?>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Không tìm thấy kết quả phù hợp.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>