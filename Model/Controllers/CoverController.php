<?php


  class CoverController
  {

      private $db;


      public function __construct($db){

         $this->db = $db;

      }


      
      public function tryToRegister($userName, $pass)
      {

           //check if the username already exists

           $sql = "SELECT * FROM users";
           $stmt = $this->db->prepare($sql);
           $stmt->execute();

           if($stmt->rowCount() > 0){

              echo "you can't insert this element inside the db";

            } else {

              echo "ok, you can insert this user";
              
           }
           


           if($this->isPassValid($pass) == true){

               //check pasword

               //log user in

               if(password_verify($hash, $password)){
                  header("Location:{$rootUrl}userLoggedIn");
               } else {

                  echo "wrong password";

               }

           } else {

              echo "wrong password";

              
           };

      }





      public function tryToLogin($userName, $pass){


         if($this->isPassValid($pass) == true){


            //check pasword


            if(password_verify($hash, $password)){


               header("Location:");


            }

        }



      }




      private function isUserNameValid($userName){


           if(count($userName)< 5){

              return false;

           }


      }



      
      private function isPassValid($pass){


         if(strlen($pass) < 8){

             echo 'please, provide a longer pass';

            return false;

         } 

         //if there is at least a capital letter

         $capLetterFound = false;

         for($i=0; $i < strlen($pass); $i++){

              if((ctype_upper($pass[$i]))){

                  $capLetterFound = true;

              }

         }


         if($capLetterFound == false){

            echo 'no upperCase';

            return false;

         }



         $lowerLetterFound = false;

         for($i=0; $i < strlen($pass); $i++){

            if((ctype_lower($pass[$i]))){

                $lowerLetterFound = true;

            }

       }



         if($lowerLetterFound == false){

            echo 'no lowerCase';           
            return false;
 
            
      }



      //else the pass is valid


       return true;


    }










      public function register()
      {



      }




      public function tryToLogin($username, $pass)
      {
         echo "trying to login...";

         //is the user already in the database? 
         //does his password match?
         //login

         $sql = "SELECT * FROM users";

         $stmt = $this->db->prepare($sql);

         $stmt->execute();

         $result = $stmt->fetchAll();



         if($stmt->rowCount() > 0){

            echo 'user found...';

         } else {

            echo 'user not found...';

         }



      }


      public function login($username, $pass){



 


      }




  }