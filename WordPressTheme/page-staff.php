<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content staff">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">スタッフ紹介</h1>
        <span class="p-sub-fv__sub-title">STAFF</span>
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

<div class="l-sub-staff">
  <!-- 院長の挨拶 -->
  <section class="l-sub-staff-greeting p-sub-staff-greeting p-greeting">
    <div class="l-inner p-greeting__inner">
      <div class="c-title-wrap">
        <h2 class="c-section__title">院長のあいさつ</h2>
      </div>
      <div class="p-greeting__content">
        <div class="p-greeting__textarea">
          <h3 class="p-geeting__title">気軽に相談できる<br>街の歯医者さんでありたい。</h3>
          <div class="p-greeting__text-wrap">
            <p class="p-greeting__text">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
          </div>
          <div class="p-greeting__text-wrap2">
            <p class="p-greeting__text">「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
          </div>
          <div class="p-greeting__text-wrap3">
            <p class="p-greeting__text">みなみ歯科クリニック<br>院長&nbsp;&nbsp;&nbsp;南 俊雄</p>
          </div>
          <div class="p-greeting__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/greeting.png" alt="">
          </div>
          <div class="p-greeting__about">
            <div class="p-greeting__career">
              <h4 class="p-greeting__career-title">経歴</h4>
              <div class="p-greeting__career-block">
                <p class="p-greeting__career-text">2004年</p>
                <p class="p-greeting__career-text">東京医科歯科大学歯学部 卒業</p>
              </div>
              <div class="p-greeting__career-block">
                <p class="p-greeting__career-text">2008年</p>
                <p class="p-greeting__career-text">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</p>
              </div>
              <div class="p-greeting__career-block">
                <p class="p-greeting__career-text">2012年</p>
                <p class="p-greeting__career-text">みなみ歯科クリニック 開院</p>
              </div>
            </div>
            <div class="p-greeting__licence">
              <h4 class="p-greeting__licence-title">資格</h4>
              <div class="p-greeting__licence-block">
                <p class="p-greeting__licence-text">歯科医師臨床研修指導歯科医</p>
              </div>
              <div class="p-greeting__licence-block">
                <p class="p-greeting__licence-text">博士(歯学)</p>
              </div>
              <div class="p-greeting__licence-block">
                <p class="p-greeting__licence-text">衛生検査技師</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 院長の挨拶 -->
</div>

<!-- スライダー -->
<div class="p-sub-staff__slider">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1.jpg" alt="">
</div>
<!-- スライダー -->

<!-- スタッフ紹介 -->
<section class="l-sub-staff__member p-sub-staff__member p-member">
  <div class="l-inner p-member__inner">
    <div class="c-title-wrap">
      <h2 class="c-section__title">スタッフ紹介</h2>
    </div>
    <div class="p-member__content">
      <h3 class="p-member__sub-title">歯科衛生士</h3>
      <div class="p-member__items">
        <div class="p-member__item">
          <div class="p-member__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff2.jpg" alt="">
          </div>
          <div class="p-staff__name-wrap">
            <span class="p-staff__charge">歯科衛生士</span>
            <span class="p-staff__name">鈴木 太郎</span>
          </div>
          <dl class="p-staff__info">
            <dt class="p-staff__def-title">出身地</dt>
            <dd class="p-staff__def-data">北海道</dd>
            <dt class="p-staff__def-title">趣味</dt>
            <dd class="p-staff__def-data">スキー、料理</dd>
            <dt class="p-staff__def-title">好きな食べ物</dt>
            <dd class="p-staff__def-data">お寿司、うなぎ</dd>
          </dl>
        </div>
        <div class="p-member__item">
          <div class="p-member__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff3.jpg" alt="">
          </div>
          <div class="p-staff__name-wrap">
            <span class="p-staff__charge">歯科衛生士</span>
            <span class="p-staff__name">山田 花子</span>
          </div>
          <dl class="p-staff__info">
            <dt class="p-staff__def-title">出身地</dt>
            <dd class="p-staff__def-data">北海道</dd>
            <dt class="p-staff__def-title">趣味</dt>
            <dd class="p-staff__def-data">スキー、料理</dd>
            <dt class="p-staff__def-title">好きな食べ物</dt>
            <dd class="p-staff__def-data">お寿司、うなぎ</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- スタッフ紹介 -->

<?php get_footer(); ?>
