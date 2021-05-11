<?php

  namespace Http;


















   class Response
   {  

      private $statusCode;    
      private $headers;
      private $contentPath;
    



     public function __construct(int $statusCode, array $headers = ['text/content' => ''], string $contentPath ){

       $this->statusCode = $statusCode;
       $this->headers = $headers;
       $this->contentPath = $contentPath

     }





     public function setHeaders($headers): void
     {

        $this->headers = $headers;





     }

     public function getHeader($header): array
     {


        return $this->headers;


    }



     public function send()
     {

         foreach($this->headers as $key => $value){

             header("$key:$value");
         }

         http_status_code($this->statusCode);

        include $this->contentPath;

    }

   }