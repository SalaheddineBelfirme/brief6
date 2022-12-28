<?php
class Croisieree extends Controller {
    public function __construct(){
        $this->postModel = $this->model('croisiereM');
      }
    public function addCroisiere(){
      echo 'im here';
      $cr=new croisiereM();
      $nb_nuits=$_POST['nights'];
      // $image=$_FILES['imageadd']['name'];
      $image='image';
      $date=$_POST['date'];
      $name=$_POST['name'];
      $navier=$_POST['navier'];
      $port_depart=$_POST['port_depart'];
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

 ?>