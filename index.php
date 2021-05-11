<?php
 
 include 'vendor/bin/';
 include 'services.php';

 include __DIR__ . "/vendor/autoload.php";


 //request class

 $request = $_SERVER["REQUEST_URI"];
 $routes = include 'Routes.php';
 
 if(isset($routes[$request])){

    $response = new Response();
    $response->setStatusCode();
    $response->setContent($routes[$request]);
 
} else {

    $response = new Response();
    $response->setStatusCode(404);
    $response->setContent("src/views/notFound.php");

}
 

$response->send();
