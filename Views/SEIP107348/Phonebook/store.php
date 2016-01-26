<?php

//session_start();
//echo 'hi';die();
//var_dump($_POST);die();

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");


use App\BITM\SEIP107348\Phonebook\Phonebook;
use App\BITM\SEIP107348\Utility\Utility;
use App\BITM\SEIP107348\Utility\Configuration;
use App\BITM\SEIP107348\Utility\Uploader;

$phone = new Phonebook();
//var_dump($_POST);
//die();
$phone -> create($_POST, $_FILES);




//Utility::dd($_FILES['image']);

//$uploadedFile = Uploader::upload($_FILES['image']);

//if($uploadedFile){
//    $book = new Phonebook();
//    $_REQUEST["image"] = $uploadedFile;
//    $book->prepare($_REQUEST)->store();
//}

//$book = new Phonebook();
//$book -> store();
// 

