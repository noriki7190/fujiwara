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