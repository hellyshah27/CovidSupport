<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="CovidSupport - Fight Together">
<meta name="keywords" content="Themes, responsive, themeforest">
<meta name="author" content="Rype Pixel [Chris Gipple]">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CovidSupport - Fight Together | Registration Form</title>
<!-- html5 support in IE8 and later -->
<script src="../../html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<!-- CSS file links -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/yamm.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- Start Header -->
<header class="navbar yamm navbar-default navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="images/Covidsupportlogo1.jpeg" alt="CovidSupport" />FIGHT <span>TOGETHER</span></a>
    </div>
    <div class="navbar-collapse collapse">

        <!--  start login/register -->
        <ul class="userButtons">  
            <li class="userBtn"><a href="login.html" class="buttonGrey">LOGIN</a></li>
            <!--<li class="userBtn"><a href="register.html" class="buttonGrey">REGISTER</a></li>-->
        </ul>
        <!-- end login/register -->

        <ul class="nav navbar-nav">
            <li class="dropdown menu-item-has-children">
                <a href="index.html">ABOUT</a>
            </li>
            <li class="dropdown menu-item-has-children">
                <a href="blog_classic.html">BLOG POST</a>
            </li>
        </ul>        
    </div><!--/.navbar-collapse -->
</div><!-- end header container -->
</header><!-- End Header -->

<!-- start subheader -->
<section class="subHeader page">
    <div class="container">
    	<h1>Register Here to get Immediate Help! </h1>
    </div><!-- end subheader container -->
</section><!-- end subheader section -->

<!-- start main content -->
<section class="properties">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-lg-offset-4">
                <h3>REGISTRATION for Patients</h3>
                <div class="divider"></div>
                <p style="font-size:13px;">Already have an account? <a href="login.html">Login here!</a></p>
                <!-- start login form -->
                <div class="filterContent defaultTab sidebarWidget">
                    <form method="post" action="connectpatient.php">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="name">Patient Name:</label><br/>
                                <input type="text" name="name" id="name" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="age">Age:</label><br/>
                                <input type="number" name="age" id="age" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock"> 
                                <label for="male">Male</label><br><input type="radio" id="male" name="gender" value="male">
                                <label for="female">Female</label><br><input type="radio" id="female" name="gender" value="female">
                                <!--<label for="other">Other</label><input type="radio" id="other" name="gender" value="other">-->
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="address">Address:</label><br/>
                                <input type="textarea" name="address" id="address" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="cno">Contact No:</label><br/>
                                <input type="number" name="cno" id="cno" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="email">Email Address:</label><br/>
                                <input type="email" name="email" id="email" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="uname">User Name:</label><br/>
                                <input type="text" name="uname" id="uname" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="pass">Password</label><br/>
                                <input type="password" name="pass" id="pass" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="confirmPass">Confirm Password</label><br/>
                                <input type="password" name="confirmPass" id="confirmPass" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <input class="buttonColor" type="submit" name="submit" value="REGISTER" style="margin-top:24px;">
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div><!-- end row -->
                    </form><!-- end form -->
                </div><!-- end login form -->
            </div><!-- end col -->
            
        </div>
    </div><!-- end container -->
</section>
<!-- end main content -->

<div class="bottomBar">
    <div class="container">
        <p>CovidSupport - Fight Together</p>
    </div>
</div>

<!-- JavaScript file links -->
<script src="js/jquery.js"></script>			<!-- Jquery -->
<script src="js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="js/respond.js"></script>

</body>

</html>