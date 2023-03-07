<?php class PortM  {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function getPort(){
   $stmt= $this->db->query("SELECT * FROM port ");
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_OBJ);
 
    //return $this->db->resultSet();
    
    }
<<<<<<< HEAD

    public function addport($name,$pays){
        $sql="INSERT INTO `port`( `name`,`pays`)  VALUES (:name,:pays)";
=======
    public function deleteportt($id){
      $stmt= $this->db->query("DELETE  FROM port where id_port =$id ");
      $stmt->execute();
     if($stmt->rowCount()>0){
      return true;
     }
     else return false;
       }

    public function addport($name,$pays){
        $sql="INSERT INTO `port`( `nameP`,`pays`)  VALUES (:name,:pays)";
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
        $stmt=$this->db->query($sql);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->bindValue(':pays',$pays,PDO::PARAM_STR);
        var_dump($sql);
        $stmt->execute();
        if ($stmt->rowCount()>0) {
            return true;
         } else {
             return false;
         }


    }


<<<<<<< HEAD
    public function deleteport ($id){
      $sql ="DELETE FROM `port` WHERE id_port=:id";
     $stmt= $this->db->query($sql);
     $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    }
=======
    // public function deleteport ($id){
    //   $sql ="DELETE FROM `port` WHERE id_port=:id";
    //  $stmt= $this->db->query($sql);
    //  $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    // }

    public function getports($id){

      $qury="SELECT * FROM prot_croisi pc ,port p  WHERE p.id_port=pc.id_port AND id_croisi=$id";

      $stmt=$this->db->query($qury);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   
    }   
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b


  }
    ?>