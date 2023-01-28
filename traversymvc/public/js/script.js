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

// var card =listcros[1].parentNode.parentNode.parentElement;
// let test=listcros[1].parentNode.parentNode.children[0]
// test.style.backgroundColor = "red";
// console.log(listcros[1].parentNode.parentNode.children[0]);

// card.disabled = true;


listcros.forEach(function(listcros) {
 
  const datecr = new Date(listcros.value);

      var today = new Date();
   var yester2day = new Date(today);
   yester2day.setDate(yester2day.getDate() +2);


   var disble=false;
  
   if( yester2day> datecr){
    disble=true;
   }
   if(disble){
  
    var card =listcros.parentNode.parentNode.parentElement;
    // card.style.display="false"
    // card.style.display = "none"
    console.log(card);
    card.style.backgroundColor = "#5d6673";
   
    let topcard=listcros.parentNode.parentNode.children[2].children[2].children[0]
  topcard.disabled = true;
  console.log(topcard)
    
    // let mid=listcros.parentNode
    // mid.style.backgroundColor = "black";
             


    
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

 
