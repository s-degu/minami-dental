<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content contact">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">WEB予約</h1>
        <span class="p-sub-fv__sub-title">RESERVE</span>
      </div>
    </div>
  </div>
</div>
<!-- ファーストビュー -->

<!-- パンくず -->
<div class="l-breadcrumb p-breadcrumb">
  <div class="l-inner p-breadcrumb__inner">
    <?php get_template_part( 'template-parts/breadcrumb' )?>
  </div>
</div>
<!-- パンくず -->

<div class="l-sub-contact p-sub-contact p-sub-reservation">

  <div class="l-inner p-sub-contact__inner">
    <div class="p-sub-reservation__textarea">
      <h2 class="p-sub-reservation__title">お電話でのご予約/ご相談</h2>
      <div class="p-sub-reservation__tel-wrap">
        <a class="c-tel-link"  href="#">03-1234-5678</a>
        <p class="p-sub-reservation__time">(年中無休 AM9:00〜PM22:00)</p>
      </div>
      <p class="p-sub-reservaion__text">
        お急ぎの方は電話での連絡がスムーズです。<br>
        混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
        あらかじめご了承ください。
      </p>
    </div>
    <div class="p-sub-reservation__textarea">
      <h2 class="p-sub-reservation__title">お電話でのご予約/ご相談</h2>
      <p class=" p-sub-reservaion__text">
        【ご予約に関しての注意点】<br>
        メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
        ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
      </p>
    </div>


    <div class="c-title-wrap p-sub-contact__title">
      <h2 class="c-section__title">予約フォーム</h2>
    </div>
    <div class="p-sub-contact__form p-form">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
