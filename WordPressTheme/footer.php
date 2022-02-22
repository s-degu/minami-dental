<?php
  $home = esc_url(home_url('/'));
  $about = esc_url(home_url('/about'));
  $medical = esc_url(home_url('/medical'));
  $staff = esc_url(home_url('/staff'));
  $blog = get_post_type_archive_link( "blog" );
  $contact = esc_url(home_url('/contact'));
  $reservation = esc_url(home_url('/reservation'));
?>

<div class="c-footer-top-img"></div>
<footer class="l-footer p-footer">
  <div class="l-inner p-footer__inner">
    <div class="p-footer__info">
      <div class="p-footer__content">
        <div class="p-footer__content-left">
          <div class="p-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="みなみ歯科クリニック">
          </div>
          <p class="p-footer__access">〒166-0001<span>東京都杉並区阿佐谷北7-3-1<span></p>
          <a href="#" class="p-footer__tel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-tel.png" alt="電話アイコン">
            03-1234-5678
          </a>
          <span class="p-footer__hours">(年中無休 AM9:00〜PM22:00)</span>
          <div class="p-footer__button-wrap">
            <a class="c-footer-button c-footer-button--blue p-footer__button" href="<?php echo $reservation?>">
              <svg height="14.669" viewBox="0 0 25.048 14.669" width="25.048" xmlns="http://www.w3.org/2000/svg"><g fill="#fff"><path d="m6.007 0h-4.947a1.06 1.06 0 0 0 -1.06 1.06v9.187a1.06 1.06 0 0 0 1.06 1.06h4.947a1.06 1.06 0 0 0 1.06-1.06v-9.187a1.06 1.06 0 0 0 -1.06-1.06zm-2.474 10.6a.707.707 0 1 1 .707-.707.706.706 0 0 1 -.707.707zm2.474-2.385a.266.266 0 0 1 -.265.265h-4.417a.266.266 0 0 1 -.265-.265v-6.89a.266.266 0 0 1 .265-.265h4.417a.266.266 0 0 1 .265.265z" transform="translate(17.981 3.362)"/><path d="m15.127 0h-13.752a1.376 1.376 0 0 0 -1.375 1.375v9.168a1.376 1.376 0 0 0 1.375 1.375h5.5l-.458 1.375h-2.062a.688.688 0 1 0 0 1.375h7.793a.688.688 0 1 0 0-1.375h-2.063l-.458-1.375h5.5a1.376 1.376 0 0 0 1.373-1.375v-9.168a1.376 1.376 0 0 0 -1.373-1.375zm-.458 10.085h-12.835v-8.251h12.835z"/></g></svg>
              <span>WEB予約</span>
            </a>
            <a class="c-footer-button p-footer__button" href="<?php echo $contact?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g id="グループ_10810" data-name="グループ 10810" transform="translate(-49)">
                <rect id="長方形_23052" data-name="長方形 23052" width="24" height="24" transform="translate(49)" fill="none" />
                <g id="icon-contact" transform="translate(51 4)">
                  <path id="パス_43721" data-name="パス 43721" d="M5,6H21a2.006,2.006,0,0,1,2,2V20a2.006,2.006,0,0,1-2,2H5a2.006,2.006,0,0,1-2-2V8A2.006,2.006,0,0,1,5,6Z" transform="translate(-3 -6)" fill="none" stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                  <path id="パス_43722" data-name="パス 43722" d="M23,9,13,16.476,3,9" transform="translate(-3 -6.864)" fill="none" stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </g>
                </g>
              </svg>
              <span class="p-footer__button--white">お問い合わせ</span>
            </a>
          </div>
          <div class="p-footer__time-sheet">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medicalTimeSheet.png" alt="">
          </div>
        </div>
        <div class="p-footer__content-right p-footer__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.865606084965!2d139.6339344156242!3d35.70492468018881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1642245958308!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <div class="p-footer__nav">
      <ul class="p-footer__nav-wrap">
        <li class="p-footer__nav-item">
          <a href="<?php echo $home?>">
            TOP
          </a>
        </li>
        <li class="p-footer__nav-item">
          当院について
          <ul class="p-footer__sub-nav">
            <li class="p-footer__sub-nav-item">
              <a href="<?php echo $about?>#policy">ポリシーと特徴</a>
            </li>
            <li class="p-footer__sub-nav-item">
              <a href="<?php echo $about?>#overview">当院の様子</a>
            </li>
          </ul>
        </li>
        <li class="p-footer__nav-item">
          スタッフ紹介
          <ul class="p-footer__sub-nav">
            <li class="p-footer__sub-nav-item">
              <a href="<?php echo $staff?>#greeting">院長のあいさつ</a>
            </li>
            <li class="p-footer__sub-nav-item">
              <a href="<?php echo $staff?>#member">スタッフ</a>
            </li>
            <li class="p-footer__sub-nav-item">
              <a href="<?php echo $blog?>">スタッフブログ</a>
            </li>
          </ul>
        </li>
          <li class="p-footer__nav-item">
            診療内容
            <div class="p-footer__sub-nav-box">
              <ul class="p-footer__sub-nav">
                <li class="p-footer__sub-nav-item">
                  <a href="#">一般歯科</a>
                </li>
                <li class="p-footer__sub-nav-item">
                  <a href="#">小児歯科</a>
                </li>
                <li class="p-footer__sub-nav-item">
                  <a href="#">予防歯科</a>
                </li>
                <li class="p-footer__sub-nav-item">
                  <a href="#">入れ歯</a>
                </li>
              </ul>
              <ul class="p-footer__sub-nav">
                <li class="p-footer__sub-nav-item">
                  <a href="#">矯正歯科</a>
                </li>
                <li class="p-footer__sub-nav-item">
                  <a href="#">ホワイトニング</a>
                </li>
                <li class="p-footer__sub-nav-item">
                  <a href="#">口腔外科</a>
                </li>
                <li class="p-footer__sub-nav-item">
                  <a href="#">レーザー治療</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="p-footer__nav-item">
            お問い合わせ
            <ul class="p-footer__sub-nav">
              <li class="p-footer__sub-nav-item">
                <a href="<?php echo $contact?>">お問い合わせフォーム</a>
              </li>
              <li class="p-footer__sub-nav-item">
                <a href="<?php echo $reservation?>">WEB予約</a>
              </li>
            </ul>
          </li>
      </ul>
    </div>
    <div class="p-footer__copy">
      <small>©︎2020-2021 みなみ歯科クリニック</small>
    </div>
  </div>
</footer>

<!-- web予約 -->
<a href="<?php echo $reservation?>" class="l-reservation p-reservation">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-reservation.svg" alt="">
  <p class="p-reservation__text">WEB予約<br>はこちら</p>
</a>
<!-- web予約 -->

<!-- sp固定フッター -->
<div class="l-sp-footer p-sp-footer">
  <div class="l-inner p-sp-footer__inner">
    <div class="p-sp-footer__wrap">
      <div class="p-sp-footer__left">
        <div class="p-sp-footer__phone">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_tel.png" alt="">
            03-1234-5678
          </a>
          <p class="p-sp-footer__time">(年中無休 AM9:00〜PM22:00)</p>
        </div>
      </div>
      <div class="p-sp-footer__right">
        <a href="<?php echo $reservation?>">
          <div class="p-sp-footer__icon">
            <svg height="25.47" viewBox="0 0 25.048 14.669" width="43.49" xmlns="http://www.w3.org/2000/svg"><g fill="#fff"><path d="m6.007 0h-4.947a1.06 1.06 0 0 0 -1.06 1.06v9.187a1.06 1.06 0 0 0 1.06 1.06h4.947a1.06 1.06 0 0 0 1.06-1.06v-9.187a1.06 1.06 0 0 0 -1.06-1.06zm-2.474 10.6a.707.707 0 1 1 .707-.707.706.706 0 0 1 -.707.707zm2.474-2.385a.266.266 0 0 1 -.265.265h-4.417a.266.266 0 0 1 -.265-.265v-6.89a.266.266 0 0 1 .265-.265h4.417a.266.266 0 0 1 .265.265z" transform="translate(17.981 3.362)"></path><path d="m15.127 0h-13.752a1.376 1.376 0 0 0 -1.375 1.375v9.168a1.376 1.376 0 0 0 1.375 1.375h5.5l-.458 1.375h-2.062a.688.688 0 1 0 0 1.375h7.793a.688.688 0 1 0 0-1.375h-2.063l-.458-1.375h5.5a1.376 1.376 0 0 0 1.373-1.375v-9.168a1.376 1.376 0 0 0 -1.373-1.375zm-.458 10.085h-12.835v-8.251h12.835z"></path></g></svg>
          </div>
          <p class="p-sp-footer__text">WEB予約<br><span>はこちら</span></p>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- sp固定フッター -->

<?php wp_footer(); ?>
</body>

</html>
