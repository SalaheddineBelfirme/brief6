const menubtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');


document.addEventListener("DOMContentLoaded",()=>{

  var listcros = document.querySelectorAll(".croses");
  console.log("ssssssss");

//   var date=new Date()
// const datecr = new Date(listcros[1].value);

// const today = datecr.getDate();
// const currentMonth = datecr.getMonth(); 
// const yaer=datecr.getFullYear();
// console.log(today);
// console.log(currentMonth);
// console.log(yaer);

var card =listcros[1].parentNode.parentNode.parentElement;
console.log(card);
card.style.color="red";
card.backgroundColor = "red";
// card.disabled = true;


listcros.forEach(function(listcros) {
 
  const datecr = new Date(listcros.value);

      var today = new Date();
    console.log(today);
   var yester2day = new Date(today);
   yester2day.setDate(yester2day.getDate() +2);


   var disble=false;
   console.log(datecr);
   console.log(yester2day);
  
   if( yester2day> datecr){
   
    console.log(disble);
    var card =listcros.parentNode.parentNode.parentElement;
    console.log(card);
    card.style.color="red";

   }
   if(disble){
 
    
   
    
   }
  
  


   console.log("next");
  
});


 

 
})




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

 
