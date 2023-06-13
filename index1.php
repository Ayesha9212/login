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
        <link rel="stylesheet" href="style.css">
        <!-- Font Awesome Cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--style-->
<style>/* google font */

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 9rem;
}
.logo img {
    position: absolute;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    top: 1%;
    left: 5%;
}
nav .links a {
    font-family:'Courier New', Courier, monospace;
    color:darkblue;
    font-size: 25px;
    margin-right: 1.8rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    position: relative;
    left: 55%;
}
nav .links a:after {
    content: '';
    width: 0%;
    height: 2px;
    background: var(--bg);
    position: absolute;
    left: 0;
    bottom: -15px;
    transition: 0.4s;
}
nav-change {
    background: rgba(0, 0, 0, 0.9);
}
nav .links a:hover::after {
    width: 100%;
}
.header {
    width: 100%;
    height: 100vh;
    background: url(bg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

section {
    padding: 8rem 7%;
}
nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 7%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10000;
}
:root {
    --font-heading:var(--black);
    --para-font: #777777;
    --black: #222222;
    --bg:var(--black);
    --white: #fff;
}

* {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: 0.2s linear;
}
.header .content {
    text-align: left;
    padding: 150px 7%;
    color:black;
}
.about .container {
    display: flex;
    justify-content: space-between;
}

.about  .container .image {
    flex-basis: 50%;
    background: url(about.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    width:100%;
    padding: 16rem 0;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow:black;
}

.about  .container .about-content {
    flex-basis: 40%;
}

.about  .container .about-content h1 {
    font-size: 25px;
    color:blueviolet;
    padding: 1rem 0;
}

.about .container .about-content h3 {
    color: var(--black);
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 600;
    letter-spacing: 1px;
    padding: 1rem 0;
}

.about .container .about-content p {
    font-size: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 300;
    color:black;
    line-height: 1.5;
}

.form-group input[type="submit"] 
{
    background-color:whitesmoke;
    color:black;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}
  
  .form-group input[type="submit"]:hover
{
    background-color:aquamarine;
}

.heading {
    top:50px;
    color:brown;
    font-size: 5rem;
    text-align: center;
}

.heading span {
    top:50px;
    color:black;
}

.heading-description {
    text-align: center;
    padding: 1.3rem 0;
    font-size: 1.6rem;
    font-weight: 300;
}


.header .content h3 {
    font-size: 1.4rem;
    font-weight: 600;
    letter-spacing: 2px;
    padding: 3rem 0;
}

.header .content h1 {
    font-size: 5rem;
    letter-spacing: 2px;
}

.form-group input[type="submit"] 
{
    background-color:#777777;
    color:indigo;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}
  
  .form-group input[type="submit"]:hover
{
    background-color:rgba(237, 28, 70);
}

.nav-change {
    background: rgba(0, 0, 0, 0.9);
}
.Contact .container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
    padding: 2.5rem 0;

}

.Contact .container .Contact-box {
    border: 0.2rem solid var(--bg);
    border-radius: 1rem;
    padding: 2rem;
    cursor: pointer;
}

.Contact .container .Contact-box div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.3rem 0;
}

.Contact .container .Contact-box div i {
    width: 4rem;
    height: 4rem;
    background:#777777;
    color: paleturquoise;
    text-align: center;
    font-size: 1.3rem;
    line-height: 4rem;
    border-radius: 100%;
}

.Contact .container .Contact-box div h2 {
    font-size: 1.8rem;

}

.Contact .container .Contact-box div h2 span {
    font-weight: 300;

}

.Contact .container .Contact-box div p {
    font-size: 1.5rem;
}

.Contact .container .Contact-box:hover {
    background: #686a6f;
    color: black;
}

.footer {
    width: 100%;
    height: auto;
    background: url(1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 20rem;
}

.footer .container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
    padding: 2.5rem 0;
}

.footer .container .footer-box {
    padding: 1rem;
}

.footer .container .footer-box h3 {
    color: var(--white);
    font-size: 1.8rem;
    letter-spacing: 0.1rem;
}

.footer .container .footer-box p {
    color: black;
    font-size: 1.5rem;
    line-height: 2.5rem;
    font-weight: 400;
    padding: 1.2rem 0;
}

.footer .container .footer-box form input {
    width: 70%;
    padding: 1rem;
}

.footer .container .footer-box p a {
    color: var(--bg);
}

.footer .container .footer-box form button {
    background: var(--bg);
    color: var(--white);
    padding: 1rem;
    cursor: pointer;
}

.footer .container .footer-box div a {
    margin: 0.5rem;
    color:var(--white);
    display: inline-block;
    width: 3rem;
    height: 3rem;
    line-height: 3rem;
    text-align: center;
    background: var(--bg);
}


@media only screen and (max-width: 991px) {
    html {
        font-size: 55%;

    }

    nav {
        padding: 3rem 3rem;
    }

    .content {
        text-align: center;
    }
}


@media only screen and (max-width: 768px) {


    nav #menu-btn {
        display: inline-block;
    }

    nav .links {
        position: absolute;
        top: 100%;
        left: -100%;
        width: 100%;
        height: 100vh;
        background: #eee;
        transition: 0.5s;
        background: black;
    }

    nav .links a {
        display: block;
        padding: 1.5rem;
        margin: 1rem;
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--white);
        text-align: center;
    }

    .about .container {
        flex-direction: column;
    }

    .about .container .about-content {
        text-align: center;
    }
}
</style>
</head>
<body>
    <!-- Header Section -->
    <div class="header" id="home">
       <nav id="navbar">
           <div class="logo">
               <img src="logo.jpg">
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
              <img src="1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>Dining Room<span></span></h3>
                    <h1>Where our loved ones spend time together</h1>
                    <h4>Experience the lavish Interiors with your family.</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>Kitchen <span></span><a href=""></a></h3>
                    <h1>Heart of the home</h1>
                    <h4>The fondest memories are made when gathered around the table.</h4>
              </div>
            </div>
          <div class="carousel-item">
            <img src="4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                  <h3>Bedroom<span></span></h3>
                  <h1>Make today great</h1>
                  <h4>As we evolve,our room should too.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="5.jpg" class="d-block w-100" alt="...">
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



