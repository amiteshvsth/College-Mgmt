<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accountant Appliaction form Apply here</title> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<!-- navbar -->


<body  style="background-color: rgb(92, 171, 182)" text-align="center">
  <header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1>St. Paul's sr. sec. School, Aburoad</h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>YouTuber<span>.</span></h1>
            </div>
            <div class="close">
              <i class="fas fa-times"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="../index.php" class="nav-link scroll-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link scroll-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link scroll-link">Cources</a>
            </li>
            <li class="nav-item">
              <a href="#skills" class="nav-link scroll-link">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link scroll-link">Contact us</a>
            </li>
          </ul>
        </div>

        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
  </header>
    <div class="container mb-5">
        <h1 class="text-center mt-2">Registration Form</h1>
        <hr class="w-25 text-center">
        <h6 class="text-center">(Welcome to our School)</h6>
        <center>
        <div class="col-md-8">
        <legend>Personal Details</legend>
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Candidate Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ente Your Name"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mother Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mother Name"required>
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Father Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Father Name"required>
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Contact Number"required>
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Gender</label>
   <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
   Male
  </label>
</div>
     <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
   Female
  </label>
</div>
  </div>
             <div class="form-group">
    <label for="exampleInputPassword1">Date Of Birth</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder=""required>
  </div>
            <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
   <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
   OBC
  </label>
</div>
     <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
  SC
  </label>
</div>
               
   <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
  ST
  </label>
</div>
     <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
   General
  </label>
</div>
  </div>

             <div class="form-group">
    <label for="exampleInputPassword1">Parmanent Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Address"required>
  </div>
            <div class="form-group">
            <label>Class:</label>
<select>
     <option selected="no"></option>
          <option>Nursery</option>
		  <option>LKG</option>
		  <option>HKG</option>
		  <option>1st</option>
		  <option>2nd</option>
      <option>3rd</option> 
      <option>4th</option>
		  <option>5th</option>
		  <option>6th</option>
      <option>7th</option>
      <option>8th</option>
		  <option>9th</option>
		  <option>10th</option>
      <option>11th</option>
      <option>12th</option>
</select>
                

            </div>
            <legend>Photo & privious year marksheet</legend>
            <div class="form-group">
    <label for="exampleInputPassword1">Photo</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder=""required>
  </div>
       
            <div class="form-group">
    <label for="exampleInputPassword1">privious year marksheet</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder=""required>
  </div>  
            <div class="form-check form-check-inline">
            <input type="checkbox"name="c1"class="form-check-input">  <h6>If u want to agree the terms & conditions to continue click on checkbox.Check your details carefully because once form had submitted that you can't change the deatails.</h6>
            </div>
</form> 
            <button type="submit"class="btn btn-primary"onclick = "window.location.href = 'submit.html'">Submit</button>
        </div> 
</center>
    
    </div>
    </body>
</html>






































