<?php 

    session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>

            Blood Bank Management

        </title>

        <link rel="stylesheet" href="css/style1.css">

        <link rel="icon" href="favicon.ico">

        <!--Google Fonts-->
            
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
            
        <!--CSS STYLESHEETS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--FONT AWESOMES-->

        <script src="https://kit.fontawesome.com/9ec9b505fb.js" crossorigin="anonymous"></script>

        <!--BOOTSTRAP SCRIPTS -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body>


            <section class="colored-section" id="title">

                <div class="container-fluid">

                    <!-- Nav Bar -->

                    <nav class="navbar navbar-expand-lg navbar-dark ">

                        <a class="navbar-brand" href="">DONATE</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        
                            <span class="navbar-toggler-icon"></span>
                        
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        
                            <ul class="navbar-nav ml-auto">
                            
                                <li class="nav-item">
                            
                                    <a class="nav-link" href="#admin">Home</a>
            
                                </li>

                                <li class="nav-item">
                
                                    <a class="nav-link" href="#testimonials">About Blood-Donation</a>
                            
                                </li>
                            
                                <li class="nav-item">
                            
                                    <a class="nav-link" href="#footer">Contact</a>
                            
                                </li>
                        
                            </ul>
                        </div>
                    </nav>

                    <!-- Title -->

                    <div class="row">

                        <div class="col-lg-6">
                        
                            <h1 class="big-heading">BLOOD BANK</h1>
                            
                            <br>
                            
                            <h3>DONATE BLOOD SAVE LIFE</h3>
                            
                        </div>
                        
                        <div class="col-lg-6">
                        
                            <!-- <img class="title-image rounded-corners" src="https://media.giphy.com/media/XCwyk8GMYxDTFCrPeM/giphy.gif" alt="donate"> -->
                        
                            <img class="title-image rounded-corners" src="image/giphy.webp" alt="donate">
                        
                        </div>

                    </div>
                    
                </div>

            </section>

            <section class="white-section" id="admin">
            
                 <div class="container-fliud">
                    
                    <div class="row">
                    
                        <!--Donor button-->
      
                        <div class="admin-box col-lg-4">
                            
                            <a href="login.php" class="btn btn-outline-danger w-100 p-3" role="button" aria-pressed="true"><i class="fas fa-user"></i> USER LOGIN PANEL</a>
                        
                        </div>

                        <div class="admin-box col-lg-4">
        
                            <a href="info.html" class="btn btn-outline-danger w-100 p-3" role="button" aria-pressed="true"><i class="fas fa-info-circle"></i> INFO PANEL</a>
                        
                        </div> 
      
                        <!--Hospital button-->
                    
                        <div class="admin-box col-lg-4">
                        
                            <a href="login.php" class="btn btn-outline-danger w-100 p-3" role="button" aria-pressed="true"><i class="fas fa-hospital"></i> HOSPITAL LOGIN PANEL</a>
                    
                        </div>
                
                    </div>
           
                 </div>
            <!-- </div> -->
            </section>

            <!-- ABOUT -->
            
            <section class="colored-section" id="testimonials">
            
                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                    
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active container-fluid">
                            
                            <h4 class="testimonial-text">Blood banking refers to the process of collecting, separating, and storing blood. The first U.S. blood bank was established in 1936. Blood is the most precious gift that anyone can give to another person it is the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components like red cells, platelets and plasma which can be used individually for patients with specific conditions.</h4>
                            
                        </div>
                        
                        <div class="carousel-item container-fluid">
                            
                            <h4 class="testimonial-text">Safe blood saves lives and improves health. Blood transfusion is needed for women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth, children with severe anaemia often resulting from malaria or malnutrition, people with severe trauma following man-made and natural disasters; and many complex medical and surgical procedures and cancer patients.</h4>
                
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
                        
                        <span class="carousel-control-prev-icon"></span>
                    
                    </a>
                    
                    <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                        
                        <span class="carousel-control-next-icon"></span>
                    
                    </a>
                </div>

            </section id='icon-section'>
        <!-- </div> -->
        <!-- Footer -->
        <center>

	        <footer class="white-section" id="footer">
		
		        <div class="container-fluid">
			
                    <a href="" class='icons-social'><i class="fotter-icon fab fa-facebook-f"></i></a>
                    
                    <a href="" class='icons-social'><i class="fotter-icon fab fa-twitter"></i></a>
                    
                    <a href="" class='icons-social'><i class="fotter-icon fab fa-instagram"></i></a>
                    
                    <a href="" class='icons-social'><i class="fotter-icon fas fa-envelope"></i></a>
                    
                    <a href="" class="icons-social"><i class="fotter-icon fab fa-linkedin"></i></a>
                    
                    <p class="copyright">&copy Copyright 2020 Donate All Rights Reserved</p>
		
                </div>

            </footer>
        
        </center>
	
    </body>

</html>