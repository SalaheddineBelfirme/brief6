<?php
class Port extends Controller {
  private $postModel;
    public function __construct(){
        $this->postModel = $this->model('portM');
      }

      

    public function addPort(){
      if(isset($_POST['sub_addport'])){
        $nv=new PortM();
        $name=$_POST['namePt'];
        $pays=$_POST['pays'];
        $bol= $nv->addport($name,$pays);
          if($bol >0){
            header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
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
    $pr=$port->deletePortt($id);
    if($port==true){
      $_SESSION['deleteport']=true;
      header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
    }
    else{
      $_SESSION['deleteport']=false;
    }
  
  }

}






 ?>