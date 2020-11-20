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
  <link rel="stylesheet" href="css/styles_doctors.css">

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

      <div id="doctors">

        <h1 class="title-h1">Consult with our Doctors for the Right Treatment.</h1>
        <h2 class="title-h2">Instant appointment with doctors</h2>
        <hr>

        <!-- Row 1 -->
        <div class="card-deck row">
          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc2.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. S. Fatima </h5>
              <p class="card-text">Audiologist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/Ghaziabad" target="_blank">Ghaziabad</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>

          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc9.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Cheng</h5>
              <p class="card-text">Child Specialist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/New+Delhi" target="_blank">New Delhi</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>

          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc1.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. R. R. Kamal</h5>
              <p class="card-text">Allergist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/Greater+Noida" target="_blank">Greater Noida</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>
        </div>

        <!-- Row 2 -->
        <div class="card-deck row">
          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc5.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Malavika</h5>
              <p class="card-text">Anesthesiologist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/New+Delhi" target="_blank">New Delhi</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>

          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc4.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Priya Sharma</h5>
              <p class="card-text">Dentist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/New+Delhi" target="_blank">New Delhi</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>

          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc6.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Joseph</h5>
              <p class="card-text">Cardiologist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/Greater+Noida" target="_blank">Greater Noida</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>
        </div>

        <!-- Row 3 -->
        <div class="card-deck row">
          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc3.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Pankaj Adhikary</h5>
              <p class="card-text">Dermatologist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/Noida" target="_blank">Noida</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>

          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc7.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Nehwal</h5>
              <p class="card-text">Nephrologist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/Ghaziabad" target="_blank">Ghaziabad</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>

          <div class="card bg-light" style="width: 18rem;">
            <img src="doc_img/doc8.jpg" class="card-img-top card-doc_img" alt="doc_img">
            <div class="card-body">
              <h5 class="card-title">Dr. Gautam</h5>
              <p class="card-text">Endocrinologist, MD, MBBS</p>
              <p><a href="https://www.google.com/maps/place/New+Delhi" target="_blank">New Delhi</a></p>
              <a href="http://localhost/SHC/index.php" class="btn btn-primary">Consult Now!</a>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </section>


  <section id="articles">
    <div class="article-div">
      <h3>Read top articles from our health experts</h3>
      <p>Health articles that keep you informed about good health practices and achieve your goals.</p>

      <div class="card-deck articles-deck">
        <div class="card bg-light" style="width: 18rem;">
          <img src="images/healthy_diet.jpg" class="card-img-top card-articles_img" alt="diet_img">
          <div class="card-body">
            <h5 class="card-title">How to maintain a Healthy Diet??</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="aricles-hl"><a href="#">Read more...</a> </p>

          </div>
        </div>

        <div class="card bg-light" style="width: 18rem;">
          <img src="images/covid19_precautions.png" class="card-img-top card-articles_img" alt="precautions_img">
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


  <footer id="footer">

    <i class="footer-logo fab fa-twitter fa-2x"></i>
    <i class="footer-logo fab fa-facebook fa-2x"></i>
    <i class="footer-logo fab fa-instagram fa-2x"></i>
    <i class="footer-logo fas fa-envelope fa-2x"></i>


    <p>Copyright © 2020, MED-NextGen.All rights reserved.</p>

  </footer>


</body>

</html>
