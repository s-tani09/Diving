<?php get_header(); ?>
<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/others-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/others-sp.jpg"
            alt="珊瑚に群がるたくさんの魚たちの様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">terms&nbsp;of&nbsp;Service</h1>
      </div>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  <section class="terms-of-service sub-terms-of-service">
    <div class="terms-of-service__inner inner">
      <div class="terms-of-service__contents">
        <h2 class="terms-of-service__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>