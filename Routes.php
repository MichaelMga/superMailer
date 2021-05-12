<?php
  


   $routes = [ $rootUrl => function(){ echo "welcome on Network maker"; } ,  "{$rootUrl}login" => function(){ $adminController->tryToLogin($_POST["username"], $_POST["pass"]); } ];


