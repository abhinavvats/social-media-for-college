
<?php

$showAlert= false;
$showError= false;
if($_SERVER["REQUEST_METHOD"]=="POST"){

    include '_dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    // $exists=false;
    //chek  username of database exit or not
    $existSql= "SELECT * FROM `user` WHERE username='$username'";
    $result= mysqli_query($conn,$existSql);

    $numExistRows=mysqli_num_rows($result);

    if($numExistRows > 0){
      $showError = " username Already Exist";

      // $exists=true;
    }
    else{
      // $exists=false;
    if(($password==$cpassword)) {
        $sql="INSERT INTO `user` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result= mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
        }

    }
    else{
        $showError = "Passwords do not match ";
    }
  }
}




?>






















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Signup</title>
  </head>
  <body>
  
<?php require 'nav.php' ?>
  <?php
  if($showAlert)
  {
        echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your account is now created and You can login .
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
        }
  ?>
  <div class="jumbotron bg-dark my-4" style="background-image: url();">

  
  <h1 class="text-center text-secondary style="font-family: 'Merriweather', serif; "">Signup to our website</h1>
  <p class="text-secondary text-center">Enter Your personal details and start journey with us</p>
     <hr class="my-4">
      <div class="container my-4">

    <form action="signup.php" method="post">
  <div class="form-group col-md-6">
    <label for="username" class="text-secondary">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-md-6">
    <label for="Password" class="text-secondary">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="text-secondary"> confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" required>
    <small id="emailHelp" class="form-text text-muted">Make sure to write same password.</small>
  </div>
  <div class="form-group col-md-4">
  <button type="submit" class="btn btn-success">Sign in</button>
  </div>
</form>
</div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php require 'footer.php' ?>