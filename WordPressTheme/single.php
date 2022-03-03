<?php
  $about = esc_url(home_url('/about'));
  $news = esc_url(home_url('/news'));
  $blog = get_post_type_archive_link( "blog" );
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
      <div class="p-sub-blog__items p-blog-article">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
      <div class="p-blog-article__heading">
        <h2 class="p-blog-article__title"><?php the_title(); ?></h2>
        <div class="p-blog-article__meta">
          <time datetime="<?php the_time("y-m-d")?>" class="p-blog-article__date"><?php the_time("y.m.d"); ?></time>
          <span class="p-blog-article__label">
          <?php
            $cat = get_the_category($post->ID);
            if ( $cat ) {
              echo $cat[0]->name;
            } else {
              echo "カテゴリなし";
            }
          ?>
          </span>
        </div>
      </div>
      <div class="p-blog-article__content">
        <?php the_content( );?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
        <div class="p-sub-blog__pagenavi p-single-blog-pagenavi">
          <ul class="p-single-blog__pagenavi-lists">
            <li class="p-single-blog__pagenavi-list previous"><?php previous_post_link('%link', '前の記事'); ?></li>
            <li class="p-single-blog__pagenavi-list articles"><a href="<?php echo $news?>">記事一覧</a></li>
            <li class="p-single-blog__pagenavi-list next"><?php next_post_link('%link', '次の記事'); ?></li>
          </ul>
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
          <?php
            $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $new_posts = get_posts($args);
            foreach($new_posts as $post): setup_postdata( $post );
          ?>
            <article class="p-blog-cards__item p-blog-card">
              <a class="p-blog-card__link" href="<?php the_permalink();?>">
                <div class="p-blog-card__img aside">
                <?php
                  if (has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されてれば中サイズで表示
                  the_post_thumbnail('medium');
                  } else {
                  // なければnoimage画像をデフォルトで表示
                  echo '<img class="u-noimg" src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.jpg" alt="画像なし">';
                  }
                ?>
                </div>
                <div class="p-blog-card__body aside">
                  <span class="p-blog-card__label aside">
                  <?php
                    $cat = get_the_category($post->ID);
                    if ( $cat ) {
                      echo $cat[0]->name;
                    } else {
                      echo "カテゴリなし";
                    }
                  ?>
                  </span>
                  <p class="p-blog-card__text aside"><?php the_title();?></p>
                  <time datetime="<?php the_time('Y-m-d'); ?>" class="p-blog-card__date aside"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
            </article>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <div class="p-sub-blog__category p-blog-categry l-blog-categry">
            <h2 class="p-sidebar__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-category.svg" alt="">
              カテゴリー
            </h2>
            <ul class="p-blog-category__lists">
              <?php
                $args = array(
                  'title_li' => '',
                  'echo'     => 0
                  );
                $categories = wp_list_categories($args);
                $cat_serch   = array( '"cat-item', 'children' );             // 変換前の文字列.
                $cat_replace = array( '"p-blog-categpry__item', 'cat-list-child' ); // 変換後の文字列.
                $categories  = str_replace( $cat_serch, $cat_replace, $categories );

                echo $categories;
              ?>
            </ul>
          </div>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>
