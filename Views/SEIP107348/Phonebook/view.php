
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Phonebook\Phonebook;
use App\BITM\SEIP107348\Utility\Utility;

$user = new Phonebook();
$user = $user->view($_GET['id']);

//var_dump($view);die();
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
                            <p class="header_text text-success pull-left">BITM MINI PROJECT</p>
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

                        <!------------------------ body-section--------------->
                        <div class="col-md-12 body_table_part">
                            <div class="co">
                                <div class="table_part">
                                    <!--=======table-head=======-->
                                    <div class="table_head_part">
                                        <nav class="navbar navbar-default" role="navigation">
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="../../../login.php">HOME</a></li>
                                                    <li><a href="table.com">VIEW</a></li>
                                                    <li><a href="http://localhost/BITM_Mini_Project/Views/SEIP107348/Phonebook/registration.php">ADD</a></li>
                                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Book/trashed.php">ALL TRASHED</a></li>
                                                    <!--<li><a href="#">Link</a></li>-->

                                                </ul>

                                                <ul class="nav navbar-nav navbar-right"> 
                                                    <form class="navbar-form navbar-left" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>

                                                    <form class="navbar-form navbar-left" role="search" action="download.php" method="post">
                                                        <div class="form-group">
                                                            <input type="submit" value="PDF" name="export" class="form-control" />
                                                            <input type="submit" value="XSL" name="export" class="form-control" />
                                                        </div>
                                                    </form>
                                                </ul>
                                            </div><!-- /.navbar-collapse -->
                                        </nav>
                                    </div>
                                    <!----------------------end-table-head-------------->

                                    <!--==========table=========-->
                                    <div class="table_main_part">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox"></th>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Birthday</th>
                                                    <th>File</th>
                                                    <th>Operator</th>
                                                    <th>Mobile</th>
                                                    <th>Gender</th>
                                                    <th>Hobbies</th>
                                                    <th>Textarea</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td><?php echo $user['id']; ?></td>
                                                    <td><?php echo $user['name']; ?></td>
                                                    <td><img src="images/<?php echo $user['file']; ?>" height="80" width="80"></td>
                                                    <td><?php echo $user['email']; ?></td>
                                                    <td><?php echo $user['password']; ?></td>
                                                    <td><?php echo $user['birthday']; ?></td>
                                                    <td><?php echo $user['file']; ?></td>
                                                    <td><?php echo $user['operator']; ?></td>
                                                    <td><?php echo $user['mobile']; ?></td>
                                                    <td><?php echo $user['gender']; ?></td>
                                                    <td><?php echo $user['hobbies']; ?></td>
                                                    <td><?php echo $user['textarea']; ?></td>
                                                    <!--<td>Carter</td>-->

                                                    <td class="">
                                                        <a class='btn btn-success btn-xs' href="update.php?id=<?php echo $user['id']; ?>">
                                                            <span class="glyphicon glyphicon-edit"></span> Edit 
                                                        </a>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>


