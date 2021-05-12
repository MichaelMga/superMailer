<?php
  
class AdminControllerTest extends PHPUnit\Framework\TestCase{


    /** 
     * @test
     */

     function testController($stuff='stuff'){


        $this->assertEquals('stuff', $stuff);
 

     }




}