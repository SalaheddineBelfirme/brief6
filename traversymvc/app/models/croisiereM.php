<?php
<<<<<<< HEAD
  class croisiereM  {
=======
  class croisiereM extends Database {
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

<<<<<<< HEAD
=======
    public function getforfilter($prams=array()){
     echo $prams[2];
     
    
      $qury="SELECT * FROM croisiere c,port p,navire n  WHERE c.navire=n.id_navire  AND c.port_de_depart=p.id_port  and c.id_croisiere in(SELECT id_croisiere FROM prot_croisi WHERE c.id_croisiere=prot_croisi.id_croisi ";
    
      if($prams[1]<>""){
        $qury=sprintf($qury.' AND n.id_navire =%d',$prams[1]);
      }
      if($prams[2]<>""){
        $qury=sprintf($qury.' AND c.datee >"%s"',$prams[2]);

      }
      if($prams[0]<> "" ){
        $qury=sprintf($qury.' AND prot_croisi.id_port=%d',$prams[0]);
      }
      $qury=sprintf($qury.')');
      $stmt= $this->db->query($qury);
      $stmt->execute();

      
      return $stmt->fetchAll(PDO::FETCH_OBJ);
  
       }

    public function getall($port=null,$date=null,$navier=null){
      $qury="SELECT * FROM croisiere c,port p,navire n  WHERE c.navire=n.id_navire  AND c.port_de_depart=p.id_port";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
       }

>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
    public function getcro(){
   $stmt= $this->db->query("SELECT * FROM croisiere ");
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

<<<<<<< HEAD
    public function addcroos($nb_nuits,$image,$navire,$port,$name ,$date,array $chekport ){
    //  $stmt=$this->db->query("INSERT INTO `croisiere`(`id_croisiere`, `nb_nuits`, `image`, `navire`, `port`) VALUES (':id',':nb_nuits',':image',':navire',':port')");
    $sql= "INSERT INTO `croisiere`(`nb_nuits`, `image`, `navire`, `port_de_depart`, `name`,`datee`) VALUES (:nb_nuits,:image,:navire,:port,:name,:date)";
=======
    public function Get3FirstCros(){
      $stmt= $this->db->query("SELECT * FROM croisiere c,port p,navire n  WHERE c.navire=n.id_navire  AND c.port_de_depart=p.id_port LIMIT 3 ");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
       }

    public function deletecro($id){
      $stmt= $this->db->query("DELETE  FROM croisiere where id_croisiere =$id ");
      $stmt->execute();
     if($stmt->rowCount()>0){
      return true;
     }
     else return false;
       }

    
    public function addcroos($nb_nuits,$image,$navire,$port_depar,$name ,$date,$prix,array $chekport ){
    $sql= "INSERT INTO `croisiere`(`nb_nuits`, `image`, `navire`, `port_de_depart`, `name`,`datee`,`prix`) VALUES (:nb_nuits,:image,:navire,:portd,:name,:date,:prix)";
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
      $stmt=$this->db->query($sql);
      $stmt->bindValue(':nb_nuits',$nb_nuits,PDO::PARAM_INT);
      $stmt->bindValue(':image',$image,PDO::PARAM_STR);
      $stmt->bindValue(':navire',$navire,PDO::PARAM_INT);
<<<<<<< HEAD
      $stmt->bindValue(':port',$port,PDO::PARAM_STR);
      $stmt->bindValue(':name',$name,PDO::PARAM_STR); 
      $stmt->bindValue(':name',$date,PDO::PARAM_STR); 

        // var_dump($sql);
        //     die;
      //  $stmt->execute();
      if ($stmt->rowCount() > 0) {
=======
      $stmt->bindValue(':portd',$port_depar,PDO::PARAM_STR);
      $stmt->bindValue(':name',$name,PDO::PARAM_STR); 
      $stmt->bindValue(':date',$date,PDO::PARAM_STR); 
      $stmt->bindValue(':prix',$prix,PDO::PARAM_INT); 

     
       $stmt->execute();
    
      if ($stmt->rowCount() > 0) {
        $stmt=$this->db->query("SELECT MAX( id_croisiere)  FROM `croisiere` ");
       $stmt->execute();       
      $id_c=$stmt->fetch()[0];
      print_r($chekport);
      echo"idx  :".$id_c;
      


        for($i=0;$i<count($chekport);$i++){
          
          $this->addtrajet($id_c,$chekport[$i]);
      
        }


        
        
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
       return true;
    } else {
        return false;
    }
<<<<<<< HEAD
      // $this->db->bindParam(':value1', $nb_nuits);
      


    }

=======
    
    }

    public  function addtrajet($id_cr,$id_pr){
     $stmt= $this->db->query("INSERT INTO `prot_croisi` (`id_port`, `id_croisi`) VALUES ($id_pr, $id_cr);");
    
     $stmt->execute();

    }   
    
    public function GetOneCrocisiere($id){

      $qury="SELECT * FROM croisiere c,port p,navire n  WHERE c.navire=n.id_navire  AND c.port_de_depart=p.id_port and id_croisiere =$id";

      $stmt=$this->db->query($qury);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
      

    }


    


>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
  }