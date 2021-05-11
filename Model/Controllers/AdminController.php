<?php

  namespace Controllers;


  class AdminController
  {

      private $db;


      public function __construct(Database $db){

         $this->db = $db;

      }


      
      public function tryToRegister($username, $pass) 
      {



      }


      public function register()
      {



      }




      public function tryToLogin($username, $pass)
      {

         //is the user already in the database? 

         //does his password match?


           
         //login



      }




      public function login($username, $pass){



 


      }




  }