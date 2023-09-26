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
        <h1 class="sub-mv__title">privacy&nbsp;Policy</h1>
      </div>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  <div class="privacy-policy sub-privacy-policy">
    <div class="privacy-policy__inner inner">
      <div class="privacy-policy__contents">
        <h2 class="privacy-policy__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
</main>
<?php get_footer(); ?>