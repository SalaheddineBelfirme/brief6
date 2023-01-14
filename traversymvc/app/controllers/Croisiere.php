<?php
class Croisiere extends Controller {
  private $postModel;
  
  
  public function __construct(){

    $this->postModel = $this->model('croisiereM');
    
  }

  public function DeleteCroisiere($id){
    
       
    $cr=new croisiereM();
    $cr->deletecro($id);
    
   
    if($cr==true){
      $_SESSION['deletenavier']=true;
      header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
    }
    else{
      $_SESSION['deletenavier']=false;
    }

  }

    public function addCroisiere(){
      if(isset($_POST['submitadd'])){
      $cr=new croisiereM();
      $nb_nuits=$_POST['nights'];
      echo $nb_nuits;
      // $image=$_FILES['imageadd']['name'];
      $prix=$_POST['prix'];
      $image='image';
      $date=$_POST['date'];
      $name=$_POST['name'];
      $navier=$_POST['navier'];
      $port_depart=$_POST['port_depart'];
      $trajet=$_POST['checkport'];  
   
      $FileName=$_FILES['imageadd']['name'];
        $imageEx=explode('.',$FileName);
        $imageEx=strtolower(end($imageEx));
        $newImageName=uniqid();
        $newImageName.='.'. $imageEx;
        move_uploaded_file($_FILES['imageadd']['tmp_name'],'../public/imgg/'.$newImageName);
              $bol= $cr->addcroos($nb_nuits,$newImageName,$navier,$port_depart,$name,$date,$prix,$trajet);
             
              if($bol==true){
                header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
              }
              else{
                echo$bol;
              }
       
    }
  }
}




 ?>