<?php
class Port extends Controller {
<<<<<<< HEAD
    
=======
  private $postModel;
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
    public function __construct(){
        $this->postModel = $this->model('portM');
      }

<<<<<<< HEAD

    public function addPort(){
      if(isset($_POST['sub_addport'])){
=======
      

    public function addPort(){
      if(isset($_POST['sub_addport'])){
        
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
        $nv=new PortM();
        $name=$_POST['namePt'];
        $pays=$_POST['pays'];
        $bol= $nv->addport($name,$pays);
          if($bol >0){
<<<<<<< HEAD
              header("Location: http://localhost/brief6/traversymvc/pages/portdata");
=======
            header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
          }
          else return $bol;

      }

    
    }

    public function getPORT(){
      $nv=new PortM();
     return $nv->getPort();

    }

  public function deletePort($id){
    $port=new PortM();
<<<<<<< HEAD
    $port->deletePort($id);
  }
=======
    $pr=$port->deletePortt($id);
    if($port==true){
      $_SESSION['deleteport']=true;
      header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
    }
    else{
      $_SESSION['deleteport']=false;
    }
  
  }

>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
}






 ?>