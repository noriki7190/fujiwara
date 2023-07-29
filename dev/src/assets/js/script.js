jQuery(function ($) {
  // アコーディオンメニュー
  $('.js-accordion').on('click', function () {
    console.log('click')
    $(this).toggleClass('is-open');
    $(this).next().slideToggle();
  });

  // ドロワー
  var drawer = $("#js-drawer-icon");
  drawer.on("click", function () {
    drawer.toggleClass("is-open");
    $("#js-drawer").toggleClass("is-open");
    // $("#js-drawer").show();
  });
});