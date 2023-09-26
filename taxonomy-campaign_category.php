<?php get_header(); ?>

<?php $contact = esc_url( home_url( '/contact/' ) ); ?>

<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/campaign-sub-sp.jpg"
            alt="黄色と黒の模様の魚が２匹が向き合って泳いでいる様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">campaign</h1>
      </div>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  <section class="archive-campaign sub-campaign">
    <div class="archive-campaign__inner inner">
      <div class="archive-campaign__categories categories">
        <div class="categories__inner">
          <ul class="categories__items" id="categories">
            <li class="categories__item">
              <a class="js-categories-item" href="<?php echo esc_url(home_url('/campaign/')); ?>">ALL</a>
            </li>
            <?php
              $args = [
                'taxonomy' => 'campaign_category'
              ];
              $terms = get_terms($args);
              ?>
            <?php foreach ($terms as $term): ?>
            <li class="categories__item">
              <a class="js-categories-item"
                href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="archive-campaign__items archive-campaign-cards">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="archive-campaign-cards__item campaign-card">
          <div class="campaign-card__image">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
            <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg" alt="画像無し">
            <?php endif; ?>
          </div>
          <div class="campaign-card__body campaign-card__body--sub">
            <div class="campaign-card__category">
              <?php
              $terms = get_the_terms($post->ID, 'campaign_category');
              foreach ($terms as $term) {
                echo $term->name;
              }
              ?>
            </div>
            <h2 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h2>
          </div>
          <div class="campaign-card__textBlock campaign-card__textBlock--sub">
            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
            <div class="campaign-card__price campaign-card__price--sub">
              <?php if (get_field('price')) : ?>
              <?php $price = floatval(str_replace(',', '', get_field('price'))); ?>
              <p class="campaign-card__price-regular campaign-card__price-regular--sub">
                &yen;<?php echo number_format($price); ?></p>
              <?php endif; ?>
              <?php if (get_field('price_sale')) : ?>
              <?php $price_sale = floatval(str_replace(',', '', get_field('price_sale'))); ?>
              <p class="campaign-card__price-sale">&yen;<?php echo number_format($price_sale); ?></p>
              <?php endif; ?>
            </div>
            <p class="campaign-card__explanation u-desktop"><?php the_field('text'); ?></p>
          </div>
          <div class="campaign-card__guidance u-desktop">
            <p class="campaign-card__period"><?php the_field('data_start'); ?>-<?php the_field('data_end'); ?></p>
            <p class="campaign-card__reserve">ご予約・お問い合わせはコチラ</p>
            <div class="campaign-card__button">
              <a href="<?php echo $contact; ?>" class="button"><span>contact&nbsp;us</span></a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <p>情報が見つかりませんでした</p>
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