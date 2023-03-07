<?php
  class croisiereM  {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function getcro(){
   $stmt= $this->db->query("SELECT * FROM croisiere ");
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function addcroos($nb_nuits,$image,$navire,$port,$name ,$date,array $chekport ){
    //  $stmt=$this->db->query("INSERT INTO `croisiere`(`id_croisiere`, `nb_nuits`, `image`, `navire`, `port`) VALUES (':id',':nb_nuits',':image',':navire',':port')");
    $sql= "INSERT INTO `croisiere`(`nb_nuits`, `image`, `navire`, `port_de_depart`, `name`,`datee`) VALUES (:nb_nuits,:image,:navire,:port,:name,:date)";
      $stmt=$this->db->query($sql);
      $stmt->bindValue(':nb_nuits',$nb_nuits,PDO::PARAM_INT);
      $stmt->bindValue(':image',$image,PDO::PARAM_STR);
      $stmt->bindValue(':navire',$navire,PDO::PARAM_INT);
      $stmt->bindValue(':port',$port,PDO::PARAM_STR);
      $stmt->bindValue(':name',$name,PDO::PARAM_STR); 
      $stmt->bindValue(':name',$date,PDO::PARAM_STR); 

        // var_dump($sql);
        //     die;
      //  $stmt->execute();
      if ($stmt->rowCount() > 0) {
       return true;
    } else {
        return false;
    }
      // $this->db->bindParam(':value1', $nb_nuits);
      


    }

  }