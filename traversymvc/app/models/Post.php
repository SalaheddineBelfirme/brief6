<?php
  class Post extends Database {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }


  }