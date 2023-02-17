
// ボタンを表示させる
// window.addEventListener("scroll", scroll_event);
// function scroll_event(){
//     if(window.pageYOffset > 100){
//         pagetopBtn.style.opacity = "1";
//     }else if (window.pageYOffset < 100){
//         pagetopBtn.style.opacity = "0";
//     }
// }



// ハンバーガーメニュー
$(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

// 特別プラン
$(function(){
    $('.slick').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 1500,
        slidesToShow: 3,
        centerMode: true,
        variableWidth: true,
        initialSlide:5,
        autoplaySpeed:1500,
        arrows:false,             //追加（矢印非表示
        responsive: [
            {
              breakpoint: 767, // 500px未満で・・・
              settings: "unslick", // スライダーを無効
            },
        ],
        
    });
});

// 心揺さぶる体験
$(function(){
    $('.slick_exp').slick({
        autoplay: true,//自動的に動き出すか。初期値はfalse。
        infinite: true,//スライドをループさせるかどうか。初期値はtrue。
        speed: 1100,//スライドのスピード。初期値は300。
        autoplaySpeed:1700,
        slidesToShow: 1,//スライドを画面に3枚見せる
        slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
        prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
        nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
        centerMode: true,//要素を中央ぞろえにする
        variableWidth: true,//幅の違う画像の高さを揃えて表示
        dots: true,//下部ドットナビゲーションの表示
        dotsClass: "slick_exp-dots",
        asNavFor:".text-slider"
    });
});
$(function(){
    $('.text-slider').slick({
        speed: 1100,//スライドのスピード。初期値は300。
        infinite: true,//スライドをループさせるかどうか。初期値はtrue。
        dots: false,//下部ドットナビゲーションの表示
        draggable:false,         //追加（ドラッグでのスライド禁止
        arrows:false             //追加（矢印非表示
    });
});
// アンカーリンク内リンクスクロール
$(function () {
    var animeSpeed = 80;
    $("a[href^='#']").on({
        "click":function(){
            var href = $(this).attr("href");
            var target = $(href == "#" || href === "" ? "html" : href); 
            var position;
            position = target.offset().top;
            $("body, html").stop().animate({
                scrollTop:position
            },animeSpeed, 'swing');
            return false;
        }
    });
});
// ページトップ
$(function(){
    var pagetop = $('#page-top, #page-top-sp');
    var backSpeed = 100;
    var position;
    position = $("html, body")

    pagetop.click(function() {
        $("html,body").animate({scrollTop: 0},backSpeed );
    });
});