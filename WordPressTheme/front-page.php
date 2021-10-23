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






<?php get_footer(); ?>