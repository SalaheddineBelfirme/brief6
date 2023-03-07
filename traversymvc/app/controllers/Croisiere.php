<?php
<<<<<<< HEAD
class Croisieree extends Controller {
    public function __construct(){
        $this->postModel = $this->model('croisiereM');
      }
    public function addCroisiere(){
      echo 'im here';
      $cr=new croisiereM();
      $nb_nuits=$_POST['nights'];
      // $image=$_FILES['imageadd']['name'];
=======
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
      // $image=$_FILES['imageadd']['name'];
      $prix=$_POST['prix'];
>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b
      $image='image';
      $date=$_POST['date'];
      $name=$_POST['name'];
      $navier=$_POST['navier'];
      $port_depart=$_POST['port_depart'];
<<<<<<< HEAD
      $trajet=$_POST['checkport'];

      //  $bol= $cr->addcroos($nb_nuits,$image,$navier,$port_depart,$name,$date,$trajet);
              $bol= $cr->addcroos(1,'ssss',23,'port','c1','01/01/2000 10:10',$trajet);
              // $this->postModel->addcroos();
        

 
       echo $bol;
    }

}

if(isset($_POST['submitadd'])){
  // $cr=new Croisieree ();
  // $varadd=$cr->addCroisiere();
}

// $cr=new Croisieree ();
// $varadd=$cr->addcro();
=======
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



>>>>>>> aa265f900552a951b5940263dd450e80bbebd23b

 ?>