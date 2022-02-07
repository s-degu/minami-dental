<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content contact">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">お問い合わせ</h1>
        <span class="p-sub-fv__sub-title">CONTACT</span>
      </div>
    </div>
  </div>
</div>
<!-- ファーストビュー -->

<!-- パンくず -->
<div class="l-breadcrumb p-breadcrumb">
  <div class="l-inner p-breadcrumb__inner">
    <span property="itemListElement" typeof="ListItem">
	<a property="item" typeof="WebPage" title="Go to codeups." href="#" class="home" >
		<span property="name">ホーム</span>
	</a>
	<meta property="position" content="1">
</span> &gt;

<span property="itemListElement" typeof="ListItem">
	<span property="name" class="post-root post post-post current-item">診療案内</span>
	<meta property="url" content="http://codeups.local/archive/">
	<meta property="position" content="2">
</span>
  </div>
</div>
<!-- パンくず -->

<div class="l-sub-contact p-sub-contact">
  <div class="l-inner p-sub-contact__inner">
    <p class="p-sub-contact__text">
      お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
      以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
      また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
      <span class="p-sub-contact__text--red">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。<span>
    </p>
    <div class="c-title-wrap p-sub-contact__title">
      <h2 class="c-section__title">お問い合わせ<br class="u-hidden-pc">フォーム</h2>
    </div>
    <div class="p-sub-contact__form p-form">
      <form class="p-form__area" action="post">
        <div class="p-form__lists">
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <label class="p-form-item__text" for="name">お名前</label>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <input name="name" id="aname" type="text" placeholder="山田　太郎">
            </div>
          </div>
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <label class="p-form-item__text" for="kana">フリガナ</label>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <input name="kana" id="kana" type="text" placeholder="ヤマダ　タロウ">
            </div>
          </div>
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <label class="p-form-item__text" for="tel">電話番号</label>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <input name="tel" id="tel" type="text" placeholder="000-0000-0000">
            </div>
          </div>
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <label class="p-form-item__text" for="mail">メールアドレス</label>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <input name="mail" id="mail" type="mail" placeholder="xxx@example.com">
            </div>
          </div>
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <label class="p-form-item__text" for="inquiry">お問い合わせ内容</label>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <textarea name="inquiry" placeholder="ご自由にご記入ください。"></textarea>
            </div>
          </div>
        </div>
        <div class="p-form__button-wrap">
          <button class="p-form__submit" type="submit">送　信</button>
        </div>
      </form>

    </div>

  </div>
</div>

<?php get_footer(); ?>
