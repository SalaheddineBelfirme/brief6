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


    // public function deleteport ($id){
    //   $sql ="DELETE FROM `port` WHERE id_port=:id";
    //  $stmt= $this->db->query($sql);
    //  $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    // }


  }
    ?>