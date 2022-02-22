<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content blog">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">スタッフブログ</h1>
        <span class="p-sub-fv__sub-title">STAFF BLOG</span>
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

<div class="l-sub-blog p-sub-blog">
  <div class="l-inner p-sub-blog__inner">
    <div class="p-sub-blog__content">
      <div class="p-sub-blog__items p-blog-cards">
        <?php
          $args = array(
            'paged' => $paged,
            'post_type' => 'blog',
            'posts_per_page' => 1,
          );
          $my_query = new WP_Query($args);
          $paged = get_query_var('page');
          if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post();
        ?>

        ブログ詳細ページ

        <?php endwhile; endif; ?>
        <?php wp_reset_query();?>
        <div class="p-sub-blog__page-navi">
          <?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $my_query));?>
        </div>
      </div>
      <aside class="l-sub-blog__sideber p-sub-blog__sideber p-sidebar">
        <div class="p-sidebar__block p-sidebar__clinic">
          <h2 class="p-sidebar__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-ciinic.svg" alt="">
            クリニックの紹介
          </h2>
          <div class="p-sidebar-clinic__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/side-clinic.jpg" alt="">
          </div>
          <h3 class="p-sidebar__sub-title">みなみ歯科クリニック</h3>
          <p class="p-sidebar-clinic__text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
          <a href="#" class="p-sidebar-clinic__button">当院について</a>
        </div>
        <div class="l-new-article p-sidebar__new-article p-new-article">
          <h2 class="p-sidebar__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-article.svg" alt="">
            新着記事
          </h2>
          <div class="l-new-article__cards p-sub-blog__items p-blog-cards">
            <article class="p-blog-cards__item p-blog-card">
              <a class="p-blog-card__link" href="#">
                <div class="p-blog-card__img aside">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog01.jpg" alt="">
                </div>
                <div class="p-blog-card__body aside">
                  <span class="p-blog-card__label aside">お知らせ</span>
                  <p class="p-blog-card__text aside">記事のタイトルが入ります。記事のタイトルます…</p>
                  <time datetime="2020-02-14" class="p-blog-card__date aside">2020.02.14</time>
                </div>
              </a>
            </article>
            <article class="p-blog-cards__item p-blog-card">
              <a class="p-blog-card__link" href="#">
                <div class="p-blog-card__img aside">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog01.jpg" alt="">
                </div>
                <div class="p-blog-card__body aside">
                  <span class="p-blog-card__label aside">お知らせ</span>
                  <p class="p-blog-card__text aside">記事のタイトルが入ります。記事のタイトルます…</p>
                  <time datetime="2020-02-14" class="p-blog-card__date aside">2020.02.14</time>
                </div>
              </a>
            </article>
            <article class="p-blog-cards__item p-blog-card">
              <a class="p-blog-card__link" href="#">
                <div class="p-blog-card__img aside">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog01.jpg" alt="">
                </div>
                <div class="p-blog-card__body aside">
                  <span class="p-blog-card__label aside">お知らせ</span>
                  <p class="p-blog-card__text aside">記事のタイトルが入ります。記事のタイトルます…</p>
                  <time datetime="2020-02-14" class="p-blog-card__date aside">2020.02.14</time>
                </div>
              </a>
            </article>
            <article class="p-blog-cards__item p-blog-card">
              <a class="p-blog-card__link" href="#">
                <div class="p-blog-card__img aside">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog01.jpg" alt="">
                </div>
                <div class="p-blog-card__body aside">
                  <span class="p-blog-card__label aside">お知らせ</span>
                  <p class="p-blog-card__text aside">記事のタイトルが入ります。記事のタイトルます…</p>
                  <time datetime="2020-02-14" class="p-blog-card__date aside">2020.02.14</time>
                </div>
              </a>
            </article>
            <article class="p-blog-cards__item p-blog-card">
              <a class="p-blog-card__link" href="#">
                <div class="p-blog-card__img aside">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog01.jpg" alt="">
                </div>
                <div class="p-blog-card__body aside">
                  <span class="p-blog-card__label aside">お知らせ</span>
                  <p class="p-blog-card__text aside">記事のタイトルが入ります。記事のタイトルます…</p>
                  <time datetime="2020-02-14" class="p-blog-card__date aside">2020.02.14</time>
                </div>
              </a>
            </article>

          </div>
          <div class="p-sub-blog__category p-blog-categry l-blog-categry">
            <h2 class="p-sidebar__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-category.svg" alt="">
              カテゴリー
            </h2>
            <ul class="p-blog-category__lists">
              <li class="p-blog-categpry__item">
                <a href="#">テキストテキスト</a>
              </li>
              <li class="p-blog-categpry__item">
                <a href="#">テキストテキスト</a>
              </li>
              <li class="p-blog-categpry__item">
                <a href="#">テキストテキスト</a>
              </li>
              <li class="p-blog-categpry__item">
                <a href="#">テキストテキスト</a>
              </li>
            </ul>
          </div>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>
