<?php get_header(); ?>

<!-- 👇メインビュー -->
<div class="p-hero">
  <div class="l-inner p-hero__inner">
    <div class="l-hero__fv p-hero__fv p-slider">
      <p class="p-slider__text"><span class="p-slider__text--underline">街の皆さまの笑顔を守る<br>アットホームな歯医者さん</span></p>
      <div class="p-slider__wrap js-slider">
        <picture class="p-slider__item">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider-img-01_pc.jpg" media="(min-width: 768px)">
          <img class="p-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/chair-1_sp.jpg" alt="診察場所の風景" />
        </picture>
        <picture class="p-slider__item">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider-img-02_pc.jpg" media="(min-width: 768px)">
          <img class="p-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/chair-2_sp.jpg" alt="診察場所の風景" />
        </picture>
        <picture class="p-slider__item">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/slider-img-03_pc.jpg" media="(min-width: 768px)">
          <img class="p-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/chair-3_sp.jpg" alt="診察場所の風景" />
        </picture>
      </div>
    </div>
    <div class="p-hero__info">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medical-time.png" alt="診察日一覧">
    </div>
    <div class="p-hero__news p-news">
      <div class="p-news__heading">
        <p class="p-news__title">お知らせ</p>
        <span class="p-news__title--en">news</span>
        <span class="p-news__title--past"><a href="#">過去のお知らせはこちら</a></span>
      </div>
      <div class="p-news__body">
        <dl class="p-news__list-wrap">
          <a class="p-news__list">
            <dt class="p-news__date"><time datetime="2021/01/01">2021/01/01</time></dt>
            <dd class="p-news__content">年末年始の営業時間のお知らせ</dd>
          </a>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- 👆メインビュー -->

<!-- 👇コンセプトセクション -->
<section class="l-concept p-concept">
  <div class="l-inner p-concept__inner">
    <div class="p-concept__body">
      <span class="p-concept__title--en">concept</span>
      <h2 class="p-concept__title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h2>
      <p class="p-concept__text">
      私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
      お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
      </p>
      <div class="p-concept__button-wrap">
        <a href="#" class="c-button p-concept__button">当院について</a>
      </div>
    </div>
  </div>
    <figure class="p-concept__img-wrap">
      <img class="p-concept__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/concept-img.jpg" alt="診察を行う女性">
    </figure>
</section>
<!-- 👆コンセプトセクション -->

<!-- 👇当院のおすすめセクション -->
<section class="l-recommend p-recommend">
  <div class="l-inner p-recommend__inner">
    <div class="p-recommend__title-wrap">
      <h2 class="p-recommend__title c-section__title">当院の3つのおすすめ</h2>
    </div>
    <div class="p-recommend__items">
      <div class="p-recommend__item">
        <h3 class="p-recommend__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend_tag_01.png" alt="おすすめ01">
        </h3>
        <div class="p-recommend__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend-img-01.png" alt="痛くない歯医者の追求">
        </div>
        <p class="p-recommend__text">
          歯の治療において、小さな違和感は大きなストレスにつながります。<br>
          私たちは常に快適な歯科医療技術の研究を行っております。</p>
      </div>
      <div class="p-recommend__item">
        <h3 class="p-recommend__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend_tag_02.png" alt="おすすめ02">
        </h3>
        <div class="p-recommend__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend-img-02.png" alt="駅から徒歩3分">
        </div>
        <p class="p-recommend__text">
        「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
      </div>
      <div class="p-recommend__item">
        <h3 class="p-recommend__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend_tag_03.png" alt="おすすめ03">
        </h3>
        <div class="p-recommend__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommend-img-03.png" alt="痛くない歯医者の追求">
        </div>
        <p class="p-recommend__text">
        朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
        <span class="p-recommend__text--red">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
      </div>
    </div>
  </div>
</section>
<!-- 👆当院のおすすめセクション -->

<!-- 👇診療案内セクション -->
<section class="l-medical-info p-medical-info">
  <div class="p-medical-info__top-deco"></div>
  <div class="p-medical-info__container">
    <div class="l-inner p-medical-info__inner p-medical-info__deco">
      <div class="c-title-wrap">
        <h2 class="p-recommend__title c-section__title">診療案内</h2>
      </div>
      <div class="p-medical-info__items">
        <div class="p-medical-info__item">
          <a href="" class="p-medical-info__link p-medical-info__link--general p-medical-link">
            <div class="p-medical-link__wrap">
              <h3 class="p-medical-link__title">一般診療</h3>
              <p class="p-medical-link__text">虫歯・入れ歯・小児歯科</p>
            </div>
          </a>
        </div>
        <div class="p-medical-info__item">
          <a href="" class="p-medical-info__link p-medical-info__link--special p-medical-link">
            <div class="p-medical-link__wrap">
              <h3 class="p-medical-link__title">特殊診療</h3>
              <p class="p-medical-link__text">インプラント・ホワイトニング</p>
              <p class="p-medical-link__text">予防歯科・口腔外科・審美歯科</p>
            </div>
          </a>
        </div>
        <div class="p-medical-info__item">
          <p class="p-medical-info__text">
            当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
            痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
            <span class="u-text-red">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-medical-info__bottom-deco1"></div>
  <div class="p-medical-info__bottom-deco2"></div>
</section>
<!-- 👆診療案内セクション -->

<!-- 👇スタッフブログセクション -->
<section class="l-blog p-blog">
  <div class="l-inner p-blog__inner">
    <div class="c-title-wrap">
        <h2 class="p-recommend__title c-section__title">スタッフブログ</h2>
    </div>
    <div class="p-blog__items">
      <div class="p-blog__item">
        <div class="p-blog__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_test.jpg" alt="ほげほげ">
        </div>
        <div class="p-blog__body">
          <span class="p-blog__label c-article-label">お知らせ</span>
          <div class="p-blog__title c-blog-title">記事のタイトルが入ります。記事のタイトルが入ります…</div>
          <time class="p-blog__date c-blog-date">2020.02.14</time>
        </div>
      </div>
      <div class="p-blog__item">
        <div class="p-blog__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_test.jpg" alt="ほげほげ">
        </div>
        <div class="p-blog__body">
          <span class="p-blog__label c-article-label">お知らせ</span>
          <div class="p-blog__title c-blog-title">記事のタイトルが入ります。記事のタイトルが入ります…</div>
          <time class="p-blog__date c-blog-date">2020.02.14</time>
        </div>
      </div>
      <div class="p-blog__item">
        <div class="p-blog__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_test.jpg" alt="ほげほげ">
        </div>
        <div class="p-blog__body">
          <span class="p-blog__label c-article-label">お知らせ</span>
          <div class="p-blog__title c-blog-title">記事のタイトルが入ります。記事のタイトルが入ります…</div>
          <time class="p-blog__date c-blog-date">2020.02.14</time>
        </div>
      </div>
      <div class="p-blog__item">
        <div class="p-blog__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_test.jpg" alt="ほげほげ">
        </div>
        <div class="p-blog__body">
          <span class="p-blog__label c-article-label">お知らせ</span>
          <div class="p-blog__title c-blog-title">記事のタイトルが入ります。記事のタイトルが入ります…</div>
          <time class="p-blog__date c-blog-date">2020.02.14</time>
        </div>
      </div>
      <div class="p-blog__item">
        <div class="p-blog__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_test.jpg" alt="ほげほげ">
        </div>
        <div class="p-blog__body">
          <span class="p-blog__label c-article-label">お知らせ</span>
          <div class="p-blog__title c-blog-title">記事のタイトルが入ります。記事のタイトルが入ります…</div>
          <time class="p-blog__date c-blog-date">2020.02.14</time>
        </div>
      </div>
      <div class="p-blog__item">
        <div class="p-blog__img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog_test.jpg" alt="ほげほげ">
        </div>
        <div class="p-blog__body">
          <span class="p-blog__label c-article-label">お知らせ</span>
          <div class="p-blog__title c-blog-title">記事のタイトルが入ります。記事のタイトルが入ります…</div>
          <time class="p-blog__date c-blog-date">2020.02.14</time>
        </div>
      </div>
    </div>
    <div class="p-blog__button">
      <a class="c-button" href="#">スタッフブログ一覧はこちら</a>
    </div>
  </div>
</section>
<!-- 👆スタッフブログセクション -->

<?php get_footer(); ?>
