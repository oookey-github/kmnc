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