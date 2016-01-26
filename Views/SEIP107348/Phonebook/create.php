
<?php
//
//var_dump($_POST['image']);
//?>

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
                            <div class="col-lg-12">
                                <h1 class="page-header">Registration Forms</h1>
                            </div>
                            <div class="col-md-12">
                                <div class="form_part">
                                    <!--============form===========-->
                                    <form role="form" method="post" action="store.php" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Type Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="email" placeholder="Type Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" class="form-control" type="password" placeholder="Type Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Birthday</label>
                                                    <input class="form-control" name="birthday" type="date" placeholder="MM.DD.YY">
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
                                                    <input class="form-control" name="mobile_number" type="text" placeholder="Type Mobile Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Gender :  &nbsp;</label><br>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="radio" id="optionsRadios1" value="Male" checked>Male
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="radio" id="optionsRadios2" value="Female">Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hobbies: &nbsp;</label><br>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="hobby[]" value="Cricket">Cricket
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="hobby[]" value="Football">Football
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="hobby[]" value="Coding">Coding
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group col-md-12">
                                                <label for="textArea">Textarea</label>
                                                <textarea name="summary" class="form-control" rows="5" id="textArea" placeholder="Type Reveiw"></textarea><br>
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
