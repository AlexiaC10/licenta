<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Coming Soon</title>
  <link rel="stylesheet" href="../CSS/comingsoon.css">
  <link rel="stylesheet" href="../CSS/maincss.css">
</head>

<body>
    <header>
 
        <div class="header">
       
          <div class="header-right">
           
            <a class="hov" href="main page.html" data-replace="home"><span>home</span></a>
            
    
    
           
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="findjobs/WebDesign.html">Web design</a>
                <a href="findjobs/GraphicDesign.html">Graphic design</a>
                <a href="coming soon.html">Data entry</a>
                <a href="pack.html">Marketing</a>
              </div>
            </div>
            <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span>find jobs</span></a>
    
           
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="port.html">Web Design</a>
                <a href="pack.html">Graphic design</a>
                <a href="pack.html">Data entry</a>
                <a href="pack.html">Marketing</a>
              </div>
            </div>
            <a class="hov" href="tutorials/tutorial_web.html" data-replace="tutorials" onclick="openNav()"><span>tutorials</span></a>
            <a class="hov" href="http://localhost/COD/LOGIN/index.php" data-replace="login"><span>login</span></a>
    
           
            <a class="hov" href="#" data-replace="contact"><span>contact</span></a>
            
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
      <p>&copy;2024 Craineanu Alexia | All Rights Reserved</p>
    </footer>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    function goBack() {
      window.history.back();
    }
    function openNav() {
     document.getElementById("myNav").style.height = "100%";
   }

   function closeNav() {
     document.getElementById("myNav").style.height = "0%";
     window.onscroll = function() {scrollFunction()};



   }
  </script>
</body>

</html>
