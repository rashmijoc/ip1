<?php
/*
************************************************************
Long name  : Internet Project Framework
Short name : IPF
Author     : Alexey Abramov
E-mail     : abramov.developer@gmail.com
LinkedIn   : https://www.linkedin.com/in/alexey-abramov-kz/
City       : Christchurch / NewZealand
Year       : 2020
************************************************************
*/
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jamavar IndianKitchen</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <div class="col-10 text-left">
    <link href="img/1.png" rel="icon">

    </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 ml-5">
				<div class="row">
					<div class="col-lg-2"><img src="img/LOGO.jpg" style="width:100%"/></div>
					<div class="col-lg-10 mt-3"><h1><a href="#intro" class="scrollto">Jamavar Indian Kitchen</a></h1></div>
				<!-- Uncomment below if you prefer to use an image logo -->
				</div>
			</div>


		<div class="col-lg-6 mt-3">
		  <nav id="nav-menu-container">
			<ul class="nav-menu">
			  <li class="menu-active"><a href="#intro">Home</a></li>
			  <li><a href="#about">About Us</a></li>
			  <li><a href="#services">Services</a></li>
			  <!--This link will be shown only if an authorized user is Administrator whose role_id is 1-->

			  <li><a href="#portfolio">Dishes</a></li>

			  <!-- <li class="menu-has-children"><a href="">Menu</a>
				<ul>
				  <li><a href="#portfolio">All</a></li>
				  <li><a href=".filter-app">Entrees</a></li>
          <li data-filter=".filter-app">Entrees</li>

				  <li><a href="mains.php">Mains</a></li>
				  <li><a href="seafood.php">Seafood</a></li>
				</ul>
			  </li> -->
			  <li><a href="#contact">Contact</a></li>

        <?php
        if ($_SESSION['role_id']== "1")
          {

        $_SESSION['alogin']=$_POST['email'];
        $_SESSION['login']=$_POST['email'];
        ?>
         <li><a href="\ip1\admin_dashboard.php">Admin</a> </li>
                <?php
        }
        ?>


		   <?php
				if (isset($_SESSION['role_id'])) {
				?>
				<!--Logout link will be shown only if a user is authorized   ($_SESSION['role_id'] is not empty)-->
				 <li><a  href="\ip1\logout.php">Logout</a></li>

                <?php
				}
				else {
				?>
				<!--Login  link will be shown only if a user is unauthorized ($_SESSION['role_id'] is empty)-->
				 <li><a  href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>
				<?php
				}
				?>
								</ul>
      </nav><!-- #nav-menu-container -->

		</div>

		</div>




      <div id="logo" class="pull-left">


    </div>

  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to Jamavar Indian Kitchen</h2>
                <p>We Serve's Happy food to Our Clients</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to Jamavar Indian Kitchen</h2>
                <p>We Serve's Happy food to Our Clients</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to Jamavar Indian Kitchen</h2>
                <p>We Serve's Happy food to Our Clients</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to Jamavar Indian Kitchen</h2>
                <p>We Serve's Happy food to Our Clients</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to Jamavar Indian Kitchen</h2>
                <p>We Serve's Happy food to Our Clients</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">

         <img src="img/slider1.jpeg" class="fullwidth" />





        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ionicons ion-bag"></i></div>
            <h4 class="title"><a href="">TakeAway</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ionicons ion-android-restaurant"></i></div>
            <h4 class="title"><a href="">DineIn</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ionicons ion-android-car"></i></div>
            <h4 class="title"><a href="">Delivery</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>




        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->


    <!--==========================
      Facts Section
    ============================-->
   <!-- #facts -->

    <!--==========================
      Dishes Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Dishes</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Entrees</li>
              <li data-filter=".filter-card">Mains</li>
              <li data-filter=".filter-web">Seafood</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/app1.jpg" class="img-fluid" alt="">
                <a href="img/dish/app1.jpg" data-lightbox="dish" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/web3.jpg" class="img-fluid" alt="">
                <a href="img/dish/web3.jpg" class="link-preview" data-lightbox="dish" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/app2.jpg" class="img-fluid" alt="">
                <a href="img/dish/app2.jpg" class="link-preview" data-lightbox="dish" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/card2.jpg" class="img-fluid" alt="">
                <a href="img/dish/card2.jpg" class="link-preview" data-lightbox="dish" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/web2.jpg" class="img-fluid" alt="">
                <a href="img/dish/web2.jpg" class="link-preview" data-lightbox="dish" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/app3.jpg" class="img-fluid" alt="">
                <a href="img/dish/app3.jpg" class="link-preview" data-lightbox="dish" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/card1.jpg" class="img-fluid" alt="">
                <a href="img/dish/card1.jpg" class="link-preview" data-lightbox="dish" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/card3.jpg" class="img-fluid" alt="">
                <a href="img/dish/card3.jpg" class="link-preview" data-lightbox="dish" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/dish/web1.jpg" class="img-fluid" alt="">
                <a href="img/dish/web1.jpg" class="link-preview" data-lightbox="dish" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>

              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #dish -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>344A Lincoln Rd, Addington <br>
                  <span> Christchurch 8024, New Zealand</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:03-335 0722">03-335 0722</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:jamavarfoodnz@gmail.com">jamavarfoodnz@gmail.com</a></p>
            </div>
          </div>

        </div>

       <div class="row"> <div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23140.71872939865!2d172.60741171484787!3d-43.531745164024606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318bc1bc3c3dbf%3A0x78682aa3785bc8b1!2sJamavar%20Indian%20Kitchen!5e0!3m2!1sen!2snz!4v1582065668682!5m2!1sen!2snz" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col-md-6">
<div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email2" id="email2" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
		</div></div>

      </div>
    </section><!-- #contact -->
<!--==========================
      Login Section
    ============================-->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-popout-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login/ Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card-body">

					<form class="login_form">


            <!---addition of image-->


<img src="img/avatar.jpg" alt="Avatar" classs="avatar">
                        <div class="form-group">
                            <div id="message" class="alert alert-danger mt-1 d-none align-middle text-center"></div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-18">

                              <input type="text" id="email1" class="form-control" name="email1" placeholder="Email Address*">
                                <div id="email_warning_message" class="text-danger mt-1 d-none" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-16">
                                <input type="password" id="password" class="form-control" name="password"  placeholder="Password*">
                                <div id="password_warning_message" class="text-danger mt-1 d-none"></div>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">


                        </div>
                    </form>

                </div>
            </div>
              </div>
      <div class="modal-footer">
	  <button type="button" id="submit_login" class="btn btn-primary">
          Login
                            </button>

      </div>
      <!--username/password-->

      <span>Forgot <a href="#"> Username / Password ?</a></span>
<span id='create_account'>
<a href="#">Create your account ➡ </a>
</span>
    </div>

  </div>
</div>



		<!-- #login -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <!--<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h4>Jamavar Indian Kitchen</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              344A Lincoln Rd<br>
              Addington Christchurch 8024<br>
              New Zealand <br>
              <strong>Phone:</strong> 03-335 0722<br>
              <strong>Email:</strong> jamavarfoodnz@gmail.com<br>
            </p>

            <div class="social-links">

              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>

            </div>

          </div>



        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2020 Copyright <strong>Jamavar IndianKitchen</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
      <!--  Designed by <a href="">Aspire2 Students</a>
        <p>NewZealand, Christchurch</p>
      </div>
    </div>
  </footer>
  <!-- #footer --



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/ip1/js/main.js"></script>

</body>
</html>
