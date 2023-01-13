<?php class loginM  {
    private $db;

    public function __construct(){
       $this->db = new Database;
      
    }

   public function checklogin ($email,$passwordd){
    $stmt= $this->db->query("SELECT * FROM `userr` WHERE  email=:email  AND passwordd=:passwordd ");
    $stmt->bindValue('email',$email,PDO::PARAM_STR);
    $stmt->bindValue('passwordd',$passwordd,PDO::PARAM_STR);
    $stmt->execute();
 
   if(  $stmt->rowCount()>0){
    return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
   else return false;
   


    }
}

?>