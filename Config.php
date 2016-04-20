<?php
define("PROJECT", "payfone_project");
define("DB_SERVER","localhost");
define("APP_PATH", "http://localhost/apps/");
define("DB_USERNAME", "root"); 
define("DB_PASSWORD", ""); 
define("DB_NAME", "payfone_project");
define("TBL_MERCHANTS", "merchants"); 
define("TBL_MERCHANT_USER","merchant_users");
define("TBL_TRANSACTION","transactions");  

class Config {
    var $con;
    public function dbase_config()
    {
      
      $this->con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
      
      return $this->con;
    } 
    
}