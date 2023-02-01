<?php  
    class  ResrvationM extends Database {
        private $db;

        public function __construct(){
            $this->db = new Database;
         }
     
         public function GetReservation(){
            $stmt= $this->db->query("SELECT * FROM `reservation` ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
       }

         public function AddReservation($id_client,$id_chambre,$date_reseravation,$prix_reservation,$id_croisiere){
                $stmt= $this->db->query(" INSERT INTO `reservation` (`id_reservation`, `id_client`, `id_chambre`, `date_reseravation`, `prix_reservation`, `id_croisiere`) VALUES (NULL,:id_client ,:id_chambre, :date_reseravation,:prix_reservation,:id_croisiere)");
                $stmt->bindValue(':id_client',$id_client,PDO::PARAM_INT);
                $stmt->bindValue(':id_chambre',$id_chambre,PDO::PARAM_INT);
                $stmt->bindValue(':date_reseravation',$date_reseravation,PDO::PARAM_STR);
                $stmt->bindValue(':prix_reservation',$prix_reservation,PDO::PARAM_STR);
                $stmt->bindValue(':id_croisiere',$id_croisiere,PDO::PARAM_INT);
                $stmt->execute();
                if($stmt->RowCount()>0){
                    return true;
                }
                else{
                    return false;
                }
               
                 
         }

          public function DeleteReservation($id){

                    $stmt= $this->db->query("DELETE FROM `reservation` WHERE id_reservation=:id ");
                    $stmt->bindValue(':id',$id_client,PDO::PARAM_INT);
                    $stmt->execute();
                    return $stmt->fetchAll(PDO::FETCH_OBJ);
                  
                    
                     
          }

        //   public function(){
           // $quer="SELECT * FROM `type _chambre` WHERE 1"
            // $quer="  SELECT  * FROM `reservation` r ,`chambre` ch, `type _chambre`   WHERE r.id_chambre=ch.num_chambre  and `type _chambre`.id_ty_chombre=ch.id_ty_chombre  "
        //     $qury="SELECT  COUNT(*)FROM reservation WHERE reservation.id_croisiere=135 "
        //   }
    }

 ?>