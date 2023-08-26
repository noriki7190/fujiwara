<?php get_header(); ?>
    <div class="p-works-detail">
      <div class="p-works-detail__inner l-inner">
        <div class="p-works-detail__nav">
          <nav class="p-works-detail-nav">
            <ul class="p-works-detail-nav__list">
              <li class="p-works-detail-nav__item" id="js-detailNavOverview">
                <a href="#a-overview" class="p-works-detail-nav__link">概要</a><!-- /.p-works-detail-nav__link -->
              </li><!-- /.p-works-detail-nav__item -->
              <li class="p-works-detail-nav__item" id="js-detailNavGallery">
                <a href="#a-gallery" class="p-works-detail-nav__link">ギャラリー</a><!-- /.p-works-detail-nav__link -->
              </li><!-- /.p-works-detail-nav__item -->
              <li class="p-works-detail-nav__item" id="js-detailNavConstruction">
                <a href="#a-construction" class="p-works-detail-nav__link">工事内容</a><!-- /.p-works-detail-nav__link -->
              </li><!-- /.p-works-detail-nav__item -->
            </ul><!-- /.p-works-detail-nav__list -->
          </nav><!-- /.p-works-detail-nav -->
        </div><!-- /.p-works-detail__nav -->

        <article class="p-works-detail__contents p-works-detail-contents">

          <div class="p-detail-head">
            <h2 class="p-works-detail-contents__ttl"><?php the_title(); ?></h2><!-- /.p-works-detail-contents__ttl -->
            <div class="p-works-detail-contents__meta">
              <time class="p-detail-head__date" datetime="<?php the_time('c'); ?>"><?php the_time( 'Y.m.d' ); ?></time><!-- /.p-detail-head__date -->
              <div class="p-works-detail-contents__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?></div><!-- /.p-works-detail-contents__category -->
            </div><!-- /.p-works-detail-contents__meta -->
            <figure class="p-works-detail-contents__img">
<?php if ( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail( 'works-detail'); ?>
<?php else: ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/noimage.png" alt="no image">
<?php endif; ?>
            </figure><!-- /.p-works-detail-contents__img -->
          </div><!-- /.p-detail-head -->
          <div class="p-works-detail-contents__blocks">
<?php
if( have_posts() ):
  while( have_posts() ):the_post();
?>
            <div class="p-works-detail-contents-block" id="a-overview">
              <div class="p-works-detail-contents-block">
                <h3 class="p-works-detail-contents-block__ttl">概要</h3><!-- /.p-works-detail-contents-block__ttl -->
                <p class="p-works-detail-contents-block__txt">
                  <?php the_field('overview'); ?>
                </p><!-- /.p-works-detail-contents-block__txt -->
              </div><!-- /.p-works-detail-contents-block -->
            </div><!-- /.p-works-detail-contents-block -->
            <div class="p-works-detail-contents-block">
              <div class="p-works-detail-contents-block" id="a-gallery">
                <h3 class="p-works-detail-contents-block__ttl">ギャラリー</h3><!-- /.p-works-detail-contents-block__ttl -->
                <!-- TODO: lightbox -->
                <!-- TODO: 縦横比調整 -->
                <ul class="p-works-detail-contents-block__gallery p-works-detail-galley p-works-detail-galley__list">
<?php
$gallery = get_field('gallery');
if( $gallery ):
  foreach( $gallery as $image ):
?>
                <li class="p-works-detail-galley__img">
                  <a href="<?php echo $image['url'] ;?>" class="p-works-detail-galley__link luminous">
                    <img src="<?php echo $image['url'] ;?>"  alt="<?php echo $image['caption'] ;?>" class="p-works-detail-galley__img">
                  </a><!-- /.p-works-detail-galley__link -->
                </li><!-- /.p-works-detail-galley__img -->
<?php
endforeach;
endif;
?>
                </ul><!-- /.p-works-detail-contents-block__gallery -->
              </div><!-- /.p-works-detail-contents-block -->
            </div><!-- /.p-works-detail-contents-block -->
            <div class="p-works-detail-contents-block">
              <div class="p-works-detail-contents-block" id="a-construction">
                <h3 class="p-works-detail-contents-block__ttl">工事内容</h3><!-- /.p-works-detail-contents-block__ttl -->
                <div class="p-works-detail-contents-block__description">
                  <dl class="p-description-list">
                    <?php
if( have_rows('construction_details') ):
  while ( have_rows('construction_details') ) : the_row();
?>
                    <div class="p-description-list__row">
                      <dt class="p-description-list__dt"><?php the_sub_field('dt'); ?></dt><!-- /.p-description-list__dt -->
                      <dd class="p-description-list__dd"><?php the_sub_field('dd'); ?></dd><!-- /.p-description-list__dd -->
                    </div><!-- /.p-company-information__row -->
<?php
  endwhile;
endif;
?>
                  </dl><!-- /.p-company-information__list -->
                </div><!-- /.p-works-detail-contents-block__description -->
              </div><!-- /.p-works-detail-contents-block -->
            </div><!-- /.p-works-detail-contents-block -->
<?php
  endwhile;
endif;
?>
          </div><!-- /.p-works-detail-contents__blocks -->


        </article><!-- /.p-works-detail__contents -->

        <div class="p-works-detail__link">
          <!-- TODO: ホバー時カーソルを画像にする -->
          <div class="p-works-detail-contents__category-link p-works-detail-contents-category-link">
            <ul class="p-works-detail-contents-category-link__list">
              <li
                class="p-works-detail-contents-category-link__item p-works-detail-contents-category-link__item--architecture">
                <a href="" class="p-works-detail-contents-category-link__link">
                  <div class="p-works-detail-contents-category-link__link-wrapper">
                    Architecture<span>建築事業</span>
                  </div><!-- /.p-works-detail-contents-category-link__link-wrapper -->
                </a><!-- /.p-works-detail-contents-category-link__link -->
                <div class="p-works-detail-contents-category-link__img js-cursor">
                  <img src="./assets/img/service/service_architecture_img.jpg" alt="">
                </div>
                <!-- /.p-works-detail-contents-category-link__img js-cursor -->
              </li><!-- /.p-works-detail-contents-category-link__item -->
              <li
                class="p-works-detail-contents-category-link__item p-works-detail-contents-category-link__item--civil">
                <a href="" class="p-works-detail-contents-category-link__link">
                  <div class="p-works-detail-contents-category-link__link-wrapper">
                    Civil engineering<span>建築事業</span>
                  </div><!-- /.p-works-detail-contents-category-link__link-wrapper -->
                </a><!-- /.p-works-detail-contents-category-link__link -->
                <div class="p-works-detail-contents-category-link__img js-cursor">
                  <img src="./assets/img/service/service_civil_img.jpg" alt="">
                </div>
                <!-- /.p-works-detail-contents-category-link__img js-cursor -->

              </li><!-- /.p-works-detail-contents-category-link__item -->
              <li
                class="p-works-detail-contents-category-link__item p-works-detail-contents-category-link__item--housing">
                <a href="" class="p-works-detail-contents-category-link__link">
                  <div class="p-works-detail-contents-category-link__link-wrapper">
                    Housing<span>住宅事業</span>
                  </div><!-- /.p-works-detail-contents-category-link__link-wrapper -->
                </a><!-- /.p-works-detail-contents-category-link__link -->
                <div class="p-works-detail-contents-category-link__img js-cursor">
                  <img src="./assets/img/service/service_housing_img.jpg" alt="">
                </div>
                <!-- /.p-works-detail-contents-category-link__img js-cursor -->

              </li><!-- /.p-works-detail-contents-category-link__item -->
            </ul><!-- /.p-works-detail-contents-category-link__list -->
            <div class="p-works-detail-contents-category-link__btn">
              <a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="c-btn-secondary">施工実績一覧へ</a><!-- /.c-btn-secondary -->
            </div><!-- /.p-works-detail-contents-category-link__btn -->
          </div><!-- /.p-works-detail-contents__category-link -->

        </div><!-- /.p-works-detail__link -->

      </div><!-- /.p-works-detail__inner -->
    </div><!-- /.p-works-detail -->
<?php get_footer(); ?>