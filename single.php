<?php get_header(); ?>
<?php
    // 記事のビュー数を更新(ログイン中・クローラーは除外)
    if (!is_user_logged_in() && !is_robots()) {
      setPostViews(get_the_ID());
    }
  ?>
<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/blog-sub-sp.jpg"
            alt="たくさんの魚たちが泳いでいる様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">blog</h1>
      </div>
    </div>
  </div>
  <?php get_template_part('parts/breadcrumb') ?>
  <section class="post-blog sub-blog">
    <div class="post-blog__inner inner">
      <div class="post-blog__contents">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="post-blog__main-content blog-detail">
          <div class="blog-detail__mata">
            <time class="blog-detail__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h2 class="blog-detail__title"><?php the_title(); ?></h2>
          </div>
          <?php if (has_post_thumbnail()): ?>
          <div class="blog-detail__image">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <?php endif; ?>
          <div class="blog-detail__text">
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
          <?php else: ?>
          <p>記事が見つかりませんでした</p>
          <?php endif; ?>
          <div class="blog-detail__pagenavi">
            <?php if (get_previous_post()):?>
            <?php previous_post_link('%link', '<'); ?>
            <?php endif; ?>
            <?php if (get_next_post()):?>
            <?php next_post_link('%link', '>'); ?>
            <?php endif; ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>