<?php
class Database{
    private $hostdb = "localhost";
    private $namedb = "bd_name";
    private $userdb = "root";
    private $passdb = "";
    public $pdo;
    public function __construct(){
        if(!isset($this->pdo)){
            try{
                $link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo = $link;
            }
            catch (PDOException $rex){
                die("Failed to connect with database".$rex->getMessage());
            }
        }
    }
}
?>