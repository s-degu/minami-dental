<?php
  $home = esc_url(home_url('/'));
  $about = esc_url(home_url('/about'));
  $medical = esc_url(home_url('/medical'));
  $staff = esc_url(home_url('/staff'));
  $blog = get_post_type_archive_link( "blog" );
  $contact = esc_url(home_url('/contact'));
  $reservation = esc_url(home_url('/reservation'));
?>

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
        <a href="<?php echo $home?>"><img class="p-header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="みなみ歯科クリニック"></a>
      </h1>
      <!-- 👇PCナビゲーション -->
      <div class="p-header__right">
        <ul class="p-header__nav-wrap">
          <li class="p-header__nav">
            <a class="p-header__nav-link" href="<?php echo $home?>">
            <svg class="p-header__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="#393939" opacity="0"/><path d="M20.42,10.18,12.71,2.3a1,1,0,0,0-1.42,0L3.58,10.19A2,2,0,0,0,3,11.62V20a2,2,0,0,0,1.89,2H19.11A2,2,0,0,0,21,20V11.62a2.07,2.07,0,0,0-.58-1.44ZM10,20V14h4v6Zm9,0H16V13a1,1,0,0,0-1-1H9a1,1,0,0,0-1,1v7H5V11.58l7-7.15,7,7.19Z" fill="#393939"/></svg>
            <span>ホーム</span>
            </a>
          </li>
          <li class="p-header__nav">
            <a class="p-header__nav-link" href="<?php echo $about?>">
            <svg class="p-header__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="#393939" opacity="0"/><path d="M5.368,10.232V8.555a.5.5,0,0,1,.5-.5H7.548a.5.5,0,0,1,.5.5v1.677a.5.5,0,0,1-.5.5H5.871A.5.5,0,0,1,5.368,10.232Zm5.871.5h1.677a.5.5,0,0,0,.5-.5V8.555a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,10.735ZM8.051,14.258V12.58a.5.5,0,0,0-.5-.5H5.871a.5.5,0,0,0-.5.5v1.677a.5.5,0,0,0,.5.5H7.548A.5.5,0,0,0,8.051,14.258Zm3.187.5h1.677a.5.5,0,0,0,.5-.5V12.58a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,14.761Zm7.548,5.2v1.51H0v-1.51a.5.5,0,0,1,.5-.5h.818V3.566a.95.95,0,0,1,1.006-.882H6.039V1.006A1.006,1.006,0,0,1,7.045,0h4.7a1.006,1.006,0,0,1,1.006,1.006V2.684h3.711a.95.95,0,0,1,1.006.882V19.458h.818A.5.5,0,0,1,18.787,19.961ZM3.334,19.416H8.051v-2.81a.5.5,0,0,1,.5-.5h1.677a.5.5,0,0,1,.5.5v2.81h4.718V4.7h-2.7V5.7A1.006,1.006,0,0,1,11.742,6.71h-4.7A1.006,1.006,0,0,1,6.039,5.7V4.7h-2.7ZM11.155,2.684h-1.09V1.594a.252.252,0,0,0-.252-.252H8.974a.252.252,0,0,0-.252.252v1.09H7.632a.252.252,0,0,0-.252.252v.839a.252.252,0,0,0,.252.252h1.09v1.09a.252.252,0,0,0,.252.252h.839a.252.252,0,0,0,.252-.252V4.026h1.09a.252.252,0,0,0,.252-.252V2.935A.252.252,0,0,0,11.155,2.684Z" transform="translate(3 1)" fill="#393939"/></svg>
            <span>当院について</span>
            </a>
          </li>
          <li class="p-header__nav">
            <a class="p-header__nav-link" href="<?php echo $medical?>">
            <svg class="p-header__icon" height="24" viewBox="0 0 16 20" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m19.74 8.33-5.44-6a1 1 0 0 0 -.74-.33h-7a2.53 2.53 0 0 0 -2.56 2.5v15a2.53 2.53 0 0 0 2.56 2.5h10.88a2.53 2.53 0 0 0 2.56-2.5v-10.5a1 1 0 0 0 -.26-.67zm-5.74-3.33 2.74 3h-2a.79.79 0 0 1 -.74-.85zm3.44 15h-10.88a.53.53 0 0 1 -.56-.5v-15a.53.53 0 0 1 .56-.5h5.44v3.15a2.79 2.79 0 0 0 2.71 2.85h3.29v9.5a.53.53 0 0 1 -.56.5z" fill="#393939" transform="translate(-4 -2)"/></svg>
            <span>診療案内</span>
            </a>
          </li>
          <li class="p-header__nav">
            <a class="p-header__nav-link" href="<?php echo $staff?>">
            <svg class="p-header__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="#393939" opacity="0"/><path d="M9,11A4,4,0,1,0,5,7a4,4,0,0,0,4,4ZM9,5A2,2,0,1,1,7,7,2,2,0,0,1,9,5Z" fill="#393939"/><path d="M17,13a3,3,0,1,0-3-3A3,3,0,0,0,17,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,17,9Z" fill="#393939"/><path d="M17,14a5,5,0,0,0-3.06,1.05A7,7,0,0,0,2,20a1,1,0,1,0,2,0,5,5,0,0,1,10,0,1,1,0,0,0,2,0,6.9,6.9,0,0,0-.86-3.35A3,3,0,0,1,20,19a1,1,0,1,0,2,0A5,5,0,0,0,17,14Z" fill="#393939"/></svg>
            <span>スタッフ紹介</span>
            </a>
          </li>
          <li class="p-header__nav">
            <a class="p-header__nav-link" href="<?php echo $blog?>">
            <svg class="p-header__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="#393939" opacity="0"/><path d="M19.4,7.34,16.66,4.6A2,2,0,0,0,14,4.53l-9,9a2,2,0,0,0-.57,1.21L4,18.91A1,1,0,0,0,5,20h.09l4.17-.38a2,2,0,0,0,1.21-.57l9-9a1.92,1.92,0,0,0-.07-2.71ZM9.08,17.62l-3,.28.27-3L12,9.32l2.7,2.7ZM16,10.68,13.32,8l1.95-2L18,8.73Z" fill="#393939"/></svg>
            <span>スタッフブログ</span>
            </a>
          </li>
          <li class="p-header__nav">
            <a class="p-header__nav-link" href="<?php echo $contact?>">
            <svg class="p-header__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="#393939" opacity="0"/><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,1.2,0L20,7.25V17A1,1,0,0,1,19,18Z" fill="#393939"/></svg>
            <span>お問い合わせ</span>
            </a>
          </li>
        </ul>
        <div class="p-header__info-wrap">
          <p class="p-header__address">〒166-0001&nbsp;&nbsp;東京都杉並区阿佐谷北7-3-1</p>
          <a href="#" class="p-header__tel">03-1234-5678</a>
        </div>
      </div>
      <!-- 👆PCナビゲーション -->
      <!-- 👇ドロワーボタン -->
      <div class="p-header__drawer p-drawer">
        <a class="p-drawer__link" href="#">
          <div class="p-drawer__toggle js-drawer" data-target="p-drawer__toggle">
            <span class="p-drawer__toggle-icon"></span>
            <span class="p-drawer__toggle-icon"></span>
            <span class="p-drawer__toggle-icon"></span>
          </div>
        </a>
      </div>
      <!-- 👆ドロワーボタン -->
      <!-- 👇ドロワーメニュー -->
      <div class="p-drawer__menus-wrap">
        <a class="p-drawer__logo" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-drawer.png" alt="みなみ歯科クリニック">
        </a>
        <ul class="p-drawer__menus">
          <li class="p-drawer__menu p-drawer__menu--home"><a href="<?php echo $home?>">ホーム</a></li>
          <li class="p-drawer__menu p-drawer__menu--about"><a href="<?php echo $about?>">当院について</a></li>
          <li class="p-drawer__menu p-drawer__menu--info"><a href="<?php echo $medical?>">診療案内</a></li>
          <li class="p-drawer__menu p-drawer__menu--staff"><a href="<?php echo $staff?>">スタッフ紹介</a></li>
          <li class="p-drawer__menu p-drawer__menu--blog"><a href="<?php echo $blog?>">スタッフブログ</a></li>
          <li class="p-drawer__menu p-drawer__menu--contact"><a href="<?php echo $contact?>">お問い合わせ</a></li>
        </ul>
      </div>
      <!-- 👆ドロワーメニュー -->
    </div>
  </header>
