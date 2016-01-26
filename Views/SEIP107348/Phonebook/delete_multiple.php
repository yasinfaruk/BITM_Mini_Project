
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Phonebook\Phonebook;
use App\BITM\SEIP107348\Utility\Utility;

//var_dump($_REQUEST['mark']);die();
$view = new Phonebook();
$view->deleteMultiple($_REQUEST['mark']);