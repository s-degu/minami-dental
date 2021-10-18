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