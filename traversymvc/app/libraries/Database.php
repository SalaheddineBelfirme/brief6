<?php
  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */

use function PHPSTORM_META\type;

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
        $this->dbh = new PDO($dns, $this->user, $this->pass);
        // return $this->conn;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;

      }
    }
public function query($sql){
  $this->stmt=$this->dbh->prepare($sql);
  return $this->stmt;
}



// public function execute(){
//   return $this->stmt->execute();

// }
// public function resultSet(){
//   $this->execute();
//   return $this->stmt->fetchAll(PDO::FETCH_OBJ);
// }

//erure 
// public function single(){
//   $this->execute();
//   return $this->stmt->fetch(PDO::FETCH_OBJ);
// }


// public function roWcount(){
//   $this->stmt->rowCount() ;
// }

  }