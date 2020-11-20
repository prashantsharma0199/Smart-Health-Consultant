<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MED-NextGen</title>
    
    <!-- CSS files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <!-- Icons on button -->
    <script src="https://kit.fontawesome.com/a093b0edcc.js" crossorigin="anonymous"></script>

    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    

  </head>
  
  <body>
    <section id="title">
      <div class="container-fluid">

        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark title-navbar">
          <a class="navbar-brand" href="http://localhost/SHC/index1.php">MED-NextGen</a>
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
                ?>
            </li>
          </ul>
          </div>
        </nav>
      </div>
    </section>
  </body>
</html>
