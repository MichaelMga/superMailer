<?php


 class DatabaseTest extends  PHPUnit\Framework\TestCase{


    /**
     * @test
     */ 


    function testDb($stuff='stuff'){

       include 'index.php';

      $this->assertEquals('stuff', $stuff);

   }



 }