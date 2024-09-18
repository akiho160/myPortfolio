'use strict';

// buttonを取得
const top_btn=document.querySelector('.topBtn');
// footerを取得
const footer = document.querySelector("footer");
// windowの高さを取得
const window_height = window.innerHeight;
// ブラウザの上端からフッターまでの距離を取得
const distance = footer.offsetTop;

window.addEventListener('scroll',()=>{
  // スクロールの高さを取得
  let scroll_Y =window.scrollY;
  if(scroll_Y>=300){
    // 300スクロールしたらボタン表示
    top_btn.classList.add('btnActive');
  }else{
    // topに戻ったら消える
    top_btn.classList.remove('btnActive');
  }
  // footer上部でボタンのスクロール止まる
  if(scroll_Y >= (distance - window_height)){
    top_btn.classList.add('btnAbsolute');
  }else{
    top_btn.classList.remove('btnAbsolute');
  }
});
