<?php
session_start();

if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $photo = $_POST['photo'];


  if (htmlentities($name)  && htmlentities($email)  && htmlentities($password) && htmlentities($photo)) {
  }

  // Name Validation

  if (empty($name)) {

    $_SESSION['error_name'] = "<h4>Please Enter Your Name</h4>";
    header("Location: ../index.php");
  }
  else if (strlen($name) > 30) {
    $_SESSION['error_name'] = "<h4>Enter Your Name only 30 Charecter</h4>";
    header("Location: ../index.php");
  }
    else if (ucwords($name)) {
    $_SESSION['error_name'] = "Enter Your Name only Ucwords";
    header("Location: ../index.php");
  }

  // Email Validation

  $Ema = strtolower($email);  
  $Sa = strpos($email, '@');
  $Sb = strpos($email, '.');
  $Sc = strpos($email, 'com');

  if (empty($email)) {

    $_SESSION['error_email'] = "<h4>Please Enter Your Email</h4>";
    header("Location: ../index.php");
   }
   else if ($Ema == '@') {
    $_SESSION['error_email'] = "Please Enter Your Email Lowercase";
    header("Location: ../index.php");
  } 
  else if ($Sa !== true) {
    $_SESSION['error_email'] = " $Sa type sine";
    header("Location: ../index.php");
  } else if ($Sb !== true) {
    $_SESSION['error_email'] = " $Sb type sine";
    header("Location: ../index.php");
  } else if ($Sa !== true) {
    $_SESSION['error_email'] = " $Sc type sine";
    header("Location: ../index.php");
  }

  // Password Validation
  $pss = trim($password);
  $ad = str_replace(' ', '', $password);

  if (empty($password)) {
    $_SESSION['error_password'] = "<h4>Please Enter Your Password</h4>";
    header("Location: ../index.php");
  }
  else if ($pss) {
    $_SESSION['error_password'] = "Please Enter Your Password and removes whitespace";
    header("Location: ../index.php");
  } elseif ($ab) {
    $_SESSION['error_password'] = "Please Enter Your Password and removes whitespace in middole";
    header("Location: ../index.php");
  }


  // Photo Validation


  if (empty($photo)) {
    $_SESSION['error_photo'] = "<h4>Please Enter Your Photo</h4>";
    header("Location: ../index.php");
   }
  else if (end($photo) == 'jpg' || end($photo) == 'pnj'  || end($photo) == 'pdf') {
    $_SESSION['error_photo'] = "Please Enter Your Photo  '.pnj' , '.jpg' ,'.pdf'";
    header("Location: ../index.php");
  }



echo "<h1>Form submit successful</h1>";

}
 else {
  echo "  Not a Number....!";
}