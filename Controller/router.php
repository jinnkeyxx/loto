<?php

class router {
    public function __construct()
    {
        $url = "";
        if(isset($_REQUEST['url'])){
            $url = $_REQUEST['url'] . '.php';
            
            if($url == 'chat.php'){
                include_once "views/html/chat.php";
            }
            else {
                include_once "views/html/error404.html";

            }
            
            
        }
        else {
            // $url = base_url();
            include_once "views/html/index.php";
          
        }
    }
   
}
