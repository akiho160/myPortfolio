'use strict';
const btn1 = document.getElementById('sl1');
const btn2 = document.getElementById('sl2');
const btn3 = document.getElementById('sl3');
const btn4 = document.getElementById('sl4');
const btn5 = document.getElementById('sl5');
btn1.onclick = function () {
  document.getElementById('slider').src = 'top/image/top-slider1.jpg';
  btn1.style.backgroundColor = 'rgba(0,0,0,1)';
  btn2.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn3.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn4.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn5.style.backgroundColor = 'rgba(0,0,0,0.5)';
}
btn2.onclick = function () {
  document.getElementById('slider').src = 'top/image/top-slider2.jpg';
  btn1.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn2.style.backgroundColor = 'rgba(0,0,0,1)';
  btn3.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn4.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn5.style.backgroundColor = 'rgba(0,0,0,0.5)';
}
btn3.onclick = function () {
  document.getElementById('slider').src = 'top/image/top-slider3.jpg';
  btn1.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn2.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn3.style.backgroundColor = 'rgba(0,0,0,1)';
  btn4.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn5.style.backgroundColor = 'rgba(0,0,0,0.5)';
}
btn4.onclick = function () {
  document.getElementById('slider').src = 'top/image/top-slider4.jpg';
  btn1.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn2.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn3.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn4.style.backgroundColor = 'rgba(0,0,0,1)';
  btn5.style.backgroundColor = 'rgba(0,0,0,0.5)';
}
btn5.onclick = function () {
  document.getElementById('slider').src = 'top/image/top-slider5.jpg';
  btn1.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn2.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn3.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn4.style.backgroundColor = 'rgba(0,0,0,0.5)';
  btn5.style.backgroundColor = 'rgba(0,0,0,1)';
}