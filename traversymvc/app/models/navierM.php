  <?php class navierM  {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function getnavier(){
   $stmt= $this->db->query("SELECT * FROM navire");
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_OBJ);
 
<<<<<<< HEAD
    //return $this->db->resultSet();
    
    }

    public function addnavier($name,$nb_place,$nb_chomber){
        $sql="INSERT INTO `navire`(`name`,`nb_chombre`, `nb_place`) VALUES(:name,:nb_place,:nb_chomber)";
=======
    
    }

    public function deletenavire($id){
      $stmt= $this->db->query("DELETE FROM `navire` WHERE id_navire=$id");
      $stmt->execute();
     if($stmt->rowCount()>0){
      return true;
     }
     else return false;
       }
       
    public function addnavier($name,$nb_place,$nb_chomber){
        $sql="INSERT INTO `navire`(`nameN`,`nb_chombre`, `nb_place`) VALUES(:name,:nb_place,:nb_chomber)";
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
        $stmt=$this->db->query($sql);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->bindValue(':nb_place',$nb_chomber,PDO::PARAM_INT);
        $stmt->bindValue(':nb_chomber',$nb_place,PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount()>0) {
<<<<<<< HEAD
            return true;
=======
            return $stmt->rowCount();
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
         } else {
             return false;
         }


    }


    public function delete ($id){
      $sql ="DELETE FROM `navire` WHERE id_navire=:id";
     $stmt= $this->db->query($sql);
     $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    }


  }
    ?>