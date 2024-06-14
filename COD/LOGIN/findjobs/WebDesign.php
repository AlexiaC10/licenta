<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DITTO</title>

  <link rel="stylesheet" href="../../CSS/maincss.css">
  <link rel="stylesheet" href="../../CSS/findjobs.css">
</head>

  <!-- Here is our main header that is used across all the pages of our website -->

  <header>

    <div class="header">
   
      <div class="header-right">
       
        <a class="hov" href="../home.php" data-replace="home"><span>home</span></a>
        <a class="hov" href="../about.php" data-replace="about.me"><span>about.me</span></a>

        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="#">Web design</a>
            <a href="GraphicDesign.php">Graphic design</a>
            <a href="../comingsoon.php">Data entry</a>
            <a href="../comingsoon.php">Marketing</a>
          </div>
        </div>
        <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span style="color:blue">web_design </span></a>

        
        <div id="myNav2" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
          <div class="overlay-content">
            <a href="../tutorials/tutorial_web.php">Web Design</a>
            <a href="../comingsoon.php">Graphic design</a>
            <a href="../comingsoon.php">Data entry</a>
            <a href="../comingsoon.php">Marketing</a>
          </div>
        </div>
        <a class="hov" href="#" data-replace="tutorials" onclick="openNav2()"><span>tutorials</span></a>
        <a class="hov" href="http://localhost/COD/LOGIN/index.php" data-replace="log out"><span>log out</span></a>
        <a class="hov" href="../contact1.php" data-replace="contact"><span>contact</span></a>
        
          </div>
        
        </div>
       

    
  </header>
  <div class="bg">
    <h1>web_design</h1>
  </div>

  <div class="ag-format-container">
    <div class="ag-courses_box">
      <div class="ag-courses_item">
        <a href="webdesignproduct.php" class="ag-courses-item_link">
          <div class="ag-courses-item_bg"></div>
  
          <div class="ag-courses-item_title">
            Website for TechNova: The Ultimate Design Challenge
          </div>
  
          <div class="ag-courses-item_date-box">
            Start:
            <span class="ag-courses-item_date">
              10.06.2024
            </span>
          </div>
          <div class="ag-courses-item_date-box">
            End:
            <span class="ag-courses-item_date">
              10.07.2024
            </span>
          </div>
        </a>
      </div>
  
      <div class="ag-courses_item">
        <a href="#" class="ag-courses-item_link">
          <div class="ag-courses-item_bg"></div>
  
          <div class="ag-courses-item_title">
            Crafting the Digital Face of GreenWave Solutions
          </div>
  
          <div class="ag-courses-item_date-box">
            Start:
            <span class="ag-courses-item_date">
              unknown
            </span>
          </div>
        
        </a>
      </div>
  
      <div class="ag-courses_item">
        <a href="#" class="ag-courses-item_link">
          <div class="ag-courses-item_bg"></div>
  
          <div class="ag-courses-item_title">
            BlueSky Enterprises Web Design Excellence Contest
          </div>
  
          <div class="ag-courses-item_date-box">
            Start:
            <span class="ag-courses-item_date">
              unknown
            </span>
          </div>
        </a>
      </div>
  
      <div class="ag-courses_item">
        <a href="#" class="ag-courses-item_link">
          <div class="ag-courses-item_bg"></div>
  
          <div class="ag-courses-item_title">
            Designing the Future of Stellar Innovations Online
          </div>
  
          <div class="ag-courses-item_date-box">
            Start:
            <span class="ag-courses-item_date">
              unknown
            </span>
          </div>
        </a>
      </div>
  
      <div class="ag-courses_item">
        <a href="#" class="ag-courses-item_link">
          <div class="ag-courses-item_bg"></div>
  
          <div class="ag-courses-item_title">
            Reimagining Quantum Dynamics: Web Design Competition
          </div>
  
          <div class="ag-courses-item_date-box">
            Start:
            <span class="ag-courses-item_date">
              unknown
            </span>
          </div>
        </a>
      </div>
  
  
     
  
   
  
    </div>
  </div>
 
<div class="footer">
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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  
</body>
<script> 
  //menu
   function openNav() {
     document.getElementById("myNav").style.height = "100%";
   }

   function closeNav() {
     document.getElementById("myNav").style.height = "0%";
     window.onscroll = function() {scrollFunction()};



   }
   function openNav2() {
     document.getElementById("myNav2").style.height = "100%";
   }

   function closeNav2() {
     document.getElementById("myNav2").style.height = "0%";
     window.onscroll = function() {scrollFunction()};



   }
  
  

  
</script>
</html>