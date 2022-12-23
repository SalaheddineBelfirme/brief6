<?php
  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass=DB_PASS ;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
      // Set DSN
      $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
      // Create PDO instance
      try{
        $this->conn = new PDO($dns, $this->user, $this->pass);
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;
       

      }
    }
  }