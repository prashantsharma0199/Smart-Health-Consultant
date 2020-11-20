<!-- <?php
session_start();
?> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>MED-NextGen/Insurance</title>

  <!-- CSS files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  

  <!-- Icons on button -->
  <script src="https://kit.fontawesome.com/a093b0edcc.js" crossorigin="anonymous"></script>

  <!-- GoogleFonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital@0;1&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/styles_insurance.css">
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

      <div id="insurance">
        <h1 class="title-h1" style="padding-left:100px; padding-right:100px; padding-bottom:0px;">Find the Right Health Insurance for you!</h1>
        <div>
        <div class="buttons" style ="padding:50px;">
          <button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-lg btn-Refill">Claim your Health Insurance</button>
          <button onclick="https://health.policybazaar.com/?offerid=6&pb_source=google_brand&pb_medium=ppc&pb_term=Policy%20bazaar%20health%20insurance&pb_campaign=PolicyBazaar_Health_Broad00Health_Insurance&gclid=CjwKCAiA7939BRBMEiwA-hX5JzbitGOhQCyh2M5P2A94Yn8kYaG8-68TKYzeXPjtztBM3IbIR2c8IBoCjpYQAvD_BwE" type="button" class="btn btn-lg btn-Refill">Find your Health Insurance</button>
        </div>
          <div class="firstbody">

            <h3 class="firstbody-h3">What is Health Insurance?</h3>
            <p class="firstbody-p">
              Health insurance is an insurance policy that protects the policyholder and his/her family against the medical costs that arise due to an accident, illness or on the diagnosis of any serious disease. Today, several
              companies offer health insurance plans to their customers that provide various benefits such as cashless treatment at network hospitals, tax benefits, etc.
            </p>
            <h3 class="firstbody-h3">Why is Health Insurance important?</h3>
            <p class="firstbody-p">
              Today, quality healthcare treatment is expensive. A decent hospital has the potential to finish up your savings in a few days. Instead of worrying about the hospital bills, you need to concentrate your entire energy on
              the recovery. A health insurance policy can help you with that. You can approach any of the network hospitals which has a tie-up with your insurance provider and recover peacefully.
            </p>
          </div>

          <br><img class="ins-img" src="insurance.png" alt="insurance" style="width:50%">

          <div class="secondbody">
            <h3 class="secondbody-h3">Things To Keep In Mind While Buying Health Insurance</h3>
            <p class="secondbody-p">
              To choose the best health insurance plan, there are a few factors that should be kept in mind before finalizing your decision. They are as follows:
              <br><br><b>1) Provided</b>
              <br>Different insurers provide a variety of facilities and covers to the policyholder. It is vital to check all the facilities and the coverage provided so as to fulfill the requirements for treatment. Compare policies and make a
              checklist for your needs and choose the best plan accordingly.
              <br><br><b>2) Reliability of the Company</b>
              <br>The policyholder should go through the insurance company's website and its details before choosing a medical insurance plan. The profile and the history of the company should be checked along with the customer reviews to make the
              right choice.
              <br><br><b>3) Sum Assured Amount</b>
              <br>The principal point to be noticed while buying medical insurance is the amount of Sum Assured offered by the insurer to the insured. If you or your family members are suffering from any specific disease, you might have a fair idea
              of the amount to be chosen for future health costs. Hence, it is important to choose the sum assured wisely.
              <br>You should keep an eye out for the clause of co-pay & deductible which insurance companies attach with some of their plans. Just to be clear, It is a predefined amount (in %) which the insured agrees to pay for medical services. For
              <br><br><b>4) Co-pay & Deductible</b>
              <br>example: if the co-pay is 10% and the claim amount is 2 Lakhs, 20,000 will be paid by the insured and the rest will be taken care of by the company.
              On the other hand, a deductible is the fixed amount which the policyholder has to pay each year before his/her plan begins to pay for covered expenses. For example, a person's deductible is Rs.1,00,000. In March, the person has a viral
              infection and the doctor's bill is Rs.10,000. Since this is the first payment of the year, the entire amount will be paid by the person (insured). In June, the person runs into an accident and has minor surgery. The total bill comes out
              to be Rs.1,50,000. Here the person will pay Rs.90,000 and the rest is paid by the company. In October, the person has 2 fractures and the bill is Rs.40,000. Since the person has paid the yearly deductible, the entire expense will be
              paid by the company. Learn More
              <br><br><b>5) Add-On Benefits & Plans</b>
              <br>Companies offer numerous riders and additional benefits to the customer that actually boosts the coverage, scope and advantage of the policy resulting in a complete health cover protection shield. You may also add a top-up plan with
              the respective coverage by paying an extra premium.
              <br><br><b>6) Option For Cashless Claim</b>
              <br>Check whether the insurance company is providing the cashless claim facility as it is an important feature of the policy that will help in times of emergency hospitalization.
            </p>
          </div>
          <hr>
          <div class="thirdbody">
            <h3 class="thirdbody-h3">How To Choose The Right Health Insurance Company?</h3>
            <p class="thirdbody-p">
              With the available health insurance companies in the market, a lot of research is required to select the best among them. That research mainly depends on a few factors which are listed below:<br>
              <br><b>• Reputation of the Company:</b> The reputation of the company plays an important role. It is advisable to go for a company that carries a good brand image. Sound research will be required that will help you to choose the
              right health insurance provider.<br>
              <br><b>• Financial Stability:</b> You must check the financial stability of the company. You can check the Credit Rating Information Services of India Limited (CRISIL) rating. Go for a company with AAA Rating as it is considered to
              have the highest financial strength to meet its obligations.<br>
              <br><b>• Product Portfolio:</b> Don't forget that insurance is a vast industry and keeps on changing by time. It does not remain the same all the time and so does your needs. That's why it is important to go for a company that
              offers a wide range of helpful insurance policies caters to the different needs of customers.<br>
              <br><b>• Smooth & Quick Claim Settlement Process:</b> It is advisable to search for an insurance company that follows a simple and easy claim settlement process. During emergencies, it is crucial to settle the claims on time so as
              to seek proper healthcare facilities.<br>
              <br><b>• Customer Support Service:</b> Pay attention to the quality of customer services of an insurance company, for that you need to check for the ratings and reviews of the customers for the services provided. Choose the company
              that offers online chat, email assistance, and phone assistance.<br>
              <br><b>• Insurance Advisor:</b> Insurance is tough to understand by a common person. But now many insurance companies appoint insurance advisors who will help you in choosing an appropriate insurance plan according to your needs.<br>
              <br><b>• Feedback and Reviews:</b> One of the most important and common aspects are customer ratings and feedback received by an insurance company. You can go through the Insurance Regulatory and Development Authority of India
              (IRDAI) website to check the number of complaints and resolutions against the insurance company.
              <hr>
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- The Modal -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <!-- Modal Content -->
      <form action="mail_handler2.php" method="post" name="form" class="needs-validation modal-content animate">
        <h3 class="form-heading">MED-NextGen Health Insurance Claim E-Form</h3>
        <hr class="mb-4">
        <div class="mb-3">
          <label for="firstName">Name of the Policyholder</label>
          <input type="text" name="Full_name" class="form-control" id="firstName" placeholder="" value="" required="">
          <div class="invalid-feedback">
            Valid complete name of Policyholder is required.
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Details of the Insured person(in respect of whom claim is made):</label>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="consumer-no">Name of the Insured person</label>
            <input type="text" name="Cons_no" class="form-control" id="consumer-no" placeholder="" required="">
            <div class="invalid-feedback">
              Please enter your Consumer number.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="phone">Relationship with the Policyholder</label>
            <input type="text" name="Mobile_no" class="form-control" id="phone-no" placeholder="" required="">
            <div class="invalid-feedback">
              Please enter your Mobile number.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="consumer-no">Occupation</label>
            <input type="text" name="Cons_no" class="form-control" id="consumer-no" placeholder="" required="">
            <div class="invalid-feedback">
              Please enter your Consumer number.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 mb-3">
            <label for="consumer-no">Address</label>
            <input type="text" name="Cons_no" class="form-control" id="consumer-no" placeholder="" required="">
            <div class="invalid-feedback">
              Please enter your Consumer number.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="phone">Mobile Number</label>
            <input type="tel" name="Mobile_no" class="form-control" id="phone-no" placeholder="" required="">
            <div class="invalid-feedback">
              Please enter your Mobile number.
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" style="padding:0;">
          <label for="consumer-no">Submit copies of all consultations</label>
          <input type="file" id="myFile" name="filename">
        </div>
        
        
        <hr class="mb-4">
        <div class="button-form">
          <button type="submit" name="submit" class="btn btn-lg btn-Refill">SUBMIT</button>
        </div>

      </form>
    </div>
  </section>

  <script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

  </script>


    <footer id="footer">

      <i class="footer-logo fab fa-twitter fa-2x"></i>
      <i class="footer-logo fab fa-facebook fa-2x"></i>
      <i class="footer-logo fab fa-instagram fa-2x"></i>
      <i class="footer-logo fas fa-envelope fa-2x"></i>


      <p>Copyright © 2020, MED-NextGen.All rights reserved.</p>

    </footer>


</body>

</html>
