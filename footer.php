<!DOCTYPE html>
<html lang="en" dir="ltr">

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
    <link rel="stylesheet" href="css/styles_index.css">
    

  </head>
  <body>
    <p align="right">
    <?php
      if (!isset($_SESSION['username'])) {
        echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
          </li>';
        }
      ?>
    </p>
    <div class="container footer">
      <hr>
      <footer id="footer">
        <i class="footer-logo fab fa-twitter fa-2x"></i>
        <i class="footer-logo fab fa-facebook fa-2x"></i>
        <i class="footer-logo fab fa-instagram fa-2x"></i>
        <i class="footer-logo fas fa-envelope fa-2x"></i>
        
        <p>Copyright © 2020, MED-NextGen. All rights reserved.</p>

      </footer> 
    </div>
  </body>
</html>
