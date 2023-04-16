(function ($) {
  //
  // 【オリジナルイベント】スクロール量に応じて以下のイベントが呼ばれます。
  //
  // 100px以上へ : scrollOver100px
  // 100px以内へ : scrollInner100px
  //
  $(window).scroll(function () {
    const scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $(window).trigger('scrollOver100px');
    } else {
      $(window).trigger('scrollInner100px');
    }
  });

  window.addEventListener('load', function () {
    pageTop();
    popUpAd();
    requestForm();
  });

  function requestForm() {
    $('.form-open-btn').click(function () {
      $('.form-area').addClass('isShow');
      $('body').addClass('isNotScroll');
    });

    $('.back-btn').click(function () {
      $('.form-area').removeClass('isShow');
      $('body').removeClass('isNotScroll');
    });
  }

  function pageTop() {
    // #page-topについているUpMoveというクラス名を付与
    function showPageTop() {
      $('#page-top').addClass('UpMove');
    }

    // #page-topについているUpMoveというクラス名を付与
    function hiddenPageTop() {
      $('#page-top').removeClass('UpMove');
    }

    $(window).on('scrollOver100px', () => {
      showPageTop();
    });

    $(window).on('scrollInner100px', () => {
      hiddenPageTop();
    });

    $('#page-top').click(function () {
      $(this).addClass('floatAnime'); //クリックしたらfloatAnimeというクラス名が付与
      $('body,html').animate(
        {
          scrollTop: 0,
        },
        2000,
        function () {
          //スクロールの速さ。数字が大きくなるほど遅くなる
          $('#page-top').removeClass('floatAnime'); //上までスクロールしたらfloatAnimeというクラス名を除く
        }
      );

      return false; //リンク自体の無効化
    });
  }

  function popUpAd() {
    let isShow = true;

    function showpopUpAd() {
      if (!isShow) return;

      $('.news-popup').addClass('isActive');
    }

    function hiddenpopUpAd() {
      $('.news-popup').removeClass('isActive');
    }

    $(window).on('scrollOver100px', () => {
      const scroll = $(window).scrollTop();

      let service;
      let support;
      if ($('.service').length) {
        service = $('.service').offset().top;
        support = $('.support').offset().top;
      }
      const windowH = $(window).height();

      if (scroll >= service - windowH && scroll <= support - windowH) {
        hiddenpopUpAd();
      } else {
        showpopUpAd();
      }
    });

    $(window).on('scrollInner100px', () => {
      hiddenpopUpAd();
    });

    $('.news-popup__close').click(function () {
      isShow = false;
      hiddenpopUpAd();
    });
  }
})(jQuery);
