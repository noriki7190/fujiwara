<?php get_header(); ?>
    <section class="p-home-about">
      <div class="p-home-about__inner l-inner">
        <figure class="p-home-about__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_about_img.jpg" alt=""></figure>
        <!-- /.p-home-about__img -->
        <div class="p-home-about__body p-sect-body">
          <h2 class="c-sect-ttl">
            <span class="c-sect-ttl__dot"></span>
            <span class="c-sect-ttl__en u-each-txt-anime">About</span>
            <span class="c-sect-ttl__jp u-each-txt-anime">会社情報</span><!-- /.c-sect-ttl__jp -->
          </h2><!-- /.c-sect-ttl -->
          <p class="p-sect-body__text">
            これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。<br>過去と未来を繋ぎ続ける」そんな会社を目指す技術集団が、藤原建設工業です。</p>
          <!-- /.p-sect-body__text -->
          <div class="p-sect-body__link">
            <a href="<?php echo esc_url( home_url( 'company' ) ); ?>" class="c-btn-more">View more<span class="c-btn-more__inline"></span></a>
          </div><!-- /.p-sect-body__link -->
          <div class="p-home-about__bg"></div>
        </div><!-- /.p-sect-body -->
      </div><!-- /.p-home-about__inner -->
    </section><!-- /.p-home-about -->

    <div class="p-home-parallax-movie">
      <div class="p-home-parallax-movie__inner">
        <video src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fujiwara_movie.mp4" poster="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/video_img.jpg" muted autoplay playsinline
          loop></video>
      </div><!-- /.p-home-parallax-movie__inner -->
    </div><!-- /.p-top-parallax-video -->

    <section class="p-home-service">
      <div class="p-home-service__inner l-inner">
        <div class="p-home-service__container">
          <div class="p-home-service__body p-sect-body">
            <h2 class="c-sect-ttl">
              <span class="c-sect-ttl__dot"></span>
              <span class="c-sect-ttl__en u-each-txt-anime">Service</span>
              <span class="c-sect-ttl__jp u-each-txt-anime">事業内容</span><!-- /.c-sect-ttl__jp -->
            </h2><!-- /.c-sect-ttl -->
            <p class="p-sect-body__text">
              藤原建設工業では「建築事業」「土木事業」「住宅事業」の3つの事業を通してお客さまのお手伝いをさせていただいております。<br>事業内容ページでは、3つの柱をより具体的にご紹介します。
            </p>
            <!-- /.p-sect-body__text -->
            <div class="p-sect-body__link">
              <a href="<?php echo esc_url( home_url( 'service' ) ); ?>" class="c-btn-more">View more<span class="c-btn-more__inline"></span></a>
            </div>
            <!-- /.p-sect-body__link -->
          </div><!-- /.p-sect-body -->
        </div><!-- /.p-home-service__container -->
        <div class="p-home-service-business p-home-service__business">
          <ul class="p-home-service-business__list">
            <li class="p-home-service-business__item">
              <figure class="p-home-service-business__img">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_service_img01.jpg" alt="">
              </figure><!-- /.p-home-service-business__img -->
              <h3 class="p-home-service-business__title">Architecture<span>建築事業</span></h3>
              <!-- /.p-home-service-business__title -->
              <div class="p-home-service-business__link">
                <a href="" class="c-btn-more c-btn-more--light">View more<span class="c-btn-more__inline"></span></a>
              </div><!-- /.p-home-service-business__link -->
            </li><!-- /.p-home-service-business__item -->

            <li class="p-home-service-business__item">
              <figure class="p-home-service-business__img">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_service_img02.jpg" alt="">
              </figure><!-- /.p-home-service-business__img -->
              <h3 class="p-home-service-business__title">Civil Engineering<span>土木事業</span></h3>
              <!-- /.p-home-service-business__title -->
              <div class="p-home-service-business__link">
                <a href="" class="c-btn-more c-btn-more--light">View more<span class="c-btn-more__inline"></span></a>
              </div><!-- /.p-home-service-business__link -->
            </li><!-- /.p-home-service-business__item -->

            <li class="p-home-service-business__item">
              <figure class="p-home-service-business__img">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_service_img03.jpg" alt="">
              </figure><!-- /.p-home-service-business__img -->
              <h3 class="p-home-service-business__title">Housing<span>住宅事業</span></h3>
              <!-- /.p-home-service-business__title -->
              <div class="p-home-service-business__link">
                <a href="" class="c-btn-more c-btn-more--light">View more<span class="c-btn-more__inline"></span></a>
              </div><!-- /.p-home-service-business__link -->
            </li><!-- /.p-home-service-business__item -->
          </ul><!-- /.p-home-service-business__list -->
          <div class="p-home-service-business__bg"></div>
        </div><!-- /.p-home-service-business -->
      </div><!-- /.p-home-service__inner -->
      <div class="p-home-service__loop-slide p-loop-img">
        <div class="swiper" id="swiper-loop">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img01.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img02.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img03.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img04.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img05.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img01.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img02.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img03.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img04.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_slider_img05.jpg" alt="" />
            </div>
          </div>
        </div>
      </div><!-- /.p-home-service__loop-slide -->
    </section><!-- /.p-home-service -->

    <section class="p-home-works">
      <div class="p-home-works__inner l-inner">
        <h2 class="c-sect-ttl">
          <span class="c-sect-ttl__dot"></span>
          <span class="c-sect-ttl__en u-each-txt-anime">Works</span>
          <span class="c-sect-ttl__jp u-each-txt-anime">施工実績</span><!-- /.c-sect-ttl__jp -->
        </h2><!-- /.c-sect-ttl -->
        <!-- Slider main container -->
        <div class="p-home-works-slider swiper" id="swiper-work">
          <!-- TODO: カーソルホバー時のtransition -->
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper p-home-works-slider__contents">
            <!-- Slides -->
            <div class="swiper-slide p-home-works-slider__item">
              <a href="" class="p-home-works-slider__link">
                <figure class="p-home-works-slider__img">
                  <span class="p-home-works-slider__label c-label">建築</span><!-- /.c-label -->
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_works_img01.jpg" alt="">
                  <figcaption class="p-home-works-slider__caption">
                    <p class="p-home-works-slider__name">◯◯ビル</p><!-- /.p-home-works-slider__name -->
                    <time class="p-home-works-slider__date">2022.02.24</time><!-- /.p-home-works-slider__date -->
                  </figcaption><!-- /.p-home-works-slider__caption -->
                </figure><!-- /.p-home-works-slider__img -->
              </a><!-- /.p-home-works-slider__link -->
            </div>
            <div class="swiper-slide p-home-works-slider__item">
              <a href="" class="p-home-works-slider__link">
                <figure class="p-home-works-slider__img">
                  <span class="p-home-works-slider__label c-label">建築</span><!-- /.c-label -->
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_works_img01.jpg" alt="">
                  <figcaption class="p-home-works-slider__caption">
                    <p class="p-home-works-slider__name">◯◯ビル</p><!-- /.p-home-works-slider__name -->
                    <time class="p-home-works-slider__date">2022.02.24</time><!-- /.p-home-works-slider__date -->
                  </figcaption><!-- /.p-home-works-slider__caption -->
                </figure><!-- /.p-home-works-slider__img -->
              </a><!-- /.p-home-works-slider__link -->
            </div>
            <div class="swiper-slide p-home-works-slider__item">
              <a href="" class="p-home-works-slider__link">
                <figure class="p-home-works-slider__img">
                  <span class="p-home-works-slider__label c-label"></span><!-- /.c-label -->
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_works_img01.jpg" alt="">
                  <figcaption class="p-home-works-slider__caption">
                    <p class="p-home-works-slider__name">◯◯ビル</p><!-- /.p-home-works-slider__name -->
                    <time class="p-home-works-slider__date">2022.02.24</time><!-- /.p-home-works-slider__date -->
                  </figcaption><!-- /.p-home-works-slider__caption -->
                </figure><!-- /.p-home-works-slider__img -->
              </a><!-- /.p-home-works-slider__link -->
            </div>
            <div class="swiper-slide p-home-works-slider__item">
              <a href="" class="p-home-works-slider__link">
                <figure class="p-home-works-slider__img">
                  <span class="p-home-works-slider__label c-label"></span><!-- /.c-label -->
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_works_img01.jpg" alt="">
                  <figcaption class="p-home-works-slider__caption">
                    <p class="p-home-works-slider__name">◯◯ビル</p><!-- /.p-home-works-slider__name -->
                    <time class="p-home-works-slider__date">2022.02.24</time><!-- /.p-home-works-slider__date -->
                  </figcaption><!-- /.p-home-works-slider__caption -->
                </figure><!-- /.p-home-works-slider__img -->
              </a><!-- /.p-home-works-slider__link -->
            </div>
            <div class="swiper-slide p-home-works-slider__item">
              <a href="" class="p-home-works-slider__link">
                <figure class="p-home-works-slider__img">
                  <span class="p-home-works-slider__label c-label"></span><!-- /.c-label -->
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_works_img01.jpg" alt="">
                  <figcaption class="p-home-works-slider__caption">
                    <p class="p-home-works-slider__name">◯◯ビル</p><!-- /.p-home-works-slider__name -->
                    <time class="p-home-works-slider__date">2022.02.24</time><!-- /.p-home-works-slider__date -->
                  </figcaption><!-- /.p-home-works-slider__caption -->
                </figure><!-- /.p-home-works-slider__img -->
              </a><!-- /.p-home-works-slider__link -->
            </div>
            <div class="swiper-slide p-home-works-slider__item">
              <a href="" class="p-home-works-slider__link">
                <figure class="p-home-works-slider__img">
                  <span class="p-home-works-slider__label c-label">建築</span><!-- /.c-label -->
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_works_img01.jpg" alt="">
                  <figcaption class="p-home-works-slider__caption">
                    <p class="p-home-works-slider__name">◯◯ビル</p><!-- /.p-home-works-slider__name -->
                    <time class="p-home-works-slider__date">2022.02.24</time><!-- /.p-home-works-slider__date -->
                  </figcaption><!-- /.p-home-works-slider__caption -->
                </figure><!-- /.p-home-works-slider__img -->
              </a><!-- /.p-home-works-slider__link -->
            </div>

          </div><!-- p-home-works-slider__contents -->
          <div class="swiper-pagination p-home-works-slider__pagination"></div>
          <div class="p-home-slider__btn">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div><!-- /.p-home-slider__btn -->
        </div><!-- p-home-works-slider -->
        <div class="p-home-works__btn">
          <a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="p-home-works__link c-btn-more">View more<span class="c-btn-more__inline"></span></a>
        </div>
        <div class="p-home-work__copy u-loop">our works</div><!-- /.p-home-recruit__copy -->
      </div><!-- /.p-home-works__inner -->
    </section><!-- /.p-home-works -->

    <section class="p-home-news">
      <div class="l-inner">
        <h2 class="c-sect-ttl">
          <span class="c-sect-ttl__dot"></span>
          <span class="c-sect-ttl__en u-each-txt-anime">News</span>
          <span class="c-sect-ttl__jp u-each-txt-anime">新着情報</span><!-- /.c-sect-ttl__jp -->
        </h2><!-- /.c-sect-ttl -->
        <div class="p-home-news__contents p-news-contents">
          <div class="p-news-contents__list">
            <!-- 新着記事を４記事出力 -->
<?php
$wp_query = get_entry_posts('daily_news', $per_page= '4');
	if( $wp_query->have_posts() ):
    while( $wp_query->have_posts() ) : $wp_query->the_post();
?>
              <article class="p-news-contents__item">
                <a href="<?php the_permalink(); ?>" class="p-news-contents__link">
                  <figure class="p-news-contents__img">
<?php
if( has_post_thumbnail($post) ):
  the_post_thumbnail();
else:
?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/noimage.png" alt="no image">
<?php
endif;
?>
                  </figure>
                  <div class="p-news-contents__body">
                    <time class="p-news-contents__date" datetime="<?php the_time('c'); ?>"><?php the_time( 'Y.m.d' ); ?></time><!-- /.p-news-contents__date -->
                    <span class="p-news-contents__label"><?php echo esc_html( get_the_terms( get_the_ID(), 'news' )[0]->name ); ?></span><!-- /.p-news-contents__label -->

                    <h3 class="p-news-contents__ttl"><?php the_title(); ?></h3><!-- /.p-news-contents__ttl -->
                  </div><!-- /.p-news-contents__body -->
                </a><!-- /.p-news-contents__link -->
              </article><!-- /.p-news-contents__item -->
<?php
  endwhile;
endif;
?>
          </div><!-- /.p-news-contents__list -->
          <div class="p-home-news__link">
            <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="c-btn-more">View more<span class="c-btn-more__inline"></span></a>
          </div>
        </div><!-- /.p-home-news__contents -->
      </div><!-- /.l-inner -->
    </section><!-- /.p-home-news -->

    <div class="p-home-parallax-img" id="js-parallax">

    </div><!-- /.p-home-parallax-img -->

    <section class="p-home-recruit">
      <div class="l-inner">
        <div class="p-home-recruit__body p-sect-body">
          <h2 class="c-sect-ttl">
            <span class="c-sect-ttl__dot"></span>
            <span class="c-sect-ttl__en u-each-txt-anime">Recruit</span>
            <span class="c-sect-ttl__jp u-each-txt-anime">採用情報</span><!-- /.c-sect-ttl__jp -->
          </h2><!-- /.c-sect-ttl -->
          <p class="p-sect-body__text">
            藤原建設工業では、各職種にて新卒採用と中途採用を通年行っています。<br>これまで「過去と未来を繋ぎ続ける」に共感していただける仲間たちと歩んできました。<br>
            一緒に未来を築いていける方とお会いできるのを楽しみにしています。</p>
          <!-- /.p-sect-body__text -->
          <div class="p-sect-body__link">
            <a href="<?php echo esc_url( home_url( 'recruit' ) ); ?>" class="c-btn-more">View more<span class="c-btn-more__inline"></span></a>
          </div><!-- /.p-sect-body__link -->
          <div class="p-home-recruit__copy u-loop">get in touch</div><!-- /.p-home-recruit__copy -->
        </div><!-- /.p-sect-body -->
      </div><!-- /.l-inner -->

    </section><!-- /.p-home-recruit -->

<?php get_footer(); ?>