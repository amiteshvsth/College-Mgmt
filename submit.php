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
	<form method="post" action="submit.php">
		Full name: <input type="text" placeholder="enter your full name..." name="aname"><br><br>
		Email: <input type="Email" placeholder="enter your email address..." name="bname"><br><br>
		Contact no.: <input type="text" placeholder="enter your contact number..." name="cname"><br><br>
		Gender: <input type="text" placeholder="enter your gender..." name="dname"><br><br>
		Address: <input type="text" placeholder="enter your full address..." name="ename"><br><br>
		Ask Question: <input type="text" placeholder="ask question if any...." name="fname"><br><br>
		<button style="font-family: cursive; border-radius: 6px; font-size: 15px; color: green;">Submit</button>
	</form>
	</center>
</div>

</body>
</html>