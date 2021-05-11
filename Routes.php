<?php

    $adminController = new AdminController();  

 
   $routes = [ "/login" => function(){ $adminController->login()} ];