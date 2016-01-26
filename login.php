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
                        <div class="col-md-1">
                            <div class="sidebar_part">
                                <ul class="nav  text-left nav-stacked sidebar_part_text">
                                    <li>
                                        <a href="login.php"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Home</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Registration</a>
                                    </li>
                                    <li>
                                        <a href="Views/SEIP107348/Phonebook/index.php"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Data Center</a>
                                    </li>                                  
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-hand-right"></span> &nbsp; Disabledisabled</a>
                                    </li>                                  
                                </ul>
                            </div>
                        </div>
                        <!---------------- end-sidebar-------------->
                        <div class="col-md-10">
                            <div class="body_part">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="login-panel panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Please Sign In</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <form role="form">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                                                </label>
                                                            </div>
                                                            <!-- Change this to a button or input when using this as a form -->
                                                            <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
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
