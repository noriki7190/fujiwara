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
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>藤原建設工業 | 架空の建設会社</title>

  <meta name="description" content="架空の建設会社 デザインカンプからのコーディング">
</head>

<body>
  <header class="l-header">
    <div class="p-header">
      <div class="p-header__inner">


        <h1 class="p-header__logo"><a href="/"><img src="./assets/img/logo.png" alt="fuji construction industry"></a>
        </h1>
        <!-- /.p-header__logo -->

        <div class="p-header__right">
          <nav class="p-header__nav p-global-nav">
            <ul class="p-global-nav__list">
              <li class="p-global-nav__item">
                <a href="/" class="p-global-nav__link">home</a><!-- /.p-global-nav__link -->
              </li><!-- /.p-global-nav__item -->
              <li class="p-global-nav__item">
                <a href="company.html" class="p-global-nav__link">company</a><!-- /.p-global-nav__link -->
              </li><!-- /.p-global-nav__item -->
              <li class="p-global-nav__item">
                <a href="service.html" class="p-global-nav__link">service</a><!-- /.p-global-nav__link -->
              </li><!-- /.p-global-nav__item -->
              <li class="p-global-nav__item">
                <a href="works.html" class="p-global-nav__link">works</a><!-- /.p-global-nav__link -->
              </li><!-- /.p-global-nav__item -->
              <li class="p-global-nav__item">
                <a href="news.html" class="p-global-nav__link">news</a><!-- /.p-global-nav__link -->
              </li><!-- /.p-global-nav__item -->
            </ul><!-- /.p-global-nav__list -->
          </nav><!-- /.p-header__nav -->

          <div class="p-header__btns">
            <div class="c-nav-btn">
              <a href="" class="c-nav-btn__link">recruit</a><!-- /.p-nav__btn -->
            </div><!-- /.c-nav-btn -->
            <div class="c-nav-btn c-nav-btn--secondary">
              <a href="" class="c-nav-btn__link">contact</a><!-- /.p-nav__btn -->
            </div><!-- /.p-header-btn -->
          </div><!-- /.p-header__btns -->
        </div><!-- /.p-header__right -->

        <div class="p-drawer-icon ">
          <button class="p-drawer-btn" id="js-drawer-icon">
            <span class="p-drawer-btn__inline"></span>
          </button><!-- /.p-burger-icon -->
        </div><!-- /.p-drawer-icon -->
        <div class="p-drawer" id="js-drawer">
          <div class="p-drawer__bg"></div><!-- /.p-drawer__bg -->
          <div class="p-drawer__body">
            <nav class="p-drawer__nav">
              <ul class="p-drawer-nav__list">
                <li class="p-drawer-nav__item">
                  <a href="/home" class="p-drawer-nav__link">home</a><!-- /.p-drawer-nav__link -->
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
                  <a href="" class="c-nav-btn__link">recruit</a><!-- /.p-nav__btn -->
                </div><!-- /.c-nav-btn -->
                <div class="c-nav-btn c-nav-btn--secondary">
                  <a href="" class="c-nav-btn__link">contact</a><!-- /.p-nav__btn -->
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


    <div class="p-header__kv">
      <div class="p-lower-kv">
        <div class="p-lower-kv__inner l-inner">
          <h1 class="p-lower-kv__ttl c-sect-ttl">Company<span>会社情報</span></h1><!-- /.p-lower-kv__ttl -->
          <div class="p-lower-kv__hero"><img src="./assets/img/company/hero_company_img.jpg" alt=""></div>
          <!-- /.p-lower-kv__hero -->
        </div><!-- /.l-inner -->
      </div><!-- /.p-kv -->
    </div><!-- /.p-header__kv -->
  </header><!-- /.l-header -->

  <div class="p-breadcrumb">
    <!-- パンくず -->
    TOP -- 会社情報
  </div><!-- /.p-breadcrumb -->

  <main class="l-main">
    <section class="p-company-message">
      <div class="p-company-message__inner l-inner">
        <h2 class="p-company-message__ttl c-sect-ttl-level2">Message<span>メッセージ</span></h2>
        <!-- /.p-company-message__ttl -->
        <figure class="p-company-message__img">
          <!-- TODO: imgの位置調整 -->
          <img src="./assets/img/company/24005143_l.jpg" alt="藤原社長">
        </figure><!-- /.p-company-message__img -->
        <div class="p-company-message__contents">
          <div class="p-company-message__lead">過去と未来を繋ぎ続ける</div><!-- /.p-company-message__lead -->
          <div class="p-company-message___text">
            これまでの実績を築き上げてきた挑戦と経験を、未来のお客さまへ繋いでいくことをテーマにして日々のお仕事に励んでいます。<br>「過去と未来を繋ぎ続ける」そんな建設会社を目指す技術集団が、藤原建設工業株式会社です。<br><br>藤原建設工業株式会社　代表取締役社長<br>藤原
            ◯◯
          </div><!-- /.p-company-message___text -->
        </div><!-- /.p-company-message__contents -->
      </div><!-- /.l-inner -->
    </section><!-- /.p-company-message -->

    <section class="p-company-information">
      <div class="p-company-information__inner l-inner">
        <h2 class="p-company-information__ttl c-sect-ttl-level2">Information<span>会社概要</span></h2>
        <div class="p-company-information__description">
          <dl class="p-description-list">
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">会社名</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">藤原建設工業株式会社</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">設立</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">昭和54年（1979年）4月12日</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">資本金</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">2110万円</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">代表取締役</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">藤原 ◯◯</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">本社</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">千葉県</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">支店</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">福島県</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">売上高</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">21億1千万円</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">事業内容</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">土木工事業、建築工事業、住宅事業</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-information__row -->
          </dl><!-- /.p-company-information__list -->
        </div><!-- /.p-company-information__description -->
      </div><!-- /.p-company-information__inner l-inner -->
    </section><!-- /.p-company-information -->

    <section class="p-company-access">
      <div class="p-company-access__inner l-inner">
        <h2 class="p-company-access__ttl c-sect-ttl-level2">Access<span>アクセス</span></h2>
        <div class="p-company-access__description">
          <div class="p-company-access__map">
            <figure class="p-company-access__map-logo"><img src="./assets/img/map_icon.png" alt="マップロゴ"></figure>
            <!-- /.p-company-access__map-logo -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12968.870567212025!2d140.0231040796481!3d35.64700908332206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022821fd52ebfdf%3A0xcec0c09c4bed45e0!2z5bmV5by144Oh44OD44K7!5e0!3m2!1sja!2sjp!4v1690000956953!5m2!1sja!2sjp"
              width="680" height="382" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- /.p-company-access__map -->

          <dl class="p-description-list">
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">住所</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">〒000-0000<br>千葉県◯◯市◯◯丁目◯◯番</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-access__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">電話番号</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">00-0000-0000</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-access__row -->
            <div class="p-description-list__row">
              <dt class="p-description-list__dt">アクセス</dt><!-- /.p-description-list__dt -->
              <dd class="p-description-list__dd">幕張メッセから徒歩1分</dd><!-- /.p-description-list__dd -->
            </div><!-- /.p-company-access__row -->
          </dl><!-- /.p-company-access__list -->
        </div><!-- /.p-company-access__description -->
      </div><!-- /.p-company-access__inner l-inner -->
    </section><!-- /.p-company-access -->

  </main><!-- /.l-main -->

  <footer class="l-footer">
    <!-- 下層ページのみ -->
    <div class="p-footer-links">
      <div class="p-footer-links__item p-footer-links__item--contact">
        <a href="contact.html" class="p-footer-links__link">
          Contact<span>お問い合わせ</span>
        </a><!-- /.p-footer-links__link -->
      </div><!-- /.p-footer-links__item -->
      <div class="p-footer-links__item p-footer-links__item--recruit">
        <a href="recruit.html" class="p-footer-links__link">
          Recruit<span>採用情報</span>
        </a><!-- /.p-footer-links__link -->
      </div><!-- /.p-footer-links__item -->
    </div><!-- /.p-footer-links -->

    <div class="p-footer">
      <div class="l-inner">
        <div class="p-footer__contents">
          <nav class="p-footer__nav p-footer-nav">
            <ul class="p-footer-nav__list">
              <li class="p-footer-nav__item"><a href=""
                  class="p-footer-nav__link">company</a><!-- /.p-footer-nav__link --></li>
              <!-- /.p-footer-nav__item -->
              <li class="p-footer-nav__item"><a href=""
                  class="p-footer-nav__link">service</a><!-- /.p-footer-nav__link --></li>
              <!-- /.p-footer-nav__item -->
              <li class="p-footer-nav__item"><a href=""
                  class="p-footer-nav__link">works</a><!-- /.p-footer-nav__link --></li><!-- /.p-footer-nav__item -->
              <li class="p-footer-nav__item"><a href="" class="p-footer-nav__link">news</a><!-- /.p-footer-nav__link -->
              </li><!-- /.p-footer-nav__item -->
              <li class="p-footer-nav__item"><a href=""
                  class="p-footer-nav__link">contact</a><!-- /.p-footer-nav__link --></li>
              <!-- /.p-footer-nav__item -->
              <li class="p-footer-nav__item"><a href=""
                  class="p-footer-nav__link">recruit</a><!-- /.p-footer-nav__link --></li>
              <!-- /.p-footer-nav__item -->
            </ul><!-- /.p-footer-nav__list -->
          </nav><!-- /.p-footer__nav p-footer-nav -->
          <div class="p-footer__logo"><img src="./assets/img/logo_light.png" alt="藤原建設工業"></div>
          <!-- /.p-footer__logo -->
          <address class="p-footer__access p-access">
            <p class="p-access__head">Access</p><!-- /.p-drawer__access -->
            <p class="p-access__info">
              藤原建設工業株式会社 本社<br>〒000-0000 千葉県◯◯市◯◯丁目◯◯番<br>TEL 00-0000-0000
            </p><!-- /.p-drawer__info -->
          </address><!-- /.p-access -->
          <div class="p-footer__bottom">
            <p class="p-footer__privacy"><a href="">Privacy Policy</a></p><!-- /.p-footer-privacy -->
            <small class="p-footer__copyright">© 1995 Fujiwara Construction Industry. Co.,
              Ltd.</small><!-- /.p-footer__copyright -->
          </div><!-- /.p-footer__bottom -->
        </div><!-- /.p-footer__contents -->
      </div><!-- /.l-inner -->
    </div><!-- /.p-footer -->
  </footer><!-- /.l-footer -->

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="./assets/js/swiper.js"></script>
</body>

</html>