<?php



class Navier extends Controller {
  private $postModel;
    public function __construct(){
        $this->postModel = $this->model('navierM');
        
      }


      public function getNavier(){
        
        $nv=new navierM();
        return $nv->getnavier();

      }

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

    public function addNavier(){
      if(isset($_POST['add_navier'])){


        $nv=new navierM();
        $name=$_POST['namenv'];
        $nb_place=$_POST['nb_place'];
        $nb_chomber=$_POST['nb_chomber'];
      
       $bol= $nv->addnavier($name,$nb_place,$nb_chomber);
      if($bol >0){
        header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
       }
       else return $bol;
      
    }



}



 
}


// $nv=new Navier ();
// $varadd=$nv->addNavier();

 ?>