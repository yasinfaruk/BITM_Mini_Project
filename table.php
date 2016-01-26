<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="Asset/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Asset/css/main.css" rel="stylesheet" type="text/css"/>
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
                        <!--                        <div class="col-md-2">
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
                                                </div>-->
                        <!---------------- end-sidebar-------------->

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
                                                    <li><a href="login.php">HOME</a></li>
                                                    <li><a href="#">VIEW</a></li>
                                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Book/create.php">ADD BOOK</a></li>
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
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Birthday</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Operator</th>
                                                    <!--<th>Country</th>-->
                                                    <th>File</th>
                                                    <th>Gender</th>
                                                    <th>Hobbies</th>
                                                    <th>Textarea</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>1</td>
                                                    <td>John</td>
                                                    <td>John</td>
                                                    <!--<td>Carter</td>-->
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter Carter Carter CarterCarterCarter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td class="">
                                                        <a class='btn btn-info btn-xs' href="view.php?id=<?php // echo $book['id'];   ?>"><span class="glyphicon glyphicon-edit"></span> View </a> 
<!--                                                        <a class='btn btn-success btn-xs' href="update.php?id=<?php // echo $book['id'];   ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> -->
                                                        <a href="delete.php?id=<?php // echo $book['id'];   ?>" name="delete" class="btn btn-danger btn-xs delete"><span class="glyphicon glyphicon-remove"></span> Delete</a>
                                                        <a href="trash.php?id=<?php // echo $book['id'];   ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-trash"></span> Trash</a>
<!--                                                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-envelope"></span> Email</a>-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>1</td>
                                                    <td>John</td>
                                                    <td>John</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <!--<td>Carter</td>-->
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>johncarter@mail.com</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>1</td>
                                                    <td>John</td>
                                                    <td>John</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <!--<td>Carter</td>-->
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>Carter</td>
                                                    <td>johncarter@mail.com</td>
                                                </tr>
                                            </tbody>
                                        </table>

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
    </body>
</html>

