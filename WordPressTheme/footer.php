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
            <a class="c-footer-button c-footer-button--blue p-footer__button" href="#">
              <svg height="14.669" viewBox="0 0 25.048 14.669" width="25.048" xmlns="http://www.w3.org/2000/svg"><g fill="#fff"><path d="m6.007 0h-4.947a1.06 1.06 0 0 0 -1.06 1.06v9.187a1.06 1.06 0 0 0 1.06 1.06h4.947a1.06 1.06 0 0 0 1.06-1.06v-9.187a1.06 1.06 0 0 0 -1.06-1.06zm-2.474 10.6a.707.707 0 1 1 .707-.707.706.706 0 0 1 -.707.707zm2.474-2.385a.266.266 0 0 1 -.265.265h-4.417a.266.266 0 0 1 -.265-.265v-6.89a.266.266 0 0 1 .265-.265h4.417a.266.266 0 0 1 .265.265z" transform="translate(17.981 3.362)"/><path d="m15.127 0h-13.752a1.376 1.376 0 0 0 -1.375 1.375v9.168a1.376 1.376 0 0 0 1.375 1.375h5.5l-.458 1.375h-2.062a.688.688 0 1 0 0 1.375h7.793a.688.688 0 1 0 0-1.375h-2.063l-.458-1.375h5.5a1.376 1.376 0 0 0 1.373-1.375v-9.168a1.376 1.376 0 0 0 -1.373-1.375zm-.458 10.085h-12.835v-8.251h12.835z"/></g></svg>
              <span>WEB予約</span>
            </a>
            <a class="c-footer-button p-footer__button" href="#">
              <svg height="17.478" viewBox="0 0 17.478 17.478" width="17.478" xmlns="http://www.w3.org/2000/svg"><g fill="none"><path d="m0 0h17.478v17.478h-17.478z"/><g stroke="#1391e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m4.457 6h11.652a1.461 1.461 0 0 1 1.457 1.457v8.743a1.461 1.461 0 0 1 -1.457 1.457h-11.652a1.461 1.461 0 0 1 -1.457-1.457v-8.743a1.461 1.461 0 0 1 1.457-1.457z" transform="translate(-1.544 -3.087)"/><path d="m17.565 9-7.283 5.445-7.282-5.445" transform="translate(-1.544 -4.531)"/></g></g></svg>
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
        <li class="p-footer__nav-item">TOP</li>
        <li class="p-footer__nav-item">
          当院について
          <ul class="p-footer__sub-nav">
            <li class="p-footer__sub-nav-item">
              <a href="#">ポリシーと特徴</a>
            </li>
            <li class="p-footer__sub-nav-item">
              <a href="#">当院の様子</a>
            </li>
          </ul>
        </li>
        <li class="p-footer__nav-item">
          スタッフ紹介
          <ul class="p-footer__sub-nav">
            <li class="p-footer__sub-nav-item">
              <a href="#">院長のあいさつ</a>
            </li>
            <li class="p-footer__sub-nav-item">
              <a href="#">スタッフ</a>
            </li>
            <li class="p-footer__sub-nav-item">
              <a href="#">スタッフブログ</a>
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
                <a href="#">お問い合わせフォーム</a>
              </li>
              <li class="p-footer__sub-nav-item">
                <a href="#">WEB予約</a>
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
<a href="<?php echo $reservation?>" class="l-reservation p-reservation u-hidden-sp">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-reservation.svg" alt="">
  <p class="p-reservation__text">WEB予約<br>はこちら</p>
</a>
<!-- web予約 -->

<?php wp_footer(); ?>
</body>

</html>
