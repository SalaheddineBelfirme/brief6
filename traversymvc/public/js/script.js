const menubtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');


 var listcros=document.getElementsByClassName('croses');
 var inputs = document.querySelectorAll("croses").values;
 var elements = document.getElementsByClassName("croses");
//  log(listcros);

elements.forEach(function(element) {
  console.log(element.value);
});
// console.log(elements);
// console.log(elements);
//  console.log(elements[0]);
var date=new Date()
const datecr = new Date('Jul 12 2011');
 const today = datecr.getDate();
const currentMonth = date.getMonth()+1; 
console.log(today);

// menubtn.addEventListener('click',()=>{
//     navbar.classList.toggle('active');
//     menubtn.classList.toggle('fa-times');
// })

// window.onscroll = ()=>{
//     menubtn.classList.remove('fa-times');
//     navbar.classList.remove('active');
// }

// const swiper = new Swiper('.home-slider', {
//     loop: true,
  
//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },

//   });

 
