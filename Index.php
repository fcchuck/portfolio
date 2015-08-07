﻿<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Charles' Portfolio</title>
        <!--Next line is a link to the Google font used-->
		<link href='http://fonts.googleapis.com/css?family=Orbitron:400,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<!--next two lines link to the jquery file.  Added so as to use Modals-->
		<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
	
    <body>
       
         <!--Navbar snippet imported from Bootstrap-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!--container-fluid will make the navbar the size of the screen as opposed to container making it the size of the page-->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--*************Brand is the button to return to the Portfolio homepage***If user will be sent to other pages.  If other pages are imbedded then it will only be a logo for decoratiove purposes-->
                <a class="navbar-brand" href="index.html">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!--link to open default email to send me an email directly-->
                    <li class="active"><a href="mailto:fcchuck2@gmail.com">Email Charles</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="images/Earl C Nelson Resume.htm" target="_blank">Resume</a></li>
                            <li><a href="https://www.linkedin.com/pub/charles-nelson/27/512/9a1" target="_blank">LinkedIn</a></li>
                            <li><a href="https://www.facebook.com/charles.nelson.9404/about" target="_blank">Facebook</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <!--search code is commented out unless I decide to add seach parameters-->
               <!--<form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Online Presence <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="images/Earl C Nelson Resume.htm" target="_blank">Resume</a></li>
                            <li><a href="https://www.linkedin.com/pub/charles-nelson/27/512/9a1" target="_blank">LinkedIn</a></li>
                            <li><a href="https://www.facebook.com/charles.nelson.9404/about" target="_blank">Facebook</a></li>>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><!--End of Navigation Bar -->

        <div class="container">

            <!--Following is the code for the logo-->
            <div class="row">
                <div class="col-md-4">
                    <img class="title-logo" src="images/charles1.jpg">
                </div>
                <div class="col-md-8 text-right text-uppercase">
                    <h1 class="title-super text-thin">E. Charles Nelson</h1>
                    <h3>Software Developer Apprentice</h3>
                </div>
            </div>

            <hr ><!--attributes are in the css file-->

            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive" src="images/Mallorca2.jpg" data-toggle="modal" data-target="#mallorca" alt="Mallorca, Spain">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-left text-uppercase">
                    <h2 class="text-muted">Featured Work</h2>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-uppercase">
                    <!--Modal will allow the user to click on the image and see a brief description.  One modal for each image-->
                    <img class="img-responsive" src="images/Zombie3.jpg" data-toggle="modal" data-target="#firstWebsite" alt="kitten">
                    <h3>First Website</h3>
                    <!--sends user to the website, opening in a new tab-->
                    <p><a href="FirstWebsite/index.html" target="_blank">First Website</a></p>
                </div>
                <div class="col-md-6 text-uppercase">
                    <img class = "img-responsive" src="images/MaxxPotential.png" data-toggle="modal" data-target="#maxxPotential" alt="Maxx Potential">
                    <h3>Current Company</h3>
                    <p><a href="http://www.maxxpotential.com" target="_blank">Link to Current Company website</a></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 text-uppercase">
                    <img src="http://placehold.it/350x250" alt="placeholder">
                    <h3>Appify</h3>
                    <p><a href="http://github.com">Link to project</a></p>
                </div>
                <div class="col-md-4 text-uppercase">
                    <img src="http://placehold.it/350x250">
                    <h3>Appify</h3>
                    <p><a href="http://github.com">Link to project</a></p>
                </div>
                <div class="col-md-4 text-uppercase">
                    <img class="img-responsive" src="images/USArmy.png" data-toggle="modal" data-target="#military" alt="Military Experience">
                    <h3>Military Experience</h3>
                    <p><a href="images/USArmy.png" data-toggle="modal" data-target="#military">My Military Experience</a></p>
                </div>
            </div>
                <div class="link-buttons">

                

                </div>

        </div><!--End of Container Div-->
		
					<!-- Modal Will need one for each modal used, linked to an image-->
			<div class="modal fade" id="firstWebsite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">First Website Page</h4>
				  </div>
				  <div class="modal-body">
					<img class="img-responsive" src="images/ZombieScreenshot.png" alt="Index page screenshot">
					This was my first complete project for my html class. I learned a lot about HTML, CSS and Javascript.
					As you can see it is very basic but provided me with knowledge and practice to develop my skills and acquire new knowledge.
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
            <!--modal for Maxx Potential-->
            <div class="modal fade" id="maxxPotential" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Maxx Potential</h4>
                              </div>
                              <div class="modal-body">
                                <img class="img-responsive" src="images/MaxxPotential.png" alt="Maxx Potential Logo">
                                As a Software Developer Apprentiace at Maxx Potentail, I have been working with experienced professional developing products for the company's customers in a learning environment.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

            <!--modal for Mallorca-->
            <div class="modal fade" id="mallorca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Mallorca</h4>
                              </div>
                              <div class="modal-body">
                                <img class="img-responsive" src="images/mallorca_map.jpg" alt="Map of Mallorca">
                                Having been born and raised on this beautiful, though cosmopolitan, island I not only learned Spanish culture but was exposed to a variety of cultures due to the extensive expatriate population as well as the huge tourism trade of the island.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>



            <!--modal for military experience-->
            <div class="modal fade" id="military" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Mallorca</h4>
                              </div>
                              <div class="modal-body">
                                <img class="img-responsive" src="images/mallorca_map.jpg" alt="Map of Mallorca">
                                Having been born and raised on this beautiful, though cosmopolitan, island I not only learned Spanish culture but was exposed to a variety of cultures due to the extensive expatriate population as well as the huge tourism trade of the island.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

    </body>
</html>