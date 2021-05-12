<?php
   
   $rootUrl = '/networkmaker/';

   include 'Model/Controllers/CoverController.php';
   include 'Model/Databases/Database.php';

   $database = new Database("localhost", "networkmakerdb", "root", "");

   $db = $database->connect();

   

   $controller = new CoverController($db);




 //request class

  $request = $_SERVER["REQUEST_URI"];



   if(isset($_POST["loginin"])){

       $controller->tryToLogin($_POST["username"], $_POST["pass"]);
       
       return;

   }


   if(isset($_POST["registering"])){

      $controller->tryToRegister($_POST["username"], $_POST["pass"]); 
      
      return;
      
  }




   switch($request){

      case $rootUrl :

         echo "welcome on network maker";
         return;


      case $rootUrl . 'login':

        include "src/views/login.php";
        return;


   }

   
