

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../../Asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../../../Asset/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../../Asset/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../../../Asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            #form_padding{
                margin-bottom: 100px;
            }
        </style>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">BITM-MINI-PROJECT</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Code Champs</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar navbar-fixed-top" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <!--                        <li class="sidebar-search">
                                                        <div class="input-group custom-search-form">
                                                            <input type="text" class="form-control" placeholder="Search...">
                                                            <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                        </div>
                                                         /input-group 
                                                    </li>-->


                            <li>
                                <a href="../../../index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Phone Book</a>

                                <!--                            <ul class="nav nav-second-level">
                                                                <li>
                                                                    <a href="BITM_Mini_Project/Views/SEIP107348/Phonebook/flot.html">Flot Charts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="morris.html">Morris.js Charts</a>
                                                                </li>
                                                            </ul>-->
                                <!-- /.nav-second-level -->

                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> Registration</a>
                            </li>


                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!--<div class="panel panel-default">-->
                        <!--                            <div class="panel-heading">
                                                        Basic Form Elements
                                                    </div>-->
                        <!--<div class="panel-body">-->
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1" id="form_padding">
                                <form role="form">

                                    <div class="col-md-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input class="form-control" name="birthday" type="date">
                                            </div>
                                        </div>
                                    </div>
                                       <div class="col-md-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input class="form-control" name="mobile_number" type="number">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Mobile Operator</label>
                                                <select class="form-control">
                                                    <option>GP</option>
                                                    <option>Robi</option>
                                                    <option>Warid</option>
                                                    <option>Banglalink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input class="form-control" name="country" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>File input</label>
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Gender :  &nbsp;</label><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Hobbies: &nbsp;</label><br>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Cricket
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Football
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Coding
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 

                                    <div class="col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="textArea">Textarea</label>
                                            <textarea class="form-control" rows="5" id="textArea"></textarea><br>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success">Submit </button>
                                            <button type="reset" class="btn btn-info">Reset </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../../../Asset/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../../Asset/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>

</html>

