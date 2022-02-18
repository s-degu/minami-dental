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
      <p class="p-sub-reservation__text">WEBよりご予約いただき誠にありがとうございます。</p>
      <p class="p-sub-reservation__text">送信いただいた内容を確認して1営業日以内に返信いたします。</p>
      <p class="p-sub-reservation__text p-sub-reservation__text--red"> ※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
    </div>
  </div>
  <!-- l-inner -->
</div>

<?php get_footer(); ?>
