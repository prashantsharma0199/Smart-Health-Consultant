<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>MED-NextGen</title>

  <!-- CSS files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles_index.css">

  <!-- Icons on button -->
  <script src="https://kit.fontawesome.com/a093b0edcc.js" crossorigin="anonymous"></script>

  <!-- GoogleFonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>
  <section id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark title-navbar">
        <a class="navbar-brand"href="http://localhost/SHC/index1.php" >MED-NextGen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/SHC/index.php">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/SHC/doctors.php">Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Pharmacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/SHC/insurance.php">Insurance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/SHC/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <?php
                  if (isset($_SESSION['username'])) {
                      echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                    </li>';
                  }
                  else{
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="index.php">Login/SignUp</a>
                    </li>';
                  }
                ?>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Title -->
      <h1 class="title-h1">Don’t delay your health concerns.
        Book your appointment today !!
      </h1>
      <h3>New User? <a href="http://localhost/SHC/index.php">Sign Up Now.</a></h3>
      <div class="card-deck title-cardview" style="width: 1519.2px;">
        <div class="card bg-light title-card" style="width: 18rem;">
          <img src="images/doctor_online.jpg" class="card-img-top card-title_img" alt="doctor_online_img">
          <div class="card-body">
            <h5 class="card-title">Doctors Online</h5>
            <p class="card-text">Tell us your health concern and we will assign you a doctor.</p>
            <a href="http://localhost/SHC/doctors.php" class="btn btn-primary title-btn">Start Consulting</a>
          </div>
        </div>

        <div class="card bg-light title-card" style="width: 18rem;">
          <img src="images/doctor_clinic.jpg" class="card-img-top card-title_img" alt="doctor_clinic_img">
          <div class="card-body">
            <h5 class="card-title">Doctors Near You</h5>
            <p class="card-text">Book an in-clinic appointment with your preferred doctor.</p>
            <a href="http://localhost/SHC/index.php" class="btn btn-primary title-btn">Find Doctors</a>
          </div>
        </div>
      </div>

    </div>

  </section>

  <section id="appointment">
    <h3>Book an appointment for an in-clinic consultation</h3>
    <p>Find experienced doctors across all specialties</p>

    <div class="card-deck row">
      <div class="card" style="width: 18rem;">
        <img src="images/dentist.jpg" class="card-img-top card-appoint_img" alt="dentist_img">
        <div class="card-body">
          <h5 class="card-title">Dentist</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="http://localhost/SHC/index.php" class="btn btn-primary">Book Appointment</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="images/gynecologist.jpg" class="card-img-top card-appoint_img" alt="gyno_img">
        <div class="card-body">
          <h5 class="card-title">Gynecologist</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="http://localhost/SHC/index.php" class="btn btn-primary">Book Appointment</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="images/physiotherapist.jpg" class="card-img-top card-appoint_img" alt="physio_img">
        <div class="card-body">
          <h5 class="card-title">Physiotherapist</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="http://localhost/SHC/index.php" class="btn btn-primary">Book Appointment</a>
        </div>
      </div>
    </div>

    <h4 class="appointment-hl"><a class="appointment-more" href=""><em>Read More...</em></a></h4>
  </section>


  <section id="articles">
    <div class="article-div">
      <h3>Read top articles from our health experts</h3>
      <p>Health articles that keep you informed about good health practices and achieve your goals.</p>

      <div class="card-deck articles-deck">
        <div class="card bg-light" style="width: 18rem;">
          <img src="images/healthy_diet.jpg" class="card-img-top shadow card-articles_img" alt="diet_img">
          <div class="card-body">
            <h5 class="card-title">How to maintain a Healthy Diet??</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="aricles-hl"><a href="#">Read more...</a> </p>

          </div>
        </div>

        <div class="card bg-light" style="width: 18rem;">
          <img src="images/covid19_precautions.png" class="card-img-top shadow card-articles_img" alt="precautions_img">
          <div class="card-body">
            <h5 class="card-title">Precationary measures</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="aricles-hl"><a href="#">Read more...</a> </p>
          </div>
        </div>
      </div>

      <a href="#" class="btn btn-primary">See all articles</a>

    </div>
  </section>

  <section id="testimonials">
    <h3 class="testimonials-heading">What our Users have to say</h3>
    <div id="testimonials-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h3 class="testimonials-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at venenatis erat. Curabitur malesuada vel dui sed hendrerit. Nulla ornare luctus fringilla..Sed pellentesque nunc sed elit aliquet volutpat.</h3>
          <img class="testimonials-img" src="doc_img/doc6.jpg" alt="doc-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item">
          <h3 class="testimonials-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at venenatis erat. Curabitur malesuada vel dui sed hendrerit. Nulla ornare luctus fringilla..Sed pellentesque nunc sed elit aliquet volutpat.</h3>
          <img class="testimonials-img" src="doc_img/doc5.jpg" alt="doc-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <footer id="footer">

    <i class="footer-logo fab fa-twitter fa-2x"></i>
    <i class="footer-logo fab fa-facebook fa-2x"></i>
    <i class="footer-logo fab fa-instagram fa-2x"></i>
    <i class="footer-logo fas fa-envelope fa-2x"></i>


    <p>Copyright © 2020, MED-NextGen.All rights reserved.</p>

  </footer>


</body>

</html>
