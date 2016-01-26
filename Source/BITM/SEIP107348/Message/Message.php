<?php

namespace App\BITM\SEIP107348\Message;

class Message {
    
    static public function set($message=""){
       $_SESSION['Message'] = $message;
    }
    
    static public function get($data=""){
       return $_SESSION['Message'];
    }
    
    static public function flash($data=""){
       
       $_message = $_SESSION['Message'];
       $_SESSION['Message'] = ""; 
       return $_message;
    }

}