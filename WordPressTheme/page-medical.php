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
    <?php get_template_part( 'template-parts/breadcrumb' )?>
  </div>
</div>
<!-- パンくず -->

<div class="l-sub-medical p-sub-medical">
  <div class="p-sub-medical__nav p-medical-nav">
    <div class="l-inner p-medical-nav__inner">
      <div class="p-medical-nav__wrap">
        <div class="p-medical-nav__titles">
          <h2 class="p-medial-nav__title">一般診療</h2>
          <p class="p-medial-nav__sub-title">保険対象</p>
        </div>
        <ul class="p-medical-nav__items">
          <li class="p-medical-nav__item">
            <a href="#post-150">一般歯科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#post-149">小児歯科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#post-148">予防歯科</a>
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
            <a href="#post-147">入れ歯</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#post-146">矯正歯科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#post-145">ホワイトニング</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#post-144">口腔外科</a>
          </li>
          <li class="p-medical-nav__item">
            <a href="#post-141">レーザー治療</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- 一般診療 -->
<section class="l-sub-medical__general p-sub-medical__general p-general">
    <div class="p-medical-info__top-deco"></div>
  <div class="p-medical-info__bg">
    <div id="general" class="l-inner p-general__inner">
      <div class="p-general__titles">
        <h2 class="c-section__title">一般診療</h2>
      </div>
      <?php $args = array(
        'post_type' => 'plan', //カスタム投稿で作成した投稿タイプ
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',
            'field'    => 'slug',
            'terms' => 'general'
            ),
          ),
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
      ?>
      <div id="post-<?php the_ID(); ?>" class="p-general__items">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title"><?php the_title();?></h3>
            <?php if ( get_field( 'worries' ) ) : ?>
            <span class="p-general__heading-sub-title">
              <?php the_field( 'worries' ); ?>
            </span>
            <?php endif;?>
          </div>
          <div class="p-general__content">
            <?php if ( get_field( 'worries' ) ) : ?>
            <div class="p-general__textarea">
              <?php the_field( 'overview' ); ?>
            </div>
            <?php endif; ?>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/general01.jpg" alt="">
            </div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/tag-01.png" media="(min-width: 768px)">
              <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-01-sp.png" alt="">
            </picture>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php else : //記事が無い場合 ?>
      <p>投稿記事がありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット ?>
      <!-- <div class="p-general__items child">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title">小児歯科</h3>
            <span class="p-general__heading-sub-title">小さいお子様の歯の治療</span>
          </div>
          <div class="p-general__content">
            <div class="p-general__textarea">
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/general02.jpg" alt="">
            </div>
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-01-sp.png" alt="">
          </div>
        </div>
      </div>
      <div class="p-general__items yobou">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title">予防歯科</h3>
            <span class="p-general__heading-sub-title">口腔内のケア全般</span>
          </div>
          <div class="p-general__content">
            <div class="p-general__textarea">
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/general03.jpg" alt="">
            </div>
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-01-sp.png" alt="">
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <div class="p-medical-info__bottom-deco1"></div>
  <div class="p-medical-info__bottom-deco2"></div>
</section>
<!-- 一般診療 -->

<!-- 特殊診療 -->
<section class="l-sub-medical__general p-sub-medical__general p-general">
  <div class="p-medical-info__top-deco"></div>
  <div class="p-medical-info__bg">
    <div id="special" class="l-inner p-general__inner">
      <div class="p-general__titles">
        <h2 class="c-section__title">特殊診療</h2>
      </div>
      <?php $args = array(
        'post_type' => 'plan', //カスタム投稿で作成した診療案内の投稿タイプ
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',
            'field'    => 'slug',
            'terms' => 'special'
            ),
          ),
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
      ?>
      <div id="post-<?php the_ID(); ?>" class="p-general__items denture">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title"><?php the_title();?></h3>
            <?php if ( get_field( 'worries' ) ) : ?>
            <span class="p-general__heading-sub-title">
              <?php the_field( 'worries' ); ?>
            </span>
            <?php endif;?>
          </div>
          <div class="p-general__content">
            <?php if ( get_field( 'overview' ) ) : ?>
            <div class="p-general__textarea">
              <?php the_field( 'overview' ); ?>
            </div>
            <?php endif;?>
            <div class="p-general__img">
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
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-02-sp.svg" alt="">
          </div>
        </div>
      </div>
            <?php endforeach; ?>
      <?php else : //記事が無い場合 ?>
      <p>投稿記事がありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット ?>
      <!-- <div class="p-general__items correct">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title">矯正歯科</h3>
            <span class="p-general__heading-sub-title">歯並びが気になる</span>
          </div>
          <div class="p-general__content">
            <div class="p-general__textarea">
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special02.jpg" alt="">
            </div>
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-02-sp.svg" alt="">
          </div>
        </div>
      </div>
      <div class="p-general__items white">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title">ホワイトニング</h3>
            <span class="p-general__heading-sub-title">歯を白くしたい</span>
          </div>
          <div class="p-general__content">
            <div class="p-general__textarea">
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special03.jpg" alt="">
            </div>
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-02-sp.svg" alt="">
          </div>
        </div>
      </div> -->
      <!-- <div class="p-general__items oral">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title">口腔外科</h3>
            <span class="p-general__heading-sub-title">インプラント、親知らずの抜歯</span>
          </div>
          <div class="p-general__content">
            <div class="p-general__textarea">
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special04.jpg" alt="">
            </div>
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-02-sp.svg" alt="">
          </div>
        </div>
      </div>
      <div class="p-general__items lazer">
        <div class="p-general__item">
          <div class="p-general__heading">
            <h3 class="p-general__heading-title">レーザー治療</h3>
            <span class="p-general__heading-sub-title">口内炎を治したい</span>
          </div>
          <div class="p-general__content">
            <div class="p-general__textarea">
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p class="p-general__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="p-general__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/special05.jpg" alt="">
            </div>
            <img class="p-general__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/tag-02-sp.svg" alt="">
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <div class="p-medical-info__bottom-deco1"></div>
  <div class="p-medical-info__bottom-deco2"></div>
</section>
<!-- 特殊診療 -->

<?php get_footer(); ?>
