<?php


class Database
{
   public function __construct($host, $dbName, $user, $pass){

       $this->host = $host;
       $this->dbName = $dbName;
       $this->user = $user;
       $this->pass = $pass;

   }

   public function connect(){
      
      return new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->user, $this->pass);
   }

}