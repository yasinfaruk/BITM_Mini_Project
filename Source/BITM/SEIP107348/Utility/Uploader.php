<?php

namespace App\BITM\SEIP107348\Utility;

use \App\BITM\SEIP107348\Utility\Configuration;
use \App\BITM\SEIP107348\Message\Message;

class Uploader {

    static public function upload($files) {

        $source = $files['tmp_name'];
//        echo $source;die();
//        $destination = $_SERVER['DOCUMENT_ROOT'] . Configuration::UPLOAD_DIR . "image" . DIRECTORY_SEPARATOR;

        $destination = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "SEIP107348" . DIRECTORY_SEPARATOR . "Resources" . DIRECTORY_SEPARATOR . "image" . DIRECTORY_SEPARATOR;
        $destinationFileName = self::uniquename($files['name']);

        $isUploaded = move_uploaded_file($source, $destination . $destinationFileName);

        if ($isUploaded) {
            return $destinationFileName;
        } else {
            Message::set("File is not uploaded successfully.");
        }
    }

    static private function uniquename($filename) {
        $filename_parts = explode(".", $filename);
        $ext = array_pop($filename_parts);
        $name = implode(".", $filename_parts);

        return $name . "_" . time() . "." . $ext;
    }

    static public function delete($filename) {
        $file = $_SERVER['DOCUMENT_ROOT'] . Configuration::UPLOAD_DIR . "img" . DIRECTORY_SEPARATOR . $filename;
        unlink($file);
    }

}
