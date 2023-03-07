<?php
session_start();
class Reservation extends Controller {
  private $postModel;
  
  
  public function __construct(){

    $this->postModel = $this->model('ResrvationM');
    
  }



  public function reservation(){
    if(isset($_SESSION['log']) || $_SESSION['log']!=null ){
      if(isset($_POST["btnResereve"])){
      
        $id_chambre=$_POST['chombercr'];
        $id_client= $_SESSION['log'][0]->id_user;
            
        $date_reseravation= date("Y-m-d") ;
        $prix_reservation=$_POST['prixhi'];
        $id_croisiere=$_POST['idCR'];

       
        $rv=new ResrvationM();
     $bol=$rv->AddReservation($id_client,$id_chambre,$date_reseravation,$prix_reservation,$id_croisiere);
    
        if($bol==true){
          header("Location: http://localhost/brief6/traversymvc/pages/resvarstion");
        }
        else{
          echo $bol;
        }
      
      }
       

    }
    else{
      header("Location: http://localhost/brief6/traversymvc/pages/login");
    }
   
 
  }


  public function deleteResrvation($id){
    $rv=new ResrvationM();
   $bol= $rv->DeleteReservation($id);
   echo("dazzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz :".$bol);
 
   header("Location: http://localhost/brief6/traversymvc/pages/resvarstion");

  }




}