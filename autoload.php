<?php 

  spl_autoload_register(

      function($className){
        
        $path = str_replace($className ,"\\", "/Model/");
        
        require_once($path);

      }

  );