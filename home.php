<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Interior Website</title>
        <!-- Custom css -->
        <link rel="stylesheet" href="home.css">
        <!-- Font Awesome Cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- Header Section -->
    <div class="header" id="home">
       <nav id="navbar">
           <div class="logo">
               <img src="images\logo.jpg">
           </div>
           <div class="links ms-auto" id="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#Gallery">Gallery</a>
            <a href="#Contact">Contact</a>
        </div>
    </nav>
    <div class="content">
        <h3>Ambiance Homes</h3>
        <h1>Your home should reflect <br>your soul</h1>
        <div class="form-group">
            <input type="submit" value="Go ahead">
        </div>
    </div>
</div>
<!-- Header Section End -->
<!-- About Section -->
<section class="about" id="about">
    <h1 class="heading">About <span>Us</span></h1>
    <div class="container">
        <div class="image">

        </div>
        <div class="about-content">
            <h1>What is special about Ambiance Homes? </h1>
            <h3>Vintage Interiors</h3>
            <p>We produce a range of work covering brand identity,art direction,product design,interior design,
                custom furniture and fabrication.We help you the best creative solutions for your space.Our style
                is fresh,effortless and poetic.
            </p>
            <div class="form-group">
                <input type="submit" value="Read More">
            </div>
        </div>
    </div>
</section>
<!-- About Section End-->
<section class="Gallery" id="Gallery">
    <h1 class="heading">Our <span>Gallery</span></h1>
    <p class="heading-description">Have a look on our amazing interiors...</p>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images\images\1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>Dining Room<span></span></h3>
                    <h1>Where our loved ones spend time together</h1>
                    <h4>Experience the lavish Interiors with your family.</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images\2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>Kitchen <span></span><a href=""></a></h3>
                    <h1>Heart of the home</h1>
                    <h4>The fondest memories are made when gathered around the table.</h4>
              </div>
            </div>
          <div class="carousel-item">
            <img src="images\4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                  <h3>Bedroom<span></span></h3>
                  <h1>Make today great</h1>
                  <h4>As we evolve,our room should too.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images\5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                  <h3>Bathroom<span></span></h3>
                  <h1>Simple yet elegant</h1>
                  <h4>If it looks right,it is right.</h4>
            </div>
          </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</section>
<!-- Contact Section  -->
<section class="Contact" id="Contact">
  <h1 class="heading">Contact <span>Us</span></h1>
  <p class="heading-description">We are always here for you...</p>
  <div class="container">
      <div class="contact-box">
          <div>
              <i class="fa-solid fa-envelope"></i>
              <h2>Email address <br> <span>Send email anytime</span></h2>
          </div>
          <div>
              <p>admin@Ambiancehomes.com</p>
              <i class="fa-solid fa-right-long"></i>
          </div>
      </div>
      <div class="contact-box">
          <div>
              <i class="fa-solid fa-location-dot"></i>
              <h2>Address <br> <span>Find Us</span></h2>
          </div>
          <div>
              <p>Bangalore , India</p>
              <i class="fa-solid fa-right-long"></i>
          </div>
      </div>
      <div class="contact-box">
          <div>
              <i class="fa-solid fa-phone"></i>
              <h2>Call Us <br> <span>Call us anytime</span></h2>
          </div>
          <div>
              <p>+080 352837897</p>
              <i class="fa-solid fa-right-long"></i>
          </div>
      </div>
  </div>
</section>

<!-- Contact Section End -->

<!-- Footer Section -->
<section class="footer">

  <div class="container">
      <div class="footer-box">
          <h3>about us </h3>
          <p>e produce a range of work covering brand identity,art direction,product design,interior design,
            custom furniture and fabrication.We help you the best creative solutions for your space.Our style
            is fresh,effortless and poetic.
          </p>
          <p>Copyrights &copy; 2023 All rights reserved By <a href="C:\Users\Admin\Desktop\Interior home page">Ambiancehomes</a>
          </p>
      </div>
      <div class="footer-box">
          <h3>Newsletter</h3>
          <p>Stay updated with our latests</p>
          <form>
              <input type="email" name="email" placeholder="admin@gmail.com">
              <button type="submit"><i class="fa-solid fa-right-long"></i></button>
          </form>
      </div>
      <div class="footer-box">
          <h3>Follow Us</h3>
          <p>Connect With Us On:</p>
          <div>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </div>
      </div>
  </div>
</section>
<!-- Footer Section End -->

<script src="script.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

