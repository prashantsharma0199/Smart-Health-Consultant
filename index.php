<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
  <?php 
    if(isset($_POST['lemail'])){
      $i = login($_POST['lemail'],$_POST['lpassword'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
      }
    }else if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      echo " <div class='alert alert-info' style='margin-left:100px; margin-right:100px;'> <p style='text-align:center; font-size:1rem;'>
              <strong>Info!</strong> Login or Register to be able to book your appointment.</p></div>";
    }
    unset($_POST);
  ?>
<div >
<div class="row" style="padding:3% 15%; width:1519.2px;">

  <div class="col col-xl-5 col-sm-4">
      <h2>Login</h2>
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="usr">Email/Username:</label>
          <input type="email" class="form-control" name="lemail" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="lpassword" required>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" class="btn btn-danger">
        </div>
          
      </form>
  </div>
      
  <div class="col col-xl-6 col-sm-6" id="register1" style="margin-left:5.5rem">
  <div >
    <form method="post" action="index.php">
	    <h2>Sign Up</h2>
	      <div class="form-group">
	        <label for="usr">Full Name:</label>
	        <input type="text" class="form-control" name="rfullname" required>
	      </div>
        
        <div class="form-group">
	        <label for="usr">Email/Username:</label>
	        <input type="email" class="form-control" name="remail" required>
	      </div>
	          
        <div class="form-group">
	        <label for="pwd">Password:</label>
	        <input type="password" class="form-control"  name="rpassword" required>
	      </div>

	      <div class="form-group">
	        <input type="submit" class="btn btn-primary">
	        <input type="reset" class="btn btn-danger"></button>
	      </div>
    </form>
  </div>
</div>
</div>
<?php include("footer.php"); ?>


