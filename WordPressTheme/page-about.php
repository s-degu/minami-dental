<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">当院について</h1>
        <span class="p-sub-fv__sub-title">ABOUT OUR CLINIC</span>
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
	<span property="name" class="post-root post post-post current-item">当院について</span>
	<meta property="url" content="http://codeups.local/archive/">
	<meta property="position" content="2">
</span>
  </div>
</div>
<!-- パンくず -->

<!-- ポリシーと特徴 -->
<section class="l-policy p-policy">
  <div class="l-inner p-policy__inner">
    <div class="p-policy__title-wrap">
      <h2 class="p-about-policy__title c-section__title">ポリシーと特徴</h2>
    </div>
    <div class="p-policy__content">
      <div class="p-policy__textarea">
        <span class="p-policy__sub-title">POLICY</span>
        <h2 class="p-policy__title">コミュニケーションから始まる最適な医療提供</h2>
        <p class="p-policy__text">当院ではまず患者様から詳しくお話を伺います。<br>難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。</p>
        <p class="p-policy__text"> 「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</p>
      </div>
      <div class="p-policy__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature_1.jpg" alt="診療の様子">
      </div>
    </div>
  </div>
</section>
<!-- ポリシーと特徴 -->

<!-- feature -->
<div class="l-feature p-feature">
  <div class="p-feature__inner">
    
  </div>
</div>
<!-- feature -->



<?php get_footer(); ?>
