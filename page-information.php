<?php get_header(); ?>
<main>
  <div class="sub-mv">
    <div class="sub-mv__inner">
      <div class="sub-mv__image">
        <picture>
          <source media="(min-width: 768px)"
            srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/information-sub-pc.jpg" />
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/information-sub-sp.jpg"
            alt="オレンジ色の魚の群れの中でダイバー1人が泳いでいる様子" />
        </picture>
      </div>
      <div class="sub-mv__heading">
        <h1 class="sub-mv__title">information</h1>
      </div>
    </div>
  </div>
  <?php get_template_part('parts/breadcrumb') ?>
  <section class="page-information sub-page-information">
    <div class="page-information__inner inner">
      <div class="page-information__tab tab-menu" id="info">
        <ul class="tab-menu__lists">
          <li id="info1" data-tab="info1" class="tab-menu__list tab-whale-icon js-information-tab is-active">
            <span>ライセンス<br class="u-mobile" />講習</span>
          </li>
          <li id="info2" data-tab="info2" class="tab-menu__list tab-shark-icon js-information-tab">
            <span>ファン<br class="u-mobile" />ダイビング</span>
          </li>
          <li id="info3" data-tab="info3" class="tab-menu__list tab-fish-icon js-information-tab">
            <span>体験<br class="u-mobile" />ダイビング</span>
          </li>
        </ul>
      </div>
      <div class="page-information__content-group">
        <div class="page-information__content-block js-information-content">
          <div class="page-information__content page-info-content">
            <div class="page-info-content__text-block">
              <h2 class="page-info-content__title">ライセンス講習</h2>
              <p class="page-info-content__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&#33;スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう
                &#33;
              </p>
            </div>
            <div class="page-info-content__image-block">
              <figure class="page-info-content__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/info-01.jpg"
                  alt="エメラルドグリーンの海でダイバーたちが浮いている様子" />
              </figure>
            </div>
          </div>
        </div>
        <div class="page-information__content-block js-information-content">
          <div class="page-information__content page-info-content">
            <div class="page-info-content__text-block">
              <h2 class="page-info-content__title">ファンダイビング</h2>
              <p class="page-info-content__text">
                ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;
              </p>
            </div>
            <div class="page-info-content__image-block">
              <figure class="page-info-content__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/info-02.jpg"
                  alt="綺麗な魚たちがたくさん泳いでいる様子" />
              </figure>
            </div>
          </div>
        </div>
        <div class="page-information__content-block js-information-content">
          <div class="page-information__content page-info-content">
            <div class="page-info-content__text-block">
              <h2 class="page-info-content__title">体験ダイビング</h2>
              <p class="page-info-content__text">
                ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;
              </p>
            </div>
            <div class="page-info-content__image-block">
              <figure class="page-info-content__image">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/info-03.jpg"
                  alt="尾鰭が黄色いお魚２匹が泳いでいる様子" />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>