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

<?php if (!is_404() && !is_page('contact')): ?>
<section class="contact top-contact">
  <div class="contact__inner inner">
    <div class="contact__container">
      <div class="contact__left">
        <div class="contact__logo">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/CodeUps-contact.svg"
            alt="CodeUps" />
        </div>
        <div class="contact__box">
          <div class="contact__address address">
            <ul class="address__items">
              <li class="address__item">
                <p>沖縄県那覇市1&#045;1</p>
              </li>
              <li class="address__item">
                <p>TEL&#058;<span>0120&#045;000&#045;0000</span></p>
              </li>
              <li class="address__item">
                <p>営業時間&#058;<span>8&#058;30&#045;19&#058;00</span></p>
              </li>
              <li class="address__item">
                <p>定休日&#058;毎週火曜日</p>
              </li>
            </ul>
          </div>
          <div class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12386.198256017175!2d127.68047366531893!3d26.214435455412154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1688397147977!5m2!1sja!2sjp"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__right">
        <div class="contact__title section-title">
          <p class="section-title__main section-title__main--large">contact</p>
          <h2 class="section-title__sub">お問い合わせ</h2>
        </div>
        <p class="contact__text">ご予約・お問い合わせはコチラ</p>
        <div class="contact__button">
          <a href="<?php echo $contact ?>" class="button"><span>contact&nbsp;us</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<footer class="footer top-footer">
  <div class="footer__inner inner">
    <div class="footer__title">
      <div class="footer__logo">
        <a href="<?php echo $home ?>">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/CodeUps-footer.svg"
            alt="CodeUps" />
        </a>
      </div>
      <ul class="footer__snsLinks">
        <li class="footer__snsLink">
          <a href="https://ja-jp.facebook.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/facebook-icon.svg"
              alt="フェイスブック" />
          </a>
        </li>
        <li class="footer__snsLink">
          <a href="https://www.instagram.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/Instagram-icon.svg"
              alt="インスタグラム" />
          </a>
        </li>
      </ul>
    </div>
    <nav class="footer__nav footer-nav">
      <div class="footer-nav__left">
        <ul class="footer-nav__left-items">
          <li class="footer-nav__left-item">
            <a href="<?php echo $campaign; ?>">キャンペーン</a>
          </li>
          <li class="footer-nav__left-item">
            <a href="<?php echo $license; ?>">ライセンス講習</a>
          </li>
          <li class="footer-nav__left-item">
            <a href="<?php echo $diving; ?>">ファンダイビング</a>
          </li>
          <li class="footer-nav__left-item">
            <a href="<?php echo $experience; ?>">体験ダイビング</a>
          </li>
        </ul>
        <ul class="footer-nav__left-items">
          <li class="footer-nav__left-item">
            <a href="<?php echo $about; ?>">私たちについて</a>
          </li>
        </ul>
        <ul class="footer-nav__left-items">
          <li class="footer-nav__left-item">
            <a href="<?php echo $information; ?>">ダイビング情報</a>
          </li>
          <li class="footer-nav__left-item">
            <a href="<?php echo $information; ?>/information#info1">ライセンス講習</a>
          </li>
          <li class="footer-nav__left-item">
            <a href="<?php echo $information; ?>/information#info2">ファンダイビング</a>
          </li>
          <li class="footer-nav__left-item">
            <a href="<?php echo $information; ?>/information#info3">体験ダイビング</a>
          </li>
        </ul>
        <ul class="footer-nav__left-items">
          <li class="footer-nav__left-item">
            <a href="<?php echo $blog; ?>">ブログ</a>
          </li>
        </ul>
      </div>
      <div class="footer-nav__right">
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $voice; ?>">お客様の声</a>
          </li>
        </ul>
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $price; ?>">料金一覧</a>
          </li>
          <li class="footer-nav__right-item">
            <a href="<?php echo $price; ?>/price#license">ライセンス講習</a>
          </li>
          <li class="footer-nav__right-item">
            <a href="<?php echo $price; ?>/price#experience">体験ダイビング</a>
          </li>
          <li class="footer-nav__right-item">
            <a href="<?php echo $price; ?>/price#diving">ファンダイビング</a>
          </li>
        </ul>
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $faq; ?>">よくある質問</a>
          </li>
        </ul>
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $sitemap; ?>">サイトマップ</a>
          </li>
        </ul>
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
          </li>
        </ul>
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $terms; ?>">利用規約</a>
          </li>
        </ul>
        <ul class="footer-nav__right-items">
          <li class="footer-nav__right-item">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="footer__copyright">
      <small>Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;<?php echo date('Y'); ?>&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
  </div>
</footer>
<div class="page-top-button js-page-top">
  <a href="#">
    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/arrow-right.svg" alt="上向き矢印" />
  </a>
</div>
<?php wp_footer(); ?>
</body>

</html>