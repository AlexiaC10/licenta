<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Portfolio</title>

  <link rel="stylesheet" href="../CSS/comingsoon.css">
  <link rel="stylesheet" href="../CSS/maincss.css">
</head>

<body>
  <!-- Here is our main header that is used across all the pages of our website -->


  <header>
 
  <div class="header">
   
   <div class="header-right">
    
     <a class="hov" href="home.php" data-replace="home"><span>home</span></a>
     <a class="hov" href="#" data-replace="about.me"><span>about.me</span></a>


     <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span>find jobs</span></a>
     <div id="myNav" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <div class="overlay-content">
         <a href="WebDesign.php">Web design</a>
         <a href="">Graphic design</a>
         <a href="comingsoon.php">Data entry</a>
         <a href="comingsoon.php">Marketing</a>
       </div>
     </div>
   

     <a class="hov" href="#" data-replace="tutorials" onclick="openNav2()"><span>tutorials</span></a>
     <div id="myNav2" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
       <div class="overlay-content">
         <a href="tutorials/tutorial_web.html">Web Design</a>
         <a href="comingsoon.php">Graphic design</a>
         <a href="comingsoon.php">Data entry</a>
         <a href="comingsoon.php">Marketing</a>
       </div>
     </div>
     

     <a class="hov" href="http://localhost/COD/LOGIN/index.php" data-replace="log out"><span>log out</span></a>

    
     <a class="hov" href="contact1.html" data-replace="contact"><span>contact</span></a>
     
       </div>
     
     </div>
       

    
  </header>
  <main class="content">
      <div class="wrapper">
        <h2>Coming Soon<span class="dot">.</span></h2>
        <div class="loading-bar">
          <div class="loading-progress"></div>
        </div>
        <p>We are working hard to bring you the best experience. Stay tuned!</p>
        <button class="back-button"  href="main page.html" onclick="goBack()">Go Back</button>
      </div>
    </main>
    <footer class="footer">
  <ul class="social-icon">
    <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-facebook"></ion-icon>
      </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-twitter"></ion-icon>
      </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-linkedin"></ion-icon>
      </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-instagram"></ion-icon>
      </a></li>
  </ul>
  <ul class="menu">
    <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
    <li class="menu__item"><a class="menu__link" href="#">About</a></li>
    <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
    <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
    <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

  </ul>
  <p>&copy;2024 Craineanu ALexia | All Rights Reserved</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</div>
</body>

<script>
  //menu
  function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }

  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }
  function openNav2() {
    document.getElementById("myNav2").style.height = "100%";
  }

  function closeNav2() {
    document.getElementById("myNav2").style.height = "0%";
  }


  
</script>

</html>