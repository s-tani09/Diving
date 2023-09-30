<?php get_header(); ?>
<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo esc_url(get_template_directory_uri()) ?>/dist/assets/images/common/voice-sub-pc.jpg" />
          <img src="<?php echo esc_url(get_template_directory_uri()) ?>/dist/assets/images/common/voice-sub-sp.jpg"
            alt="エメラルドグリーンの海でダイビングをしている様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">voice</h1>
      </div>
    </div>
  </div>

  <?php get_template_part('parts/breadcrumb') ?>

  <section class="archive-voice sub-voice">
    <div class="archive-voice__inner inner">
      <div class="archive-voice__categories categories">
        <div class="categories__inner">
          <ul class="categories__items" id="categories">
            <li
              class="categories__item <?php echo (is_front_page() || is_post_type_archive('voice')) ? 'current' : ''; ?>">
              <a class="js-categories-item" href="<?php echo esc_url(home_url('/voice/')); ?>">ALL</a>
            </li>
            <?php
            $args = [
              'taxonomy' => 'voice_category'
            ];
            $terms = get_terms($args);
            ?>
            <?php foreach ($terms as $term): ?>
            <?php
              $term_link = get_term_link($term->term_id);
              if (!is_wp_error($term_link)) :
              ?>
            <li class="categories__item <?php echo (is_tax('voice_category', $term->slug)) ? 'current' : ''; ?>">
              <a class="js-categories-item"
                href="<?php echo esc_url($term_link); ?>"><?php echo esc_html($term->name); ?></a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="archive-voice__cards voice-cards">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="voice-cards__container voice-card js-voice-content">
          <div class="voice-card__wrap">
            <div class="voice-card__box">
              <div class="voice-card__meta">
                <?php
                  $customer_info = get_field('customer_info'); // グループフィールド 'customer_info' を取得
                  // グループフィールド内のサブフィールドを取得
                  $age = isset($customer_info['voice-age']) ? esc_html($customer_info['voice-age']) : '';
                  $gender = isset($customer_info['voice-gender']) ? esc_html($customer_info['voice-gender']) : '';
                  ?>
                <p class="voice-card__age"><?php if ($age): ?><?php echo $age; ?><?php endif; ?>(<?php echo $gender; ?>)
                </p>
                <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                  if ($taxonomy_terms): ?>
                <p class="voice-card__category"><?php echo esc_html($taxonomy_terms[0]->name); ?></p>
                <?php endif; ?>
              </div>
              <h3 class="voice-card__title"><?php the_title(); ?></h3>
            </div>
            <div class="voice-card__image js-colorbox">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('medium'); ?>
              <?php else: ?>
              <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg"
                alt="画像無し">
              <?php endif; ?>
            </div>
          </div>
          <p class="voice-card__text"><?php the_field('voice_text'); ?></p>
        </div>
        <?php endwhile; else: ?>
        <p>記事が見つかりませんでした</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <div class="pagenavi">
    <div class="pagenavi__inner inner">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>