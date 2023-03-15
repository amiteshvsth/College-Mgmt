<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
  </head>
  <body>
  <nav id="space">
    <div class="logo">St. Paul's</div>
<input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
<li><a class="active" href="../index.php">Home</a></li>
<li><a href="../index.php">About</a></li>
<li><a href="../index.php">Services</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="../our cources/cources.php">Cources</a></li>
</ul>
</nav>

  <section id="img">
    <div class="wrapper">
      <div class="gallery">
        <div class="image"><span><img src="img/b.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/sport1.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/kho-kho.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/St PaulS School.png" alt=""></span></div>
        <div class="image"><span><img src="img/img-1.jpeg" alt=""></span></div>
        <div class="image"><span><img src="img/img-2.jpeg" alt=""></span></div>
        <div class="image"><span><img src="img/img-3.jpeg" alt=""></span></div>
        <div class="image"><span><img src="img/sport1.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/img-5.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/img-6.jpeg" alt=""></span></div>
        <div class="image"><span><img src="img/b.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/clg Tour.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/school1.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/farewell.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/school2.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/farewell.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/sport1.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/kho-kho.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/sport2.jpg" alt=""></span></div>
        <div class="image"><span><img src="img/about.jpg" alt=""></span></div>
      </div>
    </div>
    <div class="preview-box">
      <div class="details">
        <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
        <span class="icon fas fa-times"></span>
      </div>
      <div class="image-box">
        <div class="slide prev"><i class="fas fa-angle-left"></i></div>
        <div class="slide next"><i class="fas fa-angle-right"></i></div>
        <img src="" alt="">
      </div>
    </div>
    <div class="shadow"></div>
  </section>

    <footer>
      <p>Copyright &copy; <script>document.write(new Date().getfullyear());</script>, 2021 by Sakshi Pal</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>