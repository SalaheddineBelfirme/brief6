<?php



class Navier extends Controller {
<<<<<<< HEAD
    
    public function __construct(){
        $this->postModel = $this->model('navierM');
=======
  private $postModel;
    public function __construct(){
        $this->postModel = $this->model('navierM');
        
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
      }


      public function getNavier(){
        
        $nv=new navierM();
        return $nv->getnavier();

      }

<<<<<<< HEAD
=======
      public function Deletenavier($id){
    
       
        $nv=new navierM();
        $nv->deletenavire($id);
   
       
        if($nv==true){
          $_SESSION['deletenavier']=true;
          header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
        }
        else{
          $_SESSION['deletenavier']=false;
        }

      }

>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
    public function addNavier(){
      if(isset($_POST['add_navier'])){


        $nv=new navierM();
        $name=$_POST['namenv'];
        $nb_place=$_POST['nb_place'];
        $nb_chomber=$_POST['nb_chomber'];
      
       $bol= $nv->addnavier($name,$nb_place,$nb_chomber);
      if($bol >0){
<<<<<<< HEAD
        header("Location: http://localhost/brief6/traversymvc/pages/portdata");
       }
       else return $bol;
=======
        header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
       }
       else return $bol;
      
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
    }



}



 
}


// $nv=new Navier ();
// $varadd=$nv->addNavier();

 ?>