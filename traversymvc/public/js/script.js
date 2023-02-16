const menubtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

 function swprix(){
  var prixcr=document.getElementById('prixcr').value;
   var prixchomber=document.getElementById('prixchomber')
   var pr=prixchomber.options[prixchomber.selectedIndex].dataset.prix;
   console.log(pr)
   var prix=document.getElementById('prix');
   var prixhi=document.getElementById('prixsw');
  prix.value=(parseInt(prixcr)+parseInt(pr));
  console.log(prix.value);
  prix.textContent=prix.value
  prixhi.value=prix.value

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
  console.log("page danevvvvvv");
  console.log(listcros);

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
    console.log(card);
    card.style.backgroundColor = "rgb(93 102 115 / 36%)";
    // card.style.color="red";

   }
   if(disble){
  let topcard=listcros.parentNode.parentNode.children[2].children[2].children[0]
  topcard.style.backgroundColor="red"
  topcard.href="#"    
   }

  
  
});


 

 
})


