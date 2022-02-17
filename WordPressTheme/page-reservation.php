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
              <input name="mail" id="mail" type="email" placeholder="xxx@example.com">
            </div>
          </div>
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <p class="p-form-item__text">初診/再診</p>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <label>
                <input type="radio" value="初診" name="radio-1" checked>
                <span>初診</span>
              </label>
              <label>
                <input type="radio" value="再診" name="radio-1">
                <span>再診</span>
              </label>
            </div>
          </div>
          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <p class="p-form-item__text">診療内容</p>
              <span class="p-form-item__required">必須</span>
              <p class="p-form-item__sub-text">※(複数選択可)</p>
            </div>
            <div class="p-form-item__right p-form__check-box">
              <label>
                <input type="checkbox" name="check-box1" value="虫歯">
                <span>虫歯</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="被せ物がとれた">
                <span>被せ物がとれた</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="矯正歯科">
                <span>矯正歯科</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="咬み合わせ">
                <span>咬み合わせ</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="歯周病">
                <span>歯周病</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="小児歯科">
                <span>小児歯科</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="入れ歯">
                <span>入れ歯</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="インプラント">
                <span>インプラント</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="その他">
                <span>その他</span>
              </label>
              <label>
                <input type="checkbox" name="check-box1" value="咬み合わせ">
                <span>咬み合わせ</span>
              </label>
            </div>
          </div>


          <div class="p-form__list p-form-item">
            <div class="p-form-item__left">
              <p class="p-form-item__text">ご連絡方法</p>
              <span class="p-form-item__required">必須</span>
            </div>
            <div class="p-form-item__right">
              <label>
                <input type="radio" value="初診" name="radio-1" checked>
                <span>初診</span>
              </label>
              <label>
                <input type="radio" value="再診" name="radio-1">
                <span>再診</span>
              </label>
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
