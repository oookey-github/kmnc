// ページ内リンクスクロール
$('#page-link a[href*="#"]').click(function () {//全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
	var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
	var pos = $(elmHash).offset().top;	//idの上部の距離を取得
	$('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
	return false;
});

// ページトップボタン
const pagetopBtn = document.querySelector('.page-top');
pagetopBtn.addEventListener('click',  function(){
    window.scrollTo({
        top:0,
        behavior: "smooth"
    })
})
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