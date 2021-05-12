<?php

  spl_autoload_register(
     
    function($className){

        $path = str_replace($className, '\\', '/');

        require_once(__DIR__ .'/Model'. $path);
    }

  );

