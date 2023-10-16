/*menu bar */
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
 menuIcon.onclick = () =>{
 menuIcon.classList.toggle('bx-x');
 navbar.classList.toggle('active');
 }

window.onscroll = () =>{


/* -----sticky Navbar------*/
let header = document.querySelector('.header');
header.classList.toggle('sticky', window.scrollY >100);
// menubar remove
menuIcon.classList.remove('bx-x');
navbar.classList.remove('active');
}

/* -----Swiper------*/
