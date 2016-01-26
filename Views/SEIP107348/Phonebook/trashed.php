
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Mini_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Phonebook\Phonebook;
use App\BITM\SEIP107348\Utility\Utility;

$view = new Phonebook();

$views = $view->trashed();

//var_dump($views);
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
                                                    <li><a href="index.php">VIEW</a></li>
                                                    <li><a href="http://localhost/BITM_Mini_Project/Views/SEIP107348/Phonebook/create.php">ADD</a></li>
                                                    <li><a href="http://localhost/BITM_Mini_Project/Views/SEIP107348/Phonebook/trashed.php">ALL TRASHED</a></li>
                                                    <!--<li><a href="#">Link</a></li>-->

                                                </ul>

                                                <ul class="nav navbar-nav navbar-right"> 
                                                    <form class="navbar-form navbar-left" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>

                                                    <form class="navbar-form navbar-left" role="search" action="pdf.php" method="post">
                                                        <div class="form-group">
                                                            <input type="submit" value="PDF" name="export" class="form-control" />                                
                                                        </div>
                                                    </form>
                                                    <form class="navbar-form navbar-left" role="search" action="01simple-download-xlsx.php" method="post">
                                                        <div class="form-group">
                                                            <input type="submit" value="XLS" name="submit" class="form-control" />                                                         
                                                        </div>
                                                    </form>
                                                </ul>
                                            </div><!-- /.navbar-collapse -->
                                        </nav>
                                    </div>
                                    <!----------------------end-table-head-------------->

                                    <!--==========table=========-->
                                    <div class="table_main_part">


                                        <form action="recover_multiple.php" method="post">
                                            <button type="submit">Recover</button>   
                                            <button type="button" id="deleteAll">Delete</button>  

                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" name="markall" id="markall" ></th>
                                                        <th>SL</th>
                                                        <th>Name</th>
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

                                                    <?php
                                                    if (count($views) > 0) {
                                                        $n = 1;
                                                        foreach ($views as $user) {
                                                            ?>  

                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="mark" name="mark[]" value="<?php echo $user['id']; ?>">
                                                                </td>
                                                                <td><?php echo $n; ?></td>
                                                                <td><?php echo $user['name']; ?></td>
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
                                                                    <a href="delete.php?id=<?php echo $user['id']; ?>" name="delete" class="btn btn-danger btn-xs delete">                                         <span class="glyphicon glyphicon-remove"></span>
                                                                    </a>
                                                                    <a href="recover.php?id=<?php echo $user['id']; ?>" style="" class="btn btn-primary btn-xs">
                                                                        <span class="glyphicon glyphicon-trash"></span>
                                                                    </a>

                                                                </td>
                                                            </tr>

                                                            <?php
                                                            $n++;
                                                        }
                                                    } else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="13" class="text-center">No record is available.</td>
                                                        </tr> 

                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </form>

                                        <!-- ---------- pagination ------------ -->
                                        <div class="table_pagination">
                                            <ul class="pagination pagination-sm">
                                                <li class="disabled"><a href="#">&laquo;</a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="../../../../BITM_Atomic_Project/Asset/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../../../BITM_Atomic_Project/Asset/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" ></script>
        <script>

            $(document).ready(function () {

                $('#markall').bind('click', function () {
                    if ($('#markall').is(':checked')) {
                        $('.mark').each(function () { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "mark"               
                        });
                    } else {
                        $('.mark').each(function () { //loop through each checkbox
                            this.checked = false;  //select all checkboxes with class "mark"               
                        });
                    }
                });


                $('#deleteAll').bind('click', function (e) {

                   

             
                        var deleteItem = confirm("Are you sure you want to delete all Items??");
                        if (deleteItem) {
//                            alert("hi");
                            document.forms[0].action = 'delete_multiple.php';
                            document.forms[0].submit();
                        }
                  

                });

            });

        </script>

    </body>
</html>


