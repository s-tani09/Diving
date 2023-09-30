<?php
$campaign = esc_url(home_url('/campaign/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$contact = esc_url(home_url('/contact/'));
?>

<aside class="blog-side">
  <div class="blog-side__content">
    <div class="blog-side__title side-title">
      <h2 class="side-title__main">人気記事</h2>
    </div>
    <?php set_post_views(get_the_ID()); // 以前の setPostViews() が set_post_views() に変更されたものと仮定
    $args = array(
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
      'posts_per_page' => 3,
      'order' => 'DESC',
    );
    $custom_query = new WP_Query($args);
    if ($custom_query->have_posts()) :
      while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <div class="blog-side__cards blog-side-cards">
      <div class="blog-side-cards__item blog-side-card">
        <a href="<?php the_permalink(); ?>">
          <div class="blog-side-card__container">
            <div class="blog-side-card__image">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg"
                alt="画像なし">
              <?php endif; ?>
            </div>
            <div class="blog-side-card__body">
              <time class="blog-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h3 class="blog-side-card__title"><?php echo wp_trim_words(get_the_title(), 14, '…'); ?></h3>
            </div>
          </div>
        </a>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>

  <div class="blog-side__content">
    <div class="blog-side__title side-title">
      <h2 class="side-title__main">口コミ</h2>
    </div>
    <div class="blog-side__voice-items voice-lists">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'order' => 'DESC'
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="voice-lists__item voice-list">
        <div class="voice-list__image">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
          <?php else : ?>
          <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg" alt="画像なし">
          <?php endif; ?>
        </div>
        <div class="voice-list__body">
          <div class="voice-list__info">
            <p class="voice-card__age"><?php echo get_the_date('Y.m.d'); ?></p>
          </div>
          <h3 class="voice-list__title"><?php echo wp_trim_words(get_the_title(), 22, '…'); ?></h3>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); else : ?>
      <p>記事が見つかりませんでした</p>
      <?php endif; ?>
      <div class="voice-list__button">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button"><span>view more</span></a>
      </div>
    </div>
  </div>

  <div class="blog-side__content blog-side__content--side">
    <div class="blog-side__title side-title">
      <h2 class="side-title__main">キャンペーン</h2>
    </div>
    <div class="blog-side__campaign campaign-cards">
      <?php
      $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => 2
      );
      $the_query = new WP_Query($args); ?>
      <ul class="campaign-cards__items campaign-cards__items--column">
        <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="campaign-cards__item campaign-card">
          <div class="campaign-card__image campaign-card__image--side">
            <?php if (has_post_thumbnail()) : ?>
            <div class="campaign-card__image">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php else : ?>
            <div class="campaign-card__image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/images/common/no-image.jpg"
                alt="画像無し">
            </div>
            <?php endif; ?>
            <div class="campaign-card__body campaign-card__body--center">
              <div class="campaign-card__category">
                <?php
                $terms = get_the_terms($post->ID, 'campaign_category');
                foreach ($terms as $term) {
                  echo $term->name;
                } ?>
              </div>
              <h3 class="campaign-card__title"><?php the_title(); ?></h3>
            </div>
            <div class="campaign-card__textBlock campaign-card__textBlock--side">
              <p class="campaign-card__text campaign-card__text--side">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price campaign-card__price--side">
                <?php
                $amount = get_field('amount');
                if ($amount) :
                  $price_regular = $amount['price_regular'];
                  $price_sale = $amount['price_sale']; ?>
                <p class="campaign-card__price-regular">&yen;<?php echo number_format($price_regular); ?></p>
                <p class="campaign-card__price-sale">&yen;<?php echo number_format($price_sale); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </li>
        <?php endwhile; wp_reset_postdata(); else : ?>
        <p>情報が見つかりませんでした</p>
        <?php endif; ?>
      </ul>
    </div>
    <div class="campaign__button campaign__button--sub">
      <a href="<?php echo $campaign; ?>" class="button"><span>view more</span></a>
    </div>
  </div>

  <div class="blog-side__content blog-side__content--archive">
    <div class="blog-side__title side-title">
      <h2 class="side-title__main">アーカイブ</h2>
    </div>
    <div class="blog-side__archive side-archive">
      <ul class="side-archive__lists">
        <?php
        $current_year = date('Y');
        for ($year = $current_year; $year >= $current_year - 2; $year--) :
          $archive_link = get_year_link($year);
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'date_query' => array(
              array(
                'year' => $year,
              ),
            ),
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) :
            $is_current_year = ($year === $current_year); ?>
        <li class="side-archive__list">
          <p class="side-archive__year js-side-archive__year"><span><?php echo $year; ?></span></p>
          <ul class="side-archive__items">
            <?php
                for ($month = 12; $month >= 1; $month--) :
                  $archive_link = get_month_link($year, $month);
                  $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'date_query' => array(
                      array(
                        'year' => $year,
                        'month' => $month,
                      ),
                    ),
                  );
                  $query = new WP_Query($args);
                  if ($query->have_posts()) :
                    $month_label = date('n月', mktime(0, 0, 0, $month, 1, $year));
                    $post_count = $query->found_posts; ?>
            <li class="side-archive__item">
              <a href="<?php echo $archive_link; ?>">
                <p class="side-archive__month"><span><?php echo $month_label; ?></span>(<?php echo $post_count; ?>)</p>
              </a>
            </li>
            <?php endif; endfor; ?>
          </ul>
        </li>
        <?php endif; endfor; ?>
      </ul>
    </div>
  </div>
</aside>