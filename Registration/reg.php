<?php
$conn=mysqli_connect("localhost","root","","college_demo");
if($conn)
{
	echo "Successfull database";
} 
else{
	echo "connection failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-image: url("cafe.jpg");
			background-size: cover;
		}
		.info{
			color: white;
			font-family: Cooper Black;
		}
		form{
			color: white;
			width: 600px;
			font-size: 22px;
			font-family: Cooper Black;
		}
		form input{
			font-size: 15px;
			font-family: cursive;
			border: 2px solid orange;
			border-radius: 6px;
		}
		form input:hover{color: green;}


	</style>
</head>
<body>
	<div class="info">
	<marquee>
	<h3> Email: familymedicare@gmail.com </h3>
	<h3> Contact: 7894561235 </h3>
	<h3> Address: NH-27, Near Bhagwati resort, Kivarli </h3>
</marquee>
</div>
<div class="con">
	<center>
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
            <button style="font-family: cursive; border-radius: 6px; font-size: 15px; color: green;">Submit</button>
</form> 
	</center>
</div>

</body>
</html>