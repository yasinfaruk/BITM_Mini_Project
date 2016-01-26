<?php
namespace App\BITM\SEIP107348\Utility;

class Configuration{
    
    const HOSTNAME      = "localhost";
    const DBNAME        = "BITM";
    const DBUSER        = "root";
    const DBPASSWORD    = "root";
    
    const UPLOAD_DIR    = DIRECTORY_SEPARATOR."BITM_Mini_Project".DIRECTORY_SEPARATOR."Views".DIRECTORY_SEPARATOR."SEIP107348".DIRECTORY_SEPARATOR."Resources".DIRECTORY_SEPARATOR;
    const WEBROOT       = "http://localhost/BITM_Mini_Project/";
    const IS_SECURE     = FALSE;
    
    const DEBUG_MODE    = TRUE;
}
