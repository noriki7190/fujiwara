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
    const scrollTop = $(window).scrollTop();
    // console.log(scrollTop);
    const showImgPosition = $('#js-parallax').offset().top - 1000;
    // console.log(showImgPosition);
    const showClass = 'is-show';

    if (scrollTop >= showImgPosition) {
      $('#js-parallax').addClass(showClass);
      // console.log('show');
    } else {
      $('#js-parallax').removeClass(showClass);
      // console.log('no-show');
    }
  });
});
