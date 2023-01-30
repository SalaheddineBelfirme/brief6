const menubtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

 function swprix(){
  var prixcr=document.getElementById('prixcr').value;
   var prixchomber=document.getElementById('prixchomber').value;
   var prix=document.getElementById('prix');
  prix.value=(parseInt(prixcr)+parseInt(prixchomber))
  console.log(prix.value)
  prix.textContent=prix.value
 }

function save(event){

 var   prixchomber=document.getElementById('prixchomber').value;
 var   IdCr=document.getElementById('idcr').value;
 if(prixchomber="100"){
  $.ajax({
    type: "GET",
    url: "http://localhost/CureCoj/traversymvc/categorie/getcategorie/",
    success: function (resolt){
console.log("count ")
    }

  });
 }
}

document.addEventListener("DOMContentLoaded",()=>{

  var listcros = document.querySelectorAll(".croses");
  console.log("page dane");
  



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

    console.log(disble);
    var card =listcros.parentNode.parentNode.parentElement;
    // card.style.display="false"
    // card.style.display = "none"
   
    console.log(card);
    card.style.backgroundColor = "#5d6673";
    card.style.color="red";

   }
   if(disble){
  let topcard=listcros.parentNode.parentNode.children[2].children[2].children[0]
  topcard.style.backgroundColor="red"
  topcard.href="#"    
   }

   console.log("next");
  
});


 

 
})




//  const today = datecr.getDate();
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

 
