<?php
  $about = esc_url(home_url('/about'));
?>

<?php get_header(); ?>

<!-- ファーストビュー -->
<div class="l-sub-fv p-sub-fv">
  <div class="l-inner p-sub-fv__inner p-sub-fv__inner--about">
    <div class="p-sub-fv__content blog">
      <div class="p-sub-fv__head">
        <h1 class="p-sub-fv__title">お知らせ</h1>
        <span class="p-sub-fv__sub-title">NEWS</span>
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

<div class="l-sub-blog p-sub-blog">
  <div class="l-inner p-sub-blog__inner">
    <div class="p-sub-blog__content">
      <div class="p-sub-blog__items p-blog-cards">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="p-blog-cards__item p-blog-card">
          <a class="p-blog-card__link" href="<?php the_permalink();?>">
            <div class="p-blog-card__img">
              <?php
                if (has_post_thumbnail() ) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
                } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img class="u-noimg" src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.jpg" alt="">';
                }
              ?>
            </div>
            <div class="p-blog-card__body">
              <span class="p-blog-card__label">
                <?php
                  $terms = get_the_terms($post->ID, 'news');
                  if ( $terms ) {
                    echo $terms[0]->name;
                  } else {
                    echo "カテゴリなし";
                  }
                ?>
              </span>
              <p class="p-blog-card__text"><?php the_title();?></p>
              <time datetime="<?php the_time('Y-m-d'); ?>" class="p-blog-card__date"><?php the_time('Y.m.d'); ?></time>
            </div>
          </a>
        </article>
        <?php endwhile; endif; ?>
        <div class="p-sub-blog__page-navi">

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
          <a href="<?php echo $about?>" class="p-sidebar-clinic__button">当院について</a>
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
