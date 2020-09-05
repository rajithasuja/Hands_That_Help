<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" href="public/images/favicon.ico">


    <title>Donate</title>
  </head>

    <section class="sec5">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#343A3A !important;">
      <a class="navbar-brand" id="nab" href="welcome.html"><img id="nabi" src="public/images/logo.jpeg"<h2>Hands That Help</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="welcome.html">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="about.html">About Us</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="whatwedo.html">What we do</a>
        </div>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donate.php">Donate Now</a>
        </li>

      </ul>
      </div>
    </nav>
  <body>
    <?
    include 'dbcon.php';
    if(isset($_POST['submit'])){
      $fname = mysqli_real_escape_string($con, $_POST['fname']);
      $lname = mysqli_real_escape_string($con, $_POST['lname']);
      $Email = mysqli_real_escape_string($con,$_POST['Email']);
      $gender = mysqli_real_escape_string($con,$_POST['gender']);
      $number = mysqli_real_escape_string($con, $_POST['number']);
      $age =  mysqli_real_escape_string($con, $_POST['age']);

      $emailquery = " SELECT * FROM register where Email = '$Email' ";
      $query = mysqli_query($con,$emailquery);
      $email_count = mysqli_num_rows($query);
      if($email_count>0){
        ?>

        <script>
        alert("You have already registered  .We will contact you shortly");
        </script>
        <?php
      }
      else{
        $insertquery = "INSERT INTO register(fname,lname,Email,gender,number,age)values('$fname','$lname','$Email','$gender','$number','$age')";
        $iquery = mysqli_query($con, $insertquery);
        if($iquery){

?>

<script>
alert("You have registered successfully .We will contact you shortly");
</script>
<?php
}


        }
      }













    ?>
    <div class="container" style="margin-top: 80px;">
      <div class="row">
      <div class="col-md-6">
        <img src="public/images/s11.jpeg" alt="img" style="width: 100%; height: 100%;">
        <div class="carousel-caption">

        </div>

      </div>
      <div class="col-md-6" style="background: url('public/images/back6.jpg')!important; background-size: cover!important;">
        <h1 style="padding: 10px 0; color: #5F2E72; font-family: 'Lobster', cursive;">Please fill in with your details and we will get back to you at the earliest.</h1><br>
        <form action='<?php echo htmlentities($_SERVER['PHP_SELF']);?>'method="POST" class="frm" id="info">

        <div class="form-row">
          <div class="col">
            <input id="in" type="text" class="form-control" placeholder="First name" name="fname" required>

          </div>
          <div class="col">
            <input id="in" type="text" class="form-control" placeholder="Last name" name="lname" required>

          </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="col-sm-10">
            <input id="in" type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email" required>
          </div>
       </div>

       <label for="gender"><b>Gender</b></label>&nbsp;&nbsp;
       <input type="radio" id="male" name="gender" value="male" required>
          <label for="male">Male</label>&nbsp;
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label>&nbsp;
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label>
          <br>
          <div class="form-group row">
            <div class="col-sm-10">
              <input id="in" type="text" class="form-control" id="number" placeholder="Mobile Number" name ="number" required>
            </div>
         </div>
         <label for="age">Age</label>&nbsp;&nbsp;
         <input id="in" style="border-radius: 5px; color: #fff; border: 1px solid #fff;" type="number" name="age" value="8" required><br><br>
         <div class="text-center">
           <button type="submit" id="b1" class="btn btn-outline-success" name="submit">Submit</button>
         </div>
         <br>

       </form>
      </div>
      </div>
      <p class="text-center">Copyright (c) 2020 Hands that Help All Rights Reserved.</p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
  </body>
</html>
