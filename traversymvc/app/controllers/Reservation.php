<?php
class Reservation extends Controller {
  private $postModel;
  
  
  public function __construct(){

    $this->postModel = $this->model('croisiereM');
    
  }



  public function reservation($id_res,$id_client,$ichamber,$date,$id_crous){

   $query="INSERT INTO `reservation` (`id_reservation`, `id_client`, `id_chambre`, `date_reseravation`, `prix_reservation`, `id_croisiere`) VALUES (NULL, '1', '1', '11-11-11', '1233', '135');"
    $qury="SELECT  COUNT(*)FROM reservation WHERE reservation.id_croisiere=135 "
  }





}