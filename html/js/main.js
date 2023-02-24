// ページ内リンクスクロール
$('#page-link a[href*="#"]').click(function () {//全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
	var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
	var pos = $(elmHash).offset().top;	//idの上部の距離を取得
	$('body,html').animate({scrollTop: pos}, 400); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
	return false;
});

// // ページトップボタン
// $('#page-top-sp').click(function () {
//     $('body,html').animate({
//         scrollTop: 0//ページトップまでスクロール
//     }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
//     return false;//リンク自体の無効化
// });

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
    $("#g-nav").next().slideToggle(100);
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

// 特別プラン
$(function(){
    $('.slick').slick({
        autoplay: true,
        dots: false,
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
/**breakepointなし */
$(function(){
    $('.slick-sp-pc').slick({
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
    });
});

// 心揺さぶる体験
$(function(){
    $('.slick_exp').slick({
        autoplay: true,//自動的に動き出すか。初期値はfalse。
        infinite: true,//スライドをループさせるかどうか。初期値はtrue。
        speed: 600,//スライドのスピード。初期値は300。
        autoplaySpeed:8000,
        slidesToShow: 1,//スライドを画面に3枚見せる
        slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
        prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
        nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
        centerMode: true,//要素を中央ぞろえにする
        variableWidth: true,//幅の違う画像の高さを揃えて表示
        dots: true,//下部ドットナビゲーションの表示
        dotsClass: "slick_exp-dots",
    });
});

// 熊野の過ごし方
// // スムーススクロール
// $(function(){
//     $('a[href^="#"]').click(function(){
//     var href= $(this).attr("href");
//     var target = $(href == "#" || href == "" ? 'html' : href);
//     var position = target.offset().top;
//     $("html, body").animate({scrollTop:position}, 500);
//     return false;
// });
// });

// 宿泊予約PC
$(".hotel_reserve").hover(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".hotel_reserve_inner").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$(".hotel_reserve_inner a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".hotel_reserve").removeClass('active');//ボタンの activeクラスを除去し
    $(".hotel_reserve_inner").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});
// 宿泊予約SP
$(".pre_collab_stayplan").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".hotel_reserve_inner_sp").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$(".hotel_reserve_inner_sp a").scroll(function () {//ナビゲーションのリンクがクリックされたら
    $(".pre_collab_stayplan").removeClass('active');//ボタンの activeクラスを除去し
    $(".hotel_reserve_inner_sp").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});

// パララックス
var image = document.getElementsByClassName('parallax');
new simpleParallax(image, {
	scale: 1.3,
    delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});

$(function () {
    $(window).scroll(function () {
        const windowHeight = $(window).height();
        const scroll = $(window).scrollTop();

        $('.fadein').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 200) {
            $(this).addClass("is-fadein");
        }
        });
    });
});