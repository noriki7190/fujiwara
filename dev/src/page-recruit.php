<?php get_header(); ?>
    <div class="p-recruit-lead">
      <p class="p-recruit-lead__head">過去と未来を繋ぎ続ける</p><!-- /.p-recruit-lead__head -->
      <div class="p-recruit-lead__loop-txt">
        <p class="p-recruit-lead__txt u-loop">fujiwara recruitment</p><!-- /.p-recruit-lead__txt -->
      </div><!-- /.p-recruit-lead__loop-txt -->
      <div class="p-recruit-lead__parallax-img">
        <figure class="p-recruit-lead__img1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/recruit/recruit_lead_img01.jpg" alt="建設作業風景1">
        </figure><!-- /.p-recruit-lead__img1 -->
        <figure class="p-recruit-lead__img2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/recruit/recruit_lead_img02.jpg" alt="建設作業風景2">
        </figure><!-- /.p-recruit-lead__img2 -->
      </div><!-- /.p-recruit-lead__parallax-img -->
    </div><!-- /.p-recruit-lead -->

    <section class="p-recruit-message">
      <div class="p-recruit-message__inner l-inner">
        <figure class="p-recruit-message__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/recruit/recruit_message_img.jpg" alt=""></figure>
        <!-- /.p-recruit-message__img -->
        <div class="p-recruit-message__contents">
          <h2 class="p-recruit-message__ttl c-sect-ttl-level2">Message<span>メッセージ</span></h2>
          <!-- /.p-recruit-message__ttl c-sect-ttl-level2 -->
          <p class="p-recruit-message__lead">地域の皆様へ恩返しを</p><!-- /.p-recruit-message__lead -->
          <p class="p-recruit-message__txt">
            私たちは、これまでたくさんの実績を残してきました。自慢の技術力も企業全体で向上してきており、私たちの誇りの一つです。<br>そんな誇りに思えるモノたちですが、地域の皆様のご協力や声援がなければ、積み上げることが出来なかったのは間違いありません。<br><br>私たちは、これからも「地域の皆様へ恩返しを」を第一に、社会へ貢献していきます。<br>藤原建設工業では、地域へ貢献したいと強く思っている方を求めています。
          </p><!-- /.p-recruit-message__txt -->
        </div><!-- /.p-recruit-message__contents -->
      </div><!-- /.p-recruit-message__inner -->
    </section><!-- /.p-recruit-message -->

    <div class="p-recruit-parallax"></div><!-- /.p-recruit-parallax -->

    <section class="p-recruit-faq">
      <div class="p-recruit-faq__inner l-inner">
        <h2 class="p-recruit-faq__ttl c-sect-ttl-level2">FAQ<span>よくある質問</span></h2><!-- /.p-recruit-faq__ttl -->
        <div class="p-recruit-faq__body p-accordion">
          <ul class="p-accordion__list">
<?php
$counter = 0;
if( have_rows('faq') ):
  while ( have_rows('faq') ) : the_row();
  $counter++;
  // echo $counter;
  if ($counter === 1) :
?>
            <li class="p-accordion__item">
              <button class="p-accordion__head js-accordion is-open"><?php the_sub_field('question'); ?><span class="p-accordion__icon"></span></button><!-- /.p-accordion__head -->
              <p class="p-accordion__body"><?php the_sub_field('answer'); ?></p><!-- /.p-accordion__body -->
            </li><!-- /.p-accordion__item -->
<?php else: ?>
            <li class="p-accordion__item">
              <button class="p-accordion__head js-accordion"><?php the_sub_field('question'); ?><span class="p-accordion__icon"></span></button><!-- /.p-accordion__head -->
              <p class="p-accordion__body"><?php the_sub_field('answer'); ?></p><!-- /.p-accordion__body -->
            </li><!-- /.p-accordion__item -->
<?php
    endif;
  endwhile;
endif;
?>
          </ul><!-- /.p-accordion__list -->
        </div><!-- /.p-recruit-faq__body -->
      </div><!-- /.p-recruit-faq__inner -->
    </section><!-- /.p-recruit-faq -->

    <section class="p-recruit-job">
      <div class="p-recruit-job__inner l-inner">
        <h2 class="p-recruit-job__ttl c-sect-ttl-level2">Job description<span>募集要項</span></h2>
        <!-- /.p-recruit-faq__ttl -->
        <div class="p-recruit-job__tab">
          <ul class="p-recruit-job-tab">
            <li class="p-recruit-job-tab__item"><a
                class="p-recruit-job__link is-current">建設業務</a><!-- /.p-recruit-job__link --></li>
            <!-- /.p-recruit-job-tab__item -->
            <li class="p-recruit-job-tab__item"><a
                class="p-recruit-job__link">事務業務</a><!-- /.p-recruit-job__link --></li>
            <!-- /.p-recruit-job-tab__item -->
            <li class="p-recruit-job-tab__item"><a
                class="p-recruit-job__link">営業業務</a><!-- /.p-recruit-job__link --></li>
            <!-- /.p-recruit-job-tab__item -->
          </ul><!-- /.p-recruit-job-tab -->
        </div><!-- /.p-recruit-job__tab -->
        <div class="p-recruit-job__description p-recruit-job-description">
          <ul class="p-recruit-job-description__list">
            <li class="p-recruit-job-description__item is-current" id="js-tab-construction">
              <h3 class="p-recruit-job-description__ttl">建設業務</h3><!-- /.p-recruit-job-description__ttl -->
              <dl class="p-description-list p-recruit-job-description__dl">
<?php
if( have_rows('construction') ):
  while ( have_rows('construction') ) : the_row();
?>
                <div class="p-description-list__row">
                  <dt class="p-description-list__dt"><?php the_sub_field('dt'); ?></dt><!-- /.p-description-list__dt -->
                  <dd class="p-description-list__dd"><?php the_sub_field('dd'); ?></dd><!-- /.p-description-list__dd -->
                </div><!-- /.p-company-information__row -->
<?php
  endwhile;
endif;
?>
                <div class="p-recruit-job-description__btn"><a href="<?php echo esc_url( home_url( 'entry' ) ); ?>" class="c-btn-light">エントリー</a></div>
                <!-- /.p-recruit-job-description__btn -->
              </dl><!-- /.p-company-information__list -->
            </li><!-- /.p-recruit-job-description__item -->

            <li class="p-recruit-job-description__item" id="js-tab-office">
              <h3 class="p-recruit-job-description__ttl">事務業務</h3><!-- /.p-recruit-job-description__ttl -->
              <dl class="p-description-list p-recruit-job-description__dl">
<?php
if( have_rows('office') ):
  while ( have_rows('office') ) : the_row();
?>
                <div class="p-description-list__row">
                  <dt class="p-description-list__dt"><?php the_sub_field('dt'); ?></dt><!-- /.p-description-list__dt -->
                  <dd class="p-description-list__dd"><?php the_sub_field('dd'); ?></dd><!-- /.p-description-list__dd -->
                </div><!-- /.p-company-information__row -->
<?php
  endwhile;
endif;
?>
                <div class="p-recruit-job-description__btn"><a href="<?php echo esc_url( home_url( 'entry' ) ); ?>" class="c-btn-light">エントリー</a></div>
                <!-- /.p-recruit-job-description__btn -->
              </dl><!-- /.p-company-information__list -->
            </li><!-- /.p-recruit-job-description__item -->

            <li class="p-recruit-job-description__item" id="js-tab-sales">
              <h3 class="p-recruit-job-description__ttl">営業業務</h3><!-- /.p-recruit-job-description__ttl -->
              <dl class="p-description-list p-recruit-job-description__dl">
<?php
if( have_rows('sales') ):
  while ( have_rows('sales') ) : the_row();
?>
                <div class="p-description-list__row">
                  <dt class="p-description-list__dt"><?php the_sub_field('dt'); ?></dt><!-- /.p-description-list__dt -->
                  <dd class="p-description-list__dd"><?php the_sub_field('dd'); ?></dd><!-- /.p-description-list__dd -->
                </div><!-- /.p-company-information__row -->
<?php
  endwhile;
endif;
?>
                <div class="p-recruit-job-description__btn"><a href="<?php echo esc_url( home_url( 'entry' ) ); ?>" class="c-btn-light">エントリー</a></div>
                <!-- /.p-recruit-job-description__btn -->
              </dl><!-- /.p-company-information__list -->
            </li><!-- /.p-recruit-job-description__item -->
          </ul><!-- /.p-recruit-job-description__list -->

        </div><!-- /.p-recruit-job__description -->
      </div><!-- /.p-recruit-job__inner l-inner -->
    </section><!-- /.p-recruit-job -->

    <section class="p-recruit-form">
      <div class="p-recruit-form__inner">
        <a href="<?php echo esc_url( home_url( 'entry' ) ); ?>" class="p-recruit-form__link">
          <div class="p-recruit-from__body">
            <h2 class="p-recruit-form__ttl c-sect-ttl-level2 c-sect-ttl-level2--light">Entry Form<span>エントリーフォーム</span>
            </h2><!-- /.p-recruit-form__ttl -->
            <div class="p-recruit-form__btn c-btn-more c-btn-more--light">View more<span class="c-btn-more__inline"></span></div><!-- /.p-recruit-form__btn -->
          </div><!-- /.p-recruit-from__inner -->
        </a><!-- /.p-recruit-form__link -->
      </div><!-- /.p-recruit-form__inner -->
      <div class="p-recruit-form__bg">
        <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/home/home_parallax_img02.jpg" alt=""> -->
      </div><!-- /.p-recruit-form__bg -->

    </section><!-- /.p-recruit-form -->
<?php get_footer(); ?>