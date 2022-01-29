<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content medical">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">診療案内</h1>
        <span class="p-sub-fv__sub-title">MEDICAL</span>
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

<div class="l-sub-medical p-sub-medical">
  <div class="p-sub-medical__nav p-medical-nav">
    <div class="l-inner">
      <div class="p-medical-nav__wrap">
        <div class="p-medical-nav__titles">
          <h2 class="p-medial-nav__title">一般診療</h2>
          <p class="p-medial-nav__sub-title">保険対象</p>
        </div>
        <ul class="p-medical-nav__items">
          <li class="p-medical-nav__item">
            <a href="#">一般歯科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#">小児歯科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#">予防歯科</a>
          </li>
        </ul>
      </div>
      <div class="p-medical-nav__wrap">
        <div class="p-medical-nav__titles">
          <h2 class="p-medial-nav__title">特殊診療</h2>
          <p class="p-medial-nav__sub-title p-medial-nav__sub-title--red">実費</p>
        </div>
        <ul class="p-medical-nav__items">
          <li class="p-medical-nav__item">
            <a href="#">入れ歯</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#">矯正歯科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#">ホワイトニング</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#">口腔外科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#">レーザー治療</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
