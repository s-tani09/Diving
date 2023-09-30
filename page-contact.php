<?php get_header(); ?>
<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/contact-sub-sp.jpg"
            alt="エメラルドグリーンの海の波の様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">contact</h1>
      </div>
    </div>
  </div>
  <?php get_template_part('parts/breadcrumb') ?>
  <div class="page-contact sub-page-contact">
    <div class="page-contact__inner inner">
      <?php echo do_shortcode('[contact-form-7 id="172da36" title="お問い合わせ"]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>