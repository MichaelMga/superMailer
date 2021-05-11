<?php

namespace Databases;


class Database
{

   public function __construct($host, $user, $pass){

      return new PDO("mysql:host={$host};dbname={$dbName};charset=UTF-8", $user, $pass);


   }


}