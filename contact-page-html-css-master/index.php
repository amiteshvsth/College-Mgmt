<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section id="navs">
        <nav>
            <div class="logo">
      St.Paul's sr. sec.</div>
      <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
              <i class="fas fa-bars"></i>
            </label>
            <ul>
      <li><a class="active" href="../index.php">Home</a></li>
      <li><a href="../index.php">Services</a></li>
      <li><a href="../index.php">Courses</a></li>
      <li><a href="../about us/about.php">About us</a></li>
      <li><a href="../our gallery/gallery.php">Gallery</a></li>
      </ul>
      </nav>
    </section>
    <section id="fancy-form">
        <div class="container">
         <div class="form-sections">
           <!-- Form left -->
           <div class="Form-left">
             <h1>Get In Touch</h1>
             <div class="line"></div> <!--border-bottom line-->
             <p>Contact us for latest news and updates. subscribe our news letter :)</p><br>
     
             <!--first Heading -->
             <h4>ADDRESS</h4>
              <span>St. Paul's sr. sec. School, Arbuda Industrial Area,<br>Ghandhi-Nagar, Aburoad, sirohi, Rajasthan</span>
              <hr><br><br>
     
              <!--second Heading -->
             <h4>PHONE</h4>
              <span>9928400050</span>
              <hr><br><br>
     
            <!--third Heading -->
             <h4>EMAIL</h4>
              <span>st.paul21@gmail.com</span>
              <hr> <br>
           </div>
     
           <!-- form right -->
           <div class="Form-right">
             <h1>Contact Us</h1>
             <div class="line"></div>
             <!-- form -->
             <form action="" method="POST">
               <h5>NAME</h5>
               <input type="text" name="Name"><br><br>
               <h5>EMAIL</h5>
               <input type="email" name="Email"><br><br>
               <h5>PHONE NO.</h5> 
               <input type="number" name="Number"><br><br>
               <h5>YOUR MESSAGE</h5>
               <textarea name="Message" id="" cols="50" rows="7"></textarea><br>
               <button type="submit" name="submit">Submit</button>
             </form>
           </div>
         </div>
         </div>
       </section>
       <footer>
        <p>Copyright &copy; <script>document.write(new Date().getfullyear());</script>, 2021 by Sakshi Pal</p>
      </footer>
    </body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Number = $_POST['Number'];
  $Message = $_POST['Message'];

  $insertquery = " insert into contact(Name,Email,Number,Message)
   values('$Name','$Email','$Number','$Message') ";

  $res = mysqli_query($con,$insertquery);

  if($res){
    ?>
    <script>
      alert("data insert properly");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("data not insert properly");
    </script>
    <?php
  }
}


?>