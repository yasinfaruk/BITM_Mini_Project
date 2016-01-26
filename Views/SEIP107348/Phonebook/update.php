
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Phonebook\Phonebook;
use App\BITM\SEIP107348\Utility\Utility;

$views = new Phonebook();
$view = $views->update($_GET['id']);
$hobby = $view['hobbies'];
//print_r($hobby);die();
$hobby = explode(" , ", $hobby);
//$hobby = unserialize($hobby);
//print_r($hobby);
//var_dump($views);die();
$id = $view['id'];
//echo $view['hobbies'];die();



if (isset($_POST['submit']) && $_FILES['image']) {

//    var_dump($_POST);die();

    $conn = mysql_connect("localhost", "root", "root") or die("not connected");
    $lnk = mysql_select_db("phonebook") or die("cannot select db table");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp_name = $_FILES['image']['tmp_name'];

//    $file = $_POST['image'];
    $operator = $_POST['select'];
    $mobile = $_POST['mobile_number'];
    $gender = $_POST['radio'];
    $hobbies = $_POST['hobby'];
    $hobbies = implode(" , ", (array) $hobbies);
    $textarea = $_POST['summary'];

    $query = " UPDATE `phone_data` SET `name`='$name',`email`='$email',`password`='$password',`birthday`='$birthday',`file`='$file_name',`operator`='$operator',`mobile`='$mobile',`gender`='$gender',`hobbies`='$hobbies',`textarea`='$textarea' WHERE id='$id' ";
    move_uploaded_file($file_tmp_name, "images/" . $file_name);
//    $query = "UPDATE `phone_data` SET `title`='$title' WHERE  id='$id'";
    $result = mysql_query($query);

//    var_dump($result);
//    die();

    if ($result) {
        Utility::message("Update is successful");
    } else {
        Utility::message("Update is failed.");
    }

    Utility::redirect('index.php');
} else {
    echo 'something wrong';
}


//var_dump($views);
?>



<?php
//
//var_dump($_POST['image']);
//
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../Asset/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="header_part">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-md-6">
                            <p class="header_text text-success pull-left">BITM ATOMIC PROJECT</p>
                        </div>
                        <div class="col-md-6">  					

                            <p class="navbar-text pull-right">
                                <a href="#"><span class="glyphicon glyphicon-envelope"></span> Logout</a>
                            </p>
                            <p class="navbar-text pull-right">
                                <a href="#"><span class="glyphicon glyphicon-hand-right"></span> Signin</a>
                            </p>
                            <p class="navbar-text pull-right">
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Code Champs</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="project_list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-">
                        <div class="col-md-2">
                            <div class="sidebar_part">
                                <ul class="nav  text-left nav-stacked sidebar_part_text">
                                    <li>
                                        <a href="login.php"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Home</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Registration</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Disabled</a>
                                    </li>                                  
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Disabledisabled</a>
                                    </li>                                  
                                </ul>
                            </div>
                        </div>
                        <!---------------- end-sidebar-------------->
                        <div class="col-md-10">
                            <div class="col-lg-12" style="margin-top: 40px;">
                                <div class="col-md-6">
                                    <h1 class="page-header ">Update Forms</h1>
                                </div>
                                <div class="col-md-6">
                                    <img class=" pull-right" src="images/<?php echo $view['file']; ?>"
                                         height="150" 
                                         width="150" 
                                         style="border-radius: 5px;">
                                </div>                               

                            </div>
                            <div class="col-md-12">
                                <div class="form_part">
                                    <!--============form===========-->
                                    <form role="form" method="post" action="#" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $view['name']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="email" value="<?php echo $view['email']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" class="form-control" type="password" value="<?php echo $view['password']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Birthday</label>
                                                    <input class="form-control" name="birthday" type="date" value="<?php echo $view['birthday']; ?>"">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>File input</label>
                                                    <input type="file" name="image"  class="form-control">
                                                </div>                                           
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Mobile Operator</label>
                                                    <select class="form-control" name="select">
                                                        <option value="select">Select</option>
                                                        <option value="Gp">GP</option>
                                                        <option value="Robi">Robi</option>
                                                        <option value="Warid">Warid</option>
                                                        <option value="Banglalink">Banglalink</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">                                               
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input class="form-control" name="mobile_number" type="number" value="<?php echo $view['mobile']; ?>"">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Gender :  &nbsp;</label><br>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" <?php
                                                            if (in_array("Male", $view)) {
                                                                echo "checked";
                                                            }
                                                            ?> name="radio" value="Male"> Male
                                                        </label>

                                                        <label>
                                                            <input type="radio" <?php
                                                            if (in_array("Female", $view)) {
                                                                echo "checked";
                                                            }
                                                            ?> name="radio" value="Female"> Female
                                                        </label>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hobbies: &nbsp;</label><br>
                                                    <pre>
                                                        <?php
                                                        var_dump($hobby);
                                                        ?>
                                                    </pre>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name = "hobby[]" <?php
                                                            if (in_array("Cricket", $hobby)) {
                                                                echo "checked";
                                                            }
                                                            ?> value  = "Cricket"> Cricket
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" <?php
                                                            if (in_array("Football", $hobby)) {
                                                                echo "checked";
                                                            }
                                                            ?> name = "hobby[]" value  = "Football"> Football   
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" <?php
                                                            if (in_array("Coding", $hobby)) {
                                                                echo "checked";
                                                            }
                                                            ?> name = "hobby[]" value  = "Coding"> Coding   
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group col-md-12">
                                                <label for="textArea">Textarea</label>
                                                <textarea name="summary" class="form-control" rows="5" id="textArea" placeholder="Type Reveiw" ></textarea><br>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-12 submit_btn_margin">
                                                <button name="submit" type="submit" class="btn btn-success">Submit </button>
                                                <button type="reset" class="btn btn-info">Reset </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

