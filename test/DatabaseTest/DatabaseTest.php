<?php
   
 use PHPUNIT\Framework\TestCase;


 class DatabaseTest extends TestCase{


    /**
     * @test
     */ 

     public function doesItConnect($db){

        try{
            $db->connect();

        } catch(PDOException $e){

            $e->getMessage();


        }


     }

 }