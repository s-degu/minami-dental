<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="l-inner p-header__inner">
      <h1 class="p-header__title">
        <a href="#"><img class="p-header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="みなみ歯科クリニック"></a>
      </h1>
      <div class="p-header__drawer p-drawer">
        <a class="p-drawer__link" href="#">
          <div class="p-drawer__toggle js-drawer" data-target="p-drawer__toggle">
            <span class="p-drawer__toggle-icon"></span>
            <span class="p-drawer__toggle-icon"></span>
            <span class="p-drawer__toggle-icon"></span>
          </div>
        </a>
      </div>
      <!-- 👇ドロワーメニュー -->
      <div class="p-drawer__menus-wrap">
        <a class="p-drawer__logo" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-drawer.png" alt="みなみ歯科クリニック">
        </a>
        <ul class="p-drawer__menus">
          <li class="p-drawer__menu p-drawer__menu--home"><a href="#">ホーム</a></li>
          <li class="p-drawer__menu p-drawer__menu--about"><a href="#">当院について</a></li>
          <li class="p-drawer__menu p-drawer__menu--info"><a href="#">診療案内</a></li>
          <li class="p-drawer__menu p-drawer__menu--staff"><a href="#">スタッフ紹介</a></li>
          <li class="p-drawer__menu p-drawer__menu--blog"><a href="#">スタッフブログ</a></li>
          <li class="p-drawer__menu p-drawer__menu--contact"><a href="#">お問い合わせ</a></li>
        </ul>
      </div>
      <!-- 👆ドロワーメニュー -->
    </div>
  </header>

      <!-- 👇メインビュー -->
      <div class="p-hero">
        <div class="l-inner">
          <div class="p-hero__fv p-slider">
            <p class="p-slider__text">街の皆さまの笑顔を守る<br>アットホームな歯医者さん</p>
          <div class="p-slider__wrap js-slider">
            <div class="p-slider__item"><img class="p-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/chair-1_sp.jpg" alt="診察場所の風景" /></div>
            <div class="p-slider__item"><img class="p-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/chair-2_sp.jpg" alt="診察場所の風景" /></div>
            <div class="p-slider__item"><img class="p-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/chair-3_sp.jpg" alt="診察場所の風景" /></div>
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
