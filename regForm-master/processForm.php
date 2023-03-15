<?php
include("conn.php");
  $status = "";

  if(isset($con, $_POST['register'])) {

    $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile_no = mysqli_real_escape_string($con, $_POST['mobile_no']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $cources = mysqli_real_escape_string($con, $_POST['cources']);
      
    if(!empty($_POST['hobbies'])) {
        $hobbies = "";
        foreach($_POST['hobbies'] as $hobb) {
            $hobbies .= $hobb." "; 
        }
    }
      
    $bio = mysqli_real_escape_string($con, $_POST['bio']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword =mysqli_real_escape_string($con, $_POST['confirmPassword']);

    $insert = "INSERT INTO users(fullName,email,mobile_no,dob,gender,cources,hobbies,bio,password)
     VALUES('$fullName','$email',$mobile_no,'$dob','$gender','$cources','$hobbies','$bio','$password')";

    if($password == $confirmPassword) {
        if (mysqli_query($con, $insert)) {
            $status = '
            <div class="alert alert-success">
              <strong>Success!</strong> User Registered<br>
            </div>';
        } else {
          $status = '
          <div class="alert alert-danger">
            <strong>Failed!</strong> Not Registered!
          </div>';
        }
    } else {
        $status = '
          <div class="alert alert-warning">
            <strong>Failed!</strong> Password does not match!
          </div>';
    }
  }
?>