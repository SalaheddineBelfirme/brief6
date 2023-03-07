<?php
class Port extends Controller {
    
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
              header("Location: http://localhost/brief6/traversymvc/pages/portdata");
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
    $port->deletePort($id);
  }
}






 ?>