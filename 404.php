<?php get_header(); ?>


<div class="wrap">
  <main>
    <section class="not-found sub-not-found">
      <div class="not-found__inner inner">
        <!-- パンくず -->
        <?php get_template_part('parts/breadcrumb') ?>
        <div class="not-found__content">
          <h1 class="not-found__title">404</h1>
          <p class="not-found__text">申し訳ありません。<br />お探しのページが見つかりません。</p>
          <div class="not-found__button">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--green">
              <span>page&nbsp;TOP</span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>


  <?php get_footer(); ?>