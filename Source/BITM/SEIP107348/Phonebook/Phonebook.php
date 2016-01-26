<?php

namespace App\BITM\SEIP107348\Phonebook;

use App\BITM\SEIP107348\Utility\Utility;

class Phonebook {

    public $name = "";
    public $email = "";
    public $password = "";
    public $birthday = "";
    public $operator = "";
    public $mobile = "";
    public $gender = "";
    public $hobbies = "";
    public $textarea = "";
    public $deleted_at = "";

    public function __construct() {
        $conn = mysql_connect("localhost", "root", "root") or die("cannot connect");
        mysql_select_db('phonebook');
    }

    public function create($data = Null, $image = Null) {

        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->birthday = $data['birthday'];
        $this->operator = $data['select'];
        $this->mobile = $data['mobile_number'];
        $this->gender = $data['radio'];

        $array = $data['hobby'];

        $comma_separated = implode(" , ", (array) $array);
        $this->hobbies = $comma_separated;
        $this->textarea = $data['summary'];

        $file_name = $image['image']['name'];
        $file_size = $image['image']['size'];
        $file_tmp_name = $image['image']['tmp_name'];

        $file_name = time() . $file_name;

        if (move_uploaded_file($file_tmp_name, "images/" . $file_name)) {

            $query = "INSERT INTO `phone_data` (`name`, `email`, `password`, `birthday`, `file`, `operator`, `mobile`, `gender`, `hobbies`, `textarea`) VALUES ('" . $this->name . "', '" . $this->email . "','" . $this->password . "','" . $this->birthday . "','" . $file_name . "','" . $this->operator . "','" . $this->mobile . "','" . $this->gender . "','" . $this->hobbies . "','" . $this->textarea . "')";
            echo($query);
            $result = mysql_query($query);


            if ($result) {
                Utility::message("Insert is successful");
            } else {
                Utility::message("Insert is failed.");
            }
            Utility::redirect('index.php');
        } else {
            echo 'something wrong';
        }
    }

    public function index() {

        $query = "SELECT * FROM `phone_data`  WHERE deleted_at is NULL";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $users[] = $row;
        }

        return $users;
    }

    public function view($id = null) {
        $row = Array();
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $query = "SELECT * FROM `phonebook`.`phone_data` WHERE `phone_data`.`id` = " . $id;

        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function update($id = null) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $query = "SELECT * FROM `phonebook`.`phone_data` WHERE `phone_data`.`id` = " . $id;
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function delete($id = NULL) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $query = "DELETE FROM `phone_data` WHERE `id` = " . $id;
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

    public function deleteMultiple($ids = array()) {
        
        echo "hi";die();

        if (is_array($ids) && count($ids) > 0) {

            $_ids = implode(',', $ids);

            $query = "DELETE FROM `phone_data` WHERE `id` IN($_ids) ";
            
            var_dump($query);die();

            $result = mysql_query($query);

            if ($result) {
                Utility::message("Delelted is successful");
            } else {
                Utility::message("Delelted is failed.");
            }

            Utility::redirect('index.php');
        } else {


            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }
    }

    public function trash($id = NULL) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $this->deleted_at = time();

        $query = "UPDATE `phone_data` SET `deleted_at`='" . $this->deleted_at . "' WHERE  id='$id'";
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Trash is successful");
        } else {
            Utility::message("Trash is failed.");
        }

        Utility::redirect('index.php');
    }

    public function trashed() {

        $query = "SELECT * FROM `phone_data`  WHERE deleted_at is not NULL";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $users[] = $row;
        }

        return $users;
    }

    public function recover($id = null) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $query = "UPDATE `phone_data` SET `deleted_at`= NULL  WHERE  id='$id'";
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Trash is successful");
        } else {
            Utility::message("Trash is failed.");
        }

        Utility::redirect('index.php');
    }

    public function recoverMultiple($ids = array()) {

        if (is_array($ids) && count($ids) > 0) {

            $_ids = implode(',', $ids);

            $query = "UPDATE `phone_data` SET `deleted_at` = NULL WHERE `id` IN($_ids) ";

            $result = mysql_query($query);

            if ($result) {
                Utility::message("Trash is successful");
            } else {
                Utility::message("Trash is failed.");
            }

            Utility::redirect('index.php');
        } else {


            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }
    }

    public function prepare($data = array()) {
        Utility::dd($data);

        if (is_array($data) && array_key_exists('title', $data)) {
            $this->title = $data['title'];
            $this->author = $data['author'];
            $this->coverpage = $data['coverpage'];

            if (array_key_exists('id', $data) && !empty($data['id'])) {
                $this->id = $data['id'];
            }
        }
        return $this;
    }

}
