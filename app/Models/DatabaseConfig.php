<?php
namespace App\Models;
use Dcblogdev\PdoWrapper\Database;
class DatabaseConfig{
    private $host      = "localhost";
    private $database  = "crud-rest-api-php";
    private $username  = "root";
    private $password  = "";


    public $db;

    public function __construct()
    {
        $config=$this->config_database();
        $this->db=new Database($config);
    }


    private function config_database(){
        return [
            'host'     =>$this->host,
            'database' =>$this->database,
            'username' =>$this->username,
            'password' =>$this->password,
            
        ];
    }
    
    

}