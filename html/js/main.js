$(function testFunc(callback){
    //読み込みが完了したら実行する
    $(window).on('load',function(){
    //ローディングアニメーションをフェードアウト
    $('#loader').delay(600).fadeOut(600);
});
    //セットタイムアウトを使って、読み込み完了の0.8秒後にfadeIn実施
    
    setTimeout(function(){
        $('#loader').fadeOut(500);
    },800);
    setTimeout(function (){
        
    var wHeight = $(document).height();
    var scrollAmount = $(document).scrollTop();
    
    // フェードインアニメーション
    $('.fv_fadein').each(function () {
        var targetPosition = $(this).offset().top;
        console.log(targetPosition);
        if(scrollAmount > targetPosition - wHeight + 200) {
            $(this).addClass("fv_is-fadein");
        }
        
        });
        },800);
    });


// // ローディング
// $(function (){
//     //読み込みが完了したら実行する
//     $(window).on('load',function(){
//     //ローディングアニメーションをフェードアウト
//     $('#loader').delay(600).fadeOut(600);

//     //セットタイムアウトを使って、読み込み完了の0.8秒後にfadeIn実施
//     setTimeout(function(){
//     var wHeight = $(document).height();
//     var scrollAmount = $(document).scrollTop();
    

//     // フェードインアニメーション
//     $('.fv_fadein').each(function () {
//         var targetPosition = $(this).offset().top;
//         console.log(targetPosition);
//         if(scrollAmount > targetPosition - wHeight + 200) {
//             $(this).addClass("fv_is-fadein");
//         }
//         });
//             //  //ページの読み込みが完了してなくても3秒後にアニメーションを非表示にする
//             // setTimeout(function(){
//             //     $('#loader').fadeOut(600);
//             //     },3000);
//         },800);
//     });
// });

// // ローディング
// $(function(){
//     //読み込みが完了したら実行する
//     $(window).on('load',function(){
//       //ローディングアニメーションをフェードアウト
//       $('#loader').delay(600).fadeOut(600);
//   });
//     //ページの読み込みが完了してなくても3秒後にアニメーションを非表示にする
//     setTimeout(function(){
//       $('#loader').fadeOut(600);
//     },3000);
//   });

// スムーススクロール
$(function(){
    $('a[href^="#"]').click(function(){
    var href= $(this).attr("href");
    var speed = 1100;
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, 'swing');
    return false;
});
});



// ハンバーガーメニュー
$(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $("#g-nav").next().slideToggle(100);
});

$(".nav_sub a").click(function () {//ナビゲーションのリンクがクリックされたら
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
              breakpoint: 768, // 500px未満で・・・
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
/**breakepointなし slick-dotsなし */
$(function(){
    $('.slick_dots_none').slick({
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

// // 宿泊予約PC
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
	scale: 1.1,
    delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});
// パララックス大きい動き
var image = document.getElementsByClassName('parallax_l');
new simpleParallax(image, {
	scale: 1.2,
    delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});
// フェードイン
$(window).on('scroll',function () {
    const windowHeight = $(window).height();
    const scroll = $(window).scrollTop();

    $('.fadein').each(function () {
    const targetPosition = $(this).offset().top;
    if (scroll > targetPosition - windowHeight + 0) {
        $(this).addClass("is-fadein");
    }
    });
}).trigger('scoll');
// お食事のご案内ぺージ　縦書き文字一行ずつフェードイン
$(function(){
    $('.vertical_text p') 
    .css({opacity:0})
    .each(function(i){
        $(this).delay(500 * i).animate({opacity:1}, 1500);
    })
})
// // fvフェードイン
// $(function(){
//     var wHeight = $(document).height();
//     var scrollAmount = $(document).scrollTop();

//     // フェードインアニメーション
//     $('.fv_fadein').each(function () {
//         var targetPosition = $(this).offset().top;
//         console.log(targetPosition);
//         if(scrollAmount > targetPosition - wHeight + 200) {
//             $(this).addClass("fv_is-fadein");
//         }
//     });

// });

// モーダルウィンドウ
//モーダル表示
$(".modal-open").modaal({
start_open:false, // ページロード時に表示するか
overlay_close:true,//モーダル背景クリック時に閉じるか
before_open:function(){// モーダルが開く前に行う動作
    $('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
},
after_close:function(){// モーダルが閉じた後に行う動作
    $('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
}
});