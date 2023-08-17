new LuminousGallery(document.querySelectorAll(".luminous"));

const swiper_kv = new Swiper("#swiper-kv", {
  loop: true, // ループさせる
  parallax: true, // パララックスさせる
  // allowTouchMove: false, // マウスでのスワイプを禁止
  speed: 1500, // 少しゆっくり(デフォルトは300)
  autoplay: { // 自動再生
    delay: 2000, // 2秒後に次のスライド
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    reverseDirection: true,
  },
  // effect: 'coverflow',

  effect: "creative",
  creativeEffect: {
    prev: {
      // 前のスライドのZ軸（奥行）対して(-400px)を設定しています
      translate: [0, 0, 0],
    },
    next: {
      // 次のスライドのX軸（左右）対して(100%)を設定しています
      translate: ["100%", 0, 1],
    },
  },
});

const swiper_loop = new Swiper('#swiper-loop', {
  loop: true, // ループ有効
  slidesPerView: 5, // 一度に表示する枚数
  speed: 6000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  spaceBetween: 40,
  loopAdditionalSlides: 5,
  slidesPerView: 5,
  height: 280,
  autoplay: {
    delay: 0, // 途切れなくループ
  },
});

// ローディング
// document.querySelector('#js-loading-logo').animate(
//   [
//     { opacity: 1 },
//     { opacity: 0 }
//   ],
//   {
//     duration: 3000,
//     fill: 'forwards'
//   }
// );

jQuery(function ($) {
  // アコーディオンメニュー
  $('.js-accordion').on('click', function () {
    // console.log('click')
    $(this).toggleClass('is-open');
    $(this).next().slideToggle();
  });

  // メガメニュー
  // const $megaMenu = $("#js-mega");
  $('#js-mega').hover(function () {
    console.log('hover');
    // $(this).find('.p-mega__body').stop().slideDown();
    // alert('hover');
    $(this).addClass('is-show');
  }, function () {
    $(this).removeClass('is-show');
  });

  // スムーススクロール
  let header = $(".p-header__inner").innerHeight() + 40;
  // console.log(header);
  $('a[href^="#"]').on('click', (function () {
    // let header = $(".p-header__inner").innerHeight() + 40;
    console.log(header);
    let speed = 300;
    let id = $(this).attr("href");
    let target = $("#" == id ? "html" : id);
    let position = 0;
    if (id != '#') {
      position = $(target).offset().top - header;
    };
    $("html, body").animate(
      {
        scrollTop: position
      },
      speed
    );
    return false;
  }));



  // ドロワー
  var drawer = $("#js-drawer-btn");
  drawer.on("click", function () {
    drawer.toggleClass("is-open");
    $("#js-drawer").toggleClass("is-open");
    $("header").toggleClass("is-open");
    // $("#js-drawer").show();
  });

  // scroll
  $(window).on('load scroll resize', function () {
    const scrollTop = $(window).scrollTop(); // スクロールの位置を取得
    if ($('#js-parallax').length) {
      let showImgPosition = $('#js-parallax').offset().top; // 表示する画像の位置を取得
      // console.log(showImgPosition);
      const showClass = 'is-show';

      if (scrollTop >= showImgPosition - 1000) {
        $('#js-parallax').addClass(showClass);
        // console.log('show');
      } else {
        $('#js-parallax').removeClass(showClass);
        // console.log('no-show');
      }
    }

    // works-detail
    if (document.URL.match('/works-detail')) {
      // const overviewPosition = $("#a-overview").offset();
      const galleryPosition = $("#a-gallery").offset().top - 200;
      const constructionPosition = $("#a-construction").offset().top - 200;
      const current = 'is-current';
      // console.log('overview position:', overviewPosition, 'gallery position:' , galleryPosition, 'construction position:' , constructionPosition);
      // overview
      if (scrollTop <= galleryPosition) {
        $('#js-detailNavOverview').addClass(current);
      } else {
        $('#js-detailNavOverview').removeClass(current);
      }
      // gallery
      if (scrollTop >= galleryPosition & scrollTop < constructionPosition) {
        // console.log('gallery');
        $('#js-detailNavGallery').addClass(current);
      } else {
        $('#js-detailNavGallery').removeClass(current);
      }
      // construction
      if (scrollTop >= constructionPosition) {
        $('#js-detailNavConstruction').addClass(current);
      } else {
        $('#js-detailNavConstruction').removeClass(current);
      }
      //works-detail カーソルを画像にする
      const cursor = $('.js-cursor');
      const hoverTarget = $('.p-works-detail-contents-category-link__link');
      hoverTarget.hover(
        function () {
          $(document).on("mousemove", function (e) { // マウスカーソルが動いた時に実行
            var x = e.clientX;                      // カーソルの横座標を取得
            var y = e.clientY;                      // カーソルの縦座標を取得

            //  取得した座標をCSSに反映させる
            cursor.css({
              "top": y - 240 / 2 + "px",
              "left": x - 280 / 2 + "px"
            });
          });
        },
        function () {

        }
      );
    } //if works-detail
  });

  // eachTextAnimeにappeartextというクラス名を付ける定義
  function EachTextAnimeControl() {
    $('.u-each-txt-anime').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("appeartext");

      } else {
        $(this).removeClass("appeartext");
      }
    });

  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {

    //spanタグを追加する
    var element = $(".u-each-txt-anime");
    element.each(function () {
      var text = $(this).text();
      var textbox = "";
      text.split('').forEach(function (t, i) {
        if (t !== " ") {
          if (i < 10) {
            textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
          } else {
            var n = i / 10;
            textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
          }

        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
    });

    EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
});
