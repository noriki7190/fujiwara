<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- googl fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->
  <!-- <link rel="stylesheet" href="./assets/css/lightbox.min.css"> -->
  <!-- <link rel="stylesheet" href="./assets/css/luminous-basic.min.css"> -->
  <title>藤原建設工業 | 架空の建設会社</title>

  <meta name="description" content="架空の建設会社 デザインカンプからのコーディング">
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="p-header">
      <div class="p-header__inner" id="js-header">
        <h1 class="p-header__logo"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="fuji construction industry"></a>
        </h1>
        <!-- /.p-header__logo -->

        <div class="p-header__right">
          <nav class="p-header__nav p-global-nav">
<?php
  wp_nav_menu(
    array (
      'depth' => 2,
      'theme_location' => 'global',
      'container' => false,
      'menu_class' => 'p-global-nav__list',
    )
  );
?>
            <div class="p-mega__body">
                  <div class="p-mega__img"></div><!-- /.p-mega__img -->
                  <div class="p-mega__contents">
                    <ul class="p-mega__list">
                      <li class="p-mega__item"><a href="" class="p-mega__link"><span
                            class="p-mega__ttl">Architecture<span>建設事業</span></span><span
                            class="p-mega__arrow"></span></a><!-- /.p-mega__link --></li><!-- /.p-mega__item -->
                      <li class="p-mega__item"><a href="" class="p-mega__link"><span
                            class="p-mega__ttl">Architecture<span>建設事業</span></span><span
                            class="p-mega__arrow"></span></a><!-- /.p-mega__link --></li><!-- /.p-mega__item -->
                      <li class="p-mega__item"><a href="" class="p-mega__link"><span
                            class="p-mega__ttl">Architecture<span>建設事業</span></span><span
                            class="p-mega__arrow"></span></a><!-- /.p-mega__link --></li><!-- /.p-mega__item -->
                    </ul><!-- /.p-mega__list -->
                  </div><!-- /.p-mega__contents -->
                </div><!-- /.p-mega__body -->
          </nav><!-- /.p-header__nav -->

          <div class="p-header__btn">
            <div class="c-nav-btn">
              <a href="<?php echo esc_url( home_url( 'recruit' ) ); ?>" class="c-nav-btn__link">recruit</a><!-- /.p-nav__btn -->
            </div><!-- /.c-nav-btn -->
            <div class="c-nav-btn c-nav-btn--secondary">
              <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="c-nav-btn__link">contact</a><!-- /.p-nav__btn -->
            </div><!-- /.p-header-btn -->
          </div><!-- /.p-header__btn -->
        </div><!-- /.p-header__right -->

        <div class="p-drawer-icon">
          <button class="p-drawer-btn" id="js-drawer-btn">
            <span class="p-drawer-btn__inline"></span>
          </button><!-- /.p-burger-icon -->
        </div><!-- /.p-drawer-icon -->
        <div class="p-drawer" id="js-drawer">
          <div class="p-drawer__bg"></div><!-- /.p-drawer__bg -->
          <div class="p-drawer__body">
            <nav class="p-drawer__nav">
              <ul class="p-drawer-nav__list">
                <li class="p-drawer-nav__item">
                  <a href="/home" class="p-drawer-nav__link">top</a><!-- /.p-drawer-nav__link -->
                </li><!-- /.p-drawer-nav__item -->
                <li class="p-drawer-nav__item">
                  <a href="" class="p-drawer-nav__link">company</a><!-- /.p-drawer-nav__link -->
                </li><!-- /.p-drawer-nav__item -->
                <li class="p-drawer-nav__item">
                  <a href="" class="p-drawer-nav__link">service</a><!-- /.p-drawer-nav__link -->
                </li><!-- /.p-drawer-nav__item -->
                <li class="p-drawer-nav__item p-drawer-nav__item--work">
                  <a href="" class="p-drawer-nav__link">works</a><!-- /.p-drawer-nav__link -->
                  <a href="" class="p-drawer-nav__child">建築事業</a><!-- /.p-drawer-nav__child -->
                  <a href="" class="p-drawer-nav__child">土木事業</a><!-- /.p-drawer-nav__child -->
                  <a href="" class="p-drawer-nav__child">住宅事業</a><!-- /.p-drawer-nav__child -->
                </li><!-- /.p-drawer-nav__item -->
                <li class="p-drawer-nav__item">
                  <a href="" class="p-drawer-nav__link">news</a><!-- /.p-drawer-nav__link -->
                </li><!-- /.p-drawer-nav__item -->
              </ul><!-- /.p-drawer-nav__list -->

              <div class="p-drawer__btns">
                <div class="c-nav-btn">
                  <a href="<?php echo esc_url( home_url( 'recruit' ) ); ?>" class="c-nav-btn__link">recruit</a><!-- /.p-nav__btn -->
                </div><!-- /.c-nav-btn -->
                <div class="c-nav-btn c-nav-btn--secondary">
                  <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="c-nav-btn__link">contact</a><!-- /.p-nav__btn -->
                </div><!-- /.p-header-btn -->
              </div><!-- /.p-drawer__btns -->
            </nav><!-- /.p-drawer__nav -->

            <address class="p-drawer__access p-access">
              <p class="p-access__head">Access</p><!-- /.p-drawer__access -->
              <p class="p-access__info">
                藤原建設工業株式会社 本社<br>〒000-0000 千葉県◯◯市◯◯丁目◯◯番<br>TEL 00-0000-0000
              </p><!-- /.p-drawer__info -->
            </address><!-- /.p-access -->

            <!-- TODO: リンクにする？ -->
            <div class="p-drawer__privacy">Privacy Policy</div><!-- /.p-drawer__privacy -->
            <small class="p-drawer__copyright">© 1995 Fujiwara Construction Industry. Co., Ltd.</small>
          </div><!-- /.p-drawer__body -->
        </div><!-- /.p-drawer -->
      </div><!-- /.p-header__inner -->
    </div><!-- /.p-header -->

<?php if( is_front_page() ): ?>
    <div class="p-loading" id="js-loading">
      <div class="p-loading__logo" id="js-loading-logo">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-loading.png" alt="">
      </div><!-- /.p-loading__logo -->
      <div class="l-inner">
        <div class="p-loading__catch-copy">
          <span class="u-each-txt-anime u-each-txt-anime--loading">How Far</span><br><span
            class="u-each-txt-anime u-each-txt-anime--loading">Can <br class="u-is-sp">We Go?</span>
          </div><!-- /.p-loading__catch-copy -->
          <p class="p-loading__text">「どこまでいけるか」<br>お客さまと挑戦し続ける未来を<br class="u-is-sp">築いていきます。</p><!-- /.p-kv__text -->
      </div><!-- /.l-inner -->
      <div class="p-loading__bg-green"></div><!-- /.p-loading__bg-green -->
      <div class="p-loading__bg-white"></div><!-- /.p-loading__bg-white -->
    </div><!-- /.p-loading -->
<?php endif; ?>

<!-- kv -->
    <div class="p-header__kv">
<?php if ( is_front_page() ): ?>
  <!-- top kv -->
      <div class="p-kv">
        <div class="l-inner">
          <div class="swiper" id="swiper-kv">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <p class="p-kv__business u-each-txt-anime">Architecture</p><!-- /.p-kv__business -->
                <figure class="p-kv__img" data-swiper-parallax-x="0%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/kv_slider01.png" alt="">
                </figure>
                <!-- /.p-kv__img -->
              </div><!-- /.p-kv__slider -->
              <div class="swiper-slide">
                <p class="p-kv__business p-kv__business--civil u-each-txt-anime">Civil Engineering</p><!-- /.p-kv__business -->
                <figure class="p-kv__img" data-swiper-parallax-x="0%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/kv_slider02.png" alt="">
                </figure>
                <!-- /.p-kv__img -->
              </div><!-- /.p-kv__slider -->
              <div class="swiper-slide">
                <p class="p-kv__business p-kv__business--hosing u-each-txt-anime">Housing</p><!-- /.p-kv__business -->
                <figure class="p-kv__img" data-swiper-parallax-x="0%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/kv_slider03.png" alt="">
                </figure>
                <!-- /.p-kv__img -->
              </div><!-- /.p-kv__slider -->
            </div><!-- /.swiper-wrapper -->
          </div><!-- /.swiper -->
        </div><!-- /.l-inner -->

        <div class="p-kv__scrolldown u-scrolldwon"></div><!-- /.p-kv__scrolldown -->
      </div><!-- /.p-kv -->
<?php else: ?>
<!-- lower lv -->
        <div class="p-lower-kv">
          <div class="p-lower-kv__inner l-inner">
            <h1 class="c-sect-ttl">
              <span class="c-sect-ttl__dot"></span>
              <span class="c-sect-ttl__en u-each-txt-anime"><?php echo get_main_title(); ?></span>
              <span class="c-sect-ttl__jp u-each-txt-anime">事業内容</span><!-- /.c-sect-ttl__jp -->
            </h1><!-- /.c-sect-ttl -->
<?php if ( !is_home() ): ?>
            <div class="p-lower-kv__hero"><?php echo get_main_image(); ?></div>
<?php endif; ?>
            <!-- /.p-lower-kv__hero -->
          </div><!-- /.l-inner -->
        </div><!-- /.p-lower-kv -->

<?php endif; ?>
    </div><!-- /.p-header__kv -->
  </header><!-- /.l-header -->

<?php if (function_exists('bcn_display')) : ?>
  <div class="p-breadcrumb">
    <?php bcn_display(); ?>
  </div><!-- /.p-breadcrumb -->
<?php endif; ?>

  <main class="l-main">