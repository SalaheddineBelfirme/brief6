<?php
  class Pages extends Controller {
    public function __construct(){
      $this->postModel = $this->model('croisiere');
      $this->navire = $this->model('navierM');
      $this->Port = $this->model('portM');

    }
    
    public function index(){
      $data = [
        'title' => 'Welcome'
      ];
     
      $this->view('pages/index', $data);
    }
    public function home(){
      $data = [
        'title' => 'home Us'
      ];

      $this->view('pages/home', $data);
    }
    
    public function login(){
      $data = [
        'title' => 'login Us'
      ];

      $this->view('pages/login', $data);
    }
    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function signin(){
      $data = [
        'title' => 'signin Us'
      ];

      $this->view('pages/signin', $data);
    }

    public function contact(){
      $data = [
        'title' => 'contact'
      ];

      $this->view('pages/contact', $data);
    }
    public function add_navier(){
      $data = [
        'title' => 'add_navier '
      ];

      $this->view('pages/add_navier', $data);
    }

    public function croisiere(){
      $croisiere=$this->postModel->getcro();
      
      $data = [
        'title' => 'croisiere ',
        'croisiere'=>$croisiere
      ];

      $this->view('pages/croisiere', $data);
    }

    public function add_croisi(){
      $data = [
        'title' => 'add_croisi Us'
      ];

      $this->view('pages/add_croisi', $data);
    }



    public function add_port(){
      $data = [
        'title' => 'add_port'
      ];

      $this->view('pages/add_port', $data);
    }
    public function portdata(){
     
      $datanavier= $this->navire->getnavier();
      $dataPort=$this->Port->getPORT();

      $data = [
        'title' => 'portdata',
        'navier'=> $datanavier,
        'Port'=> $dataPort
      ];

      $this->view('pages/Croisiereedata', $data);
    }

  }