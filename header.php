<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$experience = esc_url(home_url('/campaign_category/experience/'));
$diving = esc_url(home_url('/campaign_category/diving/'));
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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header header-layout js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home ; ?>">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/CodeUps.svg" alt="CodeUps" />
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">campaign</div>
                <div class="pc-nav__item-ja">キャンペーン</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about; ?>">
              <div class="pc-nav__item-wrapper">
                <p class="pc-nav__item-en">about&nbsp;us</p>
                <p class="pc-nav__item-ja">私たちについて</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">information</div>
                <div class="pc-nav__item-ja">ダイビング情報</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">blog</div>
                <div class="pc-nav__item-ja">ブログ</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">voice</div>
                <div class="pc-nav__item-ja">お客様の声</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">price</div>
                <div class="pc-nav__item-ja">料金一覧</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item pc-nav__item--uppercase">
            <a href="<?php echo $faq; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">faq</div>
                <div class="pc-nav__item-ja">よくある質問</div>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>">
              <div class="pc-nav__item-wrapper">
                <div class="pc-nav__item-en">contact</div>
                <div class="pc-nav__item-ja">お問い合わせ</div>
              </div>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__left">
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="<?php echo $campaign; ?>">キャンペーン</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="<?php echo $license; ?>">ライセンス取得</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="<?php echo $diving; ?>">ファンダイビング</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="<?php echo $experience; ?>">体験ダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="<?php echo $about; ?>">私たちについて</a>
              </li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="<?php echo $information; ?>">ダイビング情報</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="<?php echo $information; ?>">ライセンス講習</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="<?php echo $information; ?>">体験ダイビング</a>
              </li>
              <li class="sp-nav__left-item">
                <a href="<?php echo $information; ?>">ファンダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__left-items">
              <li class="sp-nav__left-item">
                <a href="<?php echo $blog; ?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="sp-nav__right">
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $faq; ?>">お客様の声</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $price; ?>">料金一覧</a>
              </li>
              <li class="sp-nav__right-item">
                <a href="<?php echo $price; ?>">ライセンス講習</a>
              </li>
              <li class="sp-nav__right-item">
                <a href="<?php echo $price; ?>">体験ダイビング</a>
              </li>
              <li class="sp-nav__right-item">
                <a href="<?php echo $price; ?>">ファンダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $faq; ?>">よくある質問</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $sitemap; ?>">サイトマップ</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $policy; ?>">プライバシー<br />ポリシー</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $terms; ?>">利用規約</a>
              </li>
            </ul>
            <ul class="sp-nav__right-items">
              <li class="sp-nav__right-item">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>