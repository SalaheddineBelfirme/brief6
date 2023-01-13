<?php 
// require_once URLROOT.'/models/loginM';
session_start();
class login extends Controller {
    private $postModel;

    public function __construct(){
        $this->postModel = $this->model('loginM');
        
    }

    public function loginn(){

        if(isset ($_POST['log'])){

        }

        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
     
       $r=$this->postModel->checklogin($email,$pass);
  var_dump($r);
  
 
  
       $_SESSION['log']=$r;

       if($r==false){
        echo("<script> alert('you have samting false')</script>");
        header("Location: http://localhost/brief6/traversymvc/pages/login");
       
            
       }
      elseif($r[0]->role==1){
        $name=$r[0]->Nom;
            echo("<script> var na='  $name'; alert('welcome Admin  '+na)</script>");
              header("Location: http://localhost/brief6/traversymvc/pages/dashboard");
            
       }
       elseif($r[0]->role==0) {
        $name=$r[0]->Nom;
        echo("<script> var na='  $name'; alert('welcome Sir  '+na)</script>");
        header("Location: http://localhost/brief6/traversymvc/pages/croisiere");
       }
       

    }


}