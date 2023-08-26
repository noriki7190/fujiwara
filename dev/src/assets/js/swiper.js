const swiper1 = new Swiper('#swiper-work', {
  // Optional parameters
  // // loop: true,
  // loopAdditionalSlides: 6,
  // slidesPerView: 3,
  width: 360,
  spaceBetween: 40,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    type: "fraction",
    // 数字を一桁の場合頭に０を追加する
    formatFractionCurrent: function (number) {
      if (number < 10) {
        return '0' + number;
      } else {
        return number;
      }
    },
    formatFractionTotal: function (number) {
      if (number < 10) {
        return '0' + number;
      } else {
        return number;
      }
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});



const swiper2 = new Swiper('#loop-img', {
  // Optional parameters
  loop: true,
  loopAdditionalSlides: 4,
  // slidesPerView: 4,
  width: 280,
  spaceBetween: 40,
  speed: 6000, // ループの時間
  autoplay: {
    delay: 0, // 途切れなくループ
  },
});

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

const test_swiper_kv = new Swiper("#test-swiper-kv", {
  loop: true, // ループさせる
  parallax: true, // パララックスさせる
  // allowTouchMove: false, // マウスでのスワイプを禁止
  speed: 1500, // 少しゆっくり(デフォルトは300)
  autoplay: { // 自動再生
    delay: 2000, // 2秒後に次のスライド
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    reverseDirection: true,
  },

  effect: "creative",
  creativeEffect: {
    prev: {
      // 前のスライドのZ軸（奥行）対して(-400px)を設定しています
      translate: [0, 0, -1],
    },
    next: {
      // 次のスライドのX軸（左右）対して(100%)を設定しています
      translate: ["100%", 0, 0],
    },
  },
});