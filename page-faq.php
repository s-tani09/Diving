<?php get_header(); ?>

<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/faq-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/faq-sub-sp.jpg"
            alt="エメラルドグリーンの海と白い砂浜が映っている様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title sub-mv__title-uppercase">faq</h1>
      </div>
    </div>
  </div>
  <?php get_template_part('parts/breadcrumb') ?>
  <div class="page-faq sub-faq">
    <div class="page-faq__inner inner">
      <div class="page-faq__contents">
        <dl class="page-faq__content faq-lists js-faq-lists">
          <?php
            $faq_group = SCF::get_option_meta( 'theme-options-faq', 'faq_group' );
            foreach ($faq_group as $fields ) :
              if(esc_html( $fields['question'] ) && esc_html( $fields['answer'] )): ?>
          <div class="faq-lists__items faq-list">
            <dt class="faq-list__question js-faq-question">
              <p class="faq-list__title"><?php echo esc_html( $fields['question'] ); ?></p>
            </dt>
            <dd class="faq-list__answer js-faq-answer">
              <p class="faq-list__explanation">
                <?php echo esc_html( $fields['answer'] ); ?>
              </p>
            </dd>
          </div>
          <?php endif; endforeach ;?>
        </dl>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>