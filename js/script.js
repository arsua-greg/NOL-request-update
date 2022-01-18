$(function () {
  var wsw = window.screen.width;
  if (wsw > 768 && wsw <= 1400) {
    $("head").prepend('<meta name="viewport" content="width=1200">');
  } else if (wsw > 480 && wsw <= 768) {
    $("head").prepend('<meta name="viewport" content="width=768">');
  } else if (wsw <= 480) {
    $("head").prepend('<meta name="viewport" content="width=320">');
  } else {
    $("head").prepend(
      '<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5">'
    );
  }

  $("#f_footer").after('<div id="splash"><div id="splash_text"></div></div>');

  $('a[href^="#"]').on("click", function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, 550, "swing");
    return false;
  });

  $(document).ready(function () {
    //$('html,body').animate({ scrollTop: 0 }, '1');
    if (window.document.body.id === "front") {
      //テキストのカウントアップ+バーの設定
      var bar = new ProgressBar.Line(splash_text, {
        //id名を指定
        easing: "easeInOut", //アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
        duration: 3000, //時間指定(1000＝1秒)
        strokeWidth: 0.2, //進捗ゲージの太さ
        color: "#555", //進捗ゲージのカラー
        trailWidth: 0.2, //ゲージベースの線の太さ
        trailColor: "#bbb", //ゲージベースの線のカラー
        text: {
          //テキストの形状を直接指定
          style: {
            //天地中央に配置
            position: "absolute",
            left: "50%",
            top: "50%",
            padding: "0",
            margin: "-30px 0 0 0", //バーより上に配置
            transform: "translate(-50%,-50%)",
            "font-size": "1.4rem",
            color: "#bec7cb",
          },
          autoStyleContainer: false, //自動付与のスタイルを切る
        },
        step: function (state, bar) {
          bar.setText(Math.round(bar.value() * 100) + " %"); //テキストの数値
        },
      });

      //アニメーションスタート
      bar.animate(1.0, function () {
        //バーを描画する割合を指定します 1.0 なら100%まで描画します
        $("#splash").delay(500).fadeOut(800); //アニメーションが終わったら#splashエリアをフェードアウト
      });
      /*
            setTimeout(function(){
                $("#glitchShow").remove();
                $("#glitchBack").addClass("isShow");
            },3000);

            setTimeout(function(){
                $('.delay').each(function(){
                    $(function(){
                        $('.delayItem').each(function(i){
                            $(this).delay(400*i).queue(function () {
                                $(this).addClass('animated').dequeue();
                            });
                        });
                    });
                });
            },3000);
            */
    }
  });

  $(window).on("scroll resize load", function () {
    $(".setAnime").each(function () {
      var viewPos = $(this).offset().top,
        viewScrollTop = $(window).scrollTop(),
        viewHeight = $(window).height();
      if (viewScrollTop > viewPos - viewHeight + viewHeight / 6) {
        $(this).addClass("animated");
      }
    });
    $(".js-count").each(function () {
      var txtPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > txtPos - windowHeight + windowHeight / 10) {
        $(".js-num", this).numerator({
          easing: "linear", //カウントアップの動き
          duration: 700, //カウントアップの時間
          toValue: $(".js-num", this).attr("data-num"), //カウントアップする数値
        });
        $(this)
          .delay(1400)
          .queue(function () {
            $(".js-num2", this).numerator({
              easing: "linear", //カウントアップの動き
              duration: 120, //カウントアップの時間
              toValue: $(".js-num2", this).attr("data-num"), //カウントアップする数値
            });
          });
      }
    });

    $(".ttl_en").each(function () {
      var txtPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > txtPos - windowHeight + windowHeight / 8) {
        $(this)
          .find("span")
          .each(function (i) {
            $(this)
              .delay(80 * i)
              .queue(function () {
                $(this).addClass("isShow").dequeue();
              });
          });
      }
    });
    $(".delay").each(function () {
      var txtPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > txtPos - windowHeight + windowHeight / 8) {
        $(".delayItem").each(function (i) {
          $(this)
            .delay(400 * i)
            .queue(function () {
              $(this).addClass("animated").dequeue();
            });
        });
      }
    });
  });

  //ナビゲーション
  var $nav = $("#navArea");
  var $btn = $(".toggle_btn");
  var $mask = $("#mask");
  var open = "open"; // class
  // menu open close
  $btn.on("click", function () {
    if ($("#navArea").hasClass("open")) {
      $("#navArea").removeClass("open");
    } else {
      $("#navArea").addClass("open");
    }
  });

  // mask close
  $mask.on("click", function () {
    $nav.removeClass(open);
  });
  $("#navArea a[href]").on("click", function (event) {
    $(".toggle_btn").trigger("click");
  });

  //   $(window).on("scroll", function () {
  //     var scroll = $(window).scrollTop();
  //     if (scroll >= 500) {
  //       $(".sp_gnav_wrap").addClass("isShow");
  //     } else {
  //       $(".sp_gnav_wrap").removeClass("isShow");
  //     }
  //   });

  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      location = "https://no-l.jp/thanks";
    },
    false
  );

  var thanksPage = {
    5: "https://no-l.jp/thanks",
    13: "https://no-l.jp/thanks-tryout",
    452: "https://no-l.jp/thanks-recruit",
    512: "https://no-l.jp/thanks-recruit",
  };
  document.addEventListener(
    "wpcf7mailsent",
    function (event) {
      location = thanksPage[event.detail.contactFormId];
    },
    false
  );
});
