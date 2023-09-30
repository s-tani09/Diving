<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$policy = esc_url( home_url( '/privacy-policy/' ) );
$terms = esc_url( home_url( '/terms-of-service/' ) );
$sitemap = esc_url( home_url( '/site-map/' ) );
?>

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
        <h1 class="sub-mv__title">site&nbsp;MAP</h1>
      </div>
    </div>
  </div>
  <?php get_template_part('parts/breadcrumb') ?>
  <div class="page-site-map sub-site-map">
    <div class="page-site-map__inner inner">
      <nav class="page-site-map__content site-map">
        <div class="site-map__left">
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="site-map__left-item">
              <a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-license">ライセンス講習</a>
            </li>
            <li class="site-map__left-item">
              <a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-diving">ファンダイビング</a>
            </li>
            <li class="site-map__left-item">
              <a href="<?php echo esc_url(home_url('')); ?>/campaign_category/campaign-experience">体験ダイビング</a>
            </li>
          </ul>
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="<?php echo $about; ?>">私たちについて</a>
            </li>
          </ul>
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="site-map__left-item">
              <a href="<?php echo esc_url(home_url('')); ?>/information#info">ライセンス講習</a>
            </li>
            <li class="site-map__left-item">
              <a href="<?php echo esc_url(home_url('')); ?>/information#info">ファンダイビング</a>
            </li>
            <li class="site-map__left-item">
              <a href="<?php echo esc_url(home_url('')); ?>/information#info">体験ダイビング</a>
            </li>
          </ul>
          <ul class="site-map__left-items">
            <li class="site-map__left-item">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="site-map__right">
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="site-map__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#license">ライセンス講習</a>
            </li>
            <li class="site-map__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#experience">体験ダイビング</a>
            </li>
            <li class="site-map__right-item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/price#diving">ファンダイビング</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $sitemap; ?>">サイトマップ</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $terms; ?>">利用規約</a>
            </li>
          </ul>
          <ul class="site-map__right-items">
            <li class="site-map__right-item">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</main>
<?php get_footer(); ?>