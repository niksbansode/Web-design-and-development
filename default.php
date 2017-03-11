<?php
require_once 'core.inc.php';
require_once 'connect.inc.php';
//this will first check whether user is logged in or not if yes then get the respective field else user is logged in then go again to login page
if(get_status()){
    $username=getinfo('username');
}
else {
    include_once 'index.html';
}
//this checks session of user is still going on or not, if yes then do nothing else user is logged out and it should not execute further script and head into the login page
if(isset($_SESSION['user_id'])){
	
}
else
{
    header('Location: index.html');
}
?>

<html>
    <head>
        <title>|The Official Guide To NewYork City|</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!--        animate.css-->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/footer.css">
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<!--        wow.js-->
        <script src="js/wow.min.js"></script>
        <script src="js/ajax.jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/modernizr.js"></script>
        <script>
            new WOW().init();
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>        
        <style>
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(simple-pre-loader/images/loader-128x/Preloader_3.gif) center no-repeat #fff;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-color:black;">   
        <div class="se-pre-con"></div>
                    <nav class="navbar navbar-fixed-top" role="navigation">
                        <div class="navbar-inner">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainMenu">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a href="#" class="navbar-brand"><h3>Nice <span>Visit</span></h3></a>
                                </div>
                                <div class="collapse navbar-collapse" id="mainMenu">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active" style="{color:white}"><a href="#">Home</a></li>
                                        <li><a href="gallery.html">Gallary</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li class="dropdown user-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $username ?><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                                <li><a href="#"> Settings</a></li>
                                                <li class="divider"></li>
                                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </nav>
                <header id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('images/ancient.jpg');"></div>
                        <div class="carousel-caption wow fadeInUpBig">
                            <h2>World's Most Incredible Places To Visit</h2>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('images/hotel.jpg');"></div>
                        <div class="carousel-caption wow fadeInUpBig">
                            <h2>Compare & Book from more than 105000 Hotels</h2>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the third background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('images/frontfirst.jpg');"></div>
                        <div class="carousel-caption wow fadeInUpBig">
                            <h2>Best Rate Gurantee, Book Now !</h2>
                            <br>
                            <div class="container-fluid">
                                <a href="book.html" class="btn btn-default btn-lg" role="button">Book Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>  

        
    <div class="container-fluid">   
        <div class="content">
            <h2>What's Hot</h2>
            <hr>
        </div>
        <div class="gal">
            <ul class="row">
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class = "thumbnail">
                    <img class="img-responsive" src="images/biking.jpg">
                    <div class="caption"><h5>BIKING AND SKATING THE ARCHIPELAGO TRAIL</h5></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class = "thumbnail">
                    <img class="img-responsive" src="images/aurora.jpg">
                        <div class="caption"><h5>AUTUMN & SPRING-THE BEST AURORA SEASONS</h5></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class = "thumbnail">
                    <img class="img-responsive" src="images/hiking.jpg">
                        <div class="caption"><h5>FIVE DAYS HIKING IN LAPLAND</h5></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class = "thumbnail">
                    <img class="img-responsive" src="images/GREEK.jpg">
                        <div class="caption"><h5>VOYAGE TO THE GREEK ISLES</h5></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class = "thumbnail">
                    <img class="img-responsive" src="images/SAFARI.jpg">
                        <div class="caption"><h5>AFRICAN SAFARI</h5></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class = "thumbnail">
                    <img class="img-responsive" src="images/mad-decent.jpg">
                        <div class="caption"><h5>MAD DECENT BLOCK PARTY</h5></div>
                    </div>
                </li>
              </ul>  
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="content">
            <h2>Featured Videos</h2>
            <hr>
            <ul class="row" style="list-style: none;">
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qz6c7IrmznI"></iframe>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/amZ5YSeHrbo"></iframe>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 wow rubberBand">
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/00Pn4jJhFEo"></iframe>
                    </div>
                </li>               
           
            </ul>
        </div>        
    </div>        
        
		<footer class="footer-distributed" style="padding-bottom:0;bottom:0;">

			<div class="footer-left">

				<h3>Nice<span>Visit</span></h3>

				<p class="footer-company-name">Nice Visit &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@nicevisit.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Social</span>
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>        

    </body>
</html>