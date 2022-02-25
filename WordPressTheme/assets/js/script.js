// ローディング判定
jQuery(function ($) {
  jQuery(window).on("load", function () {
    jQuery("body").attr("data-loading", "true");
  });

  jQuery(function () {
    // スクロール判定
    jQuery(window).on("scroll", function () {
      if (100 < jQuery(this).scrollTop()) {
        jQuery("body").attr("data-scroll", "true");
      } else {
        jQuery("body").attr("data-scroll", "false");
      }
    });

    /* ドロワー */
    jQuery(".js-drawer").on("click", function (e) {
      e.preventDefault();
      // alert("test");
      let targetClass = jQuery(this).data("target");
      jQuery("." + targetClass).toggleClass("is-checked");
      jQuery(".p-drawer__menus-wrap").toggleClass("is-open");
      jQuery(".p-drawer__menus-wrap").fadeToggle();
      return false;
    });

    /* スムーススクロール */
    jQuery('a[href^="#"]').click(function () {
      let header = jQuery(".js-header").height();
      let speed = 300;
      let id = jQuery(this).attr("href");
      let target = jQuery("#" == id ? "html" : id);
      let position = jQuery(target).offset().top - header;
      if ("fixed" !== jQuery("#header").css("position")) {
        position = jQuery(target).offset().top;
      }
      if (0 > position) {
        position = 0;
      }
      jQuery("html, body").animate(
        {
          scrollTop: position,
        },
        speed
      );
      return false;
    });

    /* 電話リンク */
    let ua = navigator.userAgent;
    if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
      jQuery('a[href^="tel:"]')
        .css("cursor", "default")
        .on("click", function (e) {
          e.preventDefault();
        });
    }

    /* slickスライダー */
    jQuery(".js-slider").slick({
      fade: true,
      dots: true,
      slidesToShow: 1,
      speed: 800,
    });
  });

  jQuery(".js-staff-slider").slick({
    autoplay: true, //自動でスクロール
    autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
    speed: 10000, //スライドが流れる速度を設定
    cssEase: "linear", //スライドの流れ方を等速に設定
    slidesToShow: 3, //表示するスライドの数
    swipe: false, // 操作による切り替えはさせない
    arrows: false, //矢印非表示
    pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
    infinite: true, //スライドのループを有効にする
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
});
