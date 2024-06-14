<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DITTO</title>

  <link rel="stylesheet" href="../CSS/maincss.css">
</head>

<body>
  <!-- Here is our main header that is used across all the pages of our website -->

  <header>
 
  <div class="header">
   
   <div class="header-right">
    
     <a class="hov" href="#" data-replace="home"><span>home</span></a>
     <a class="hov" href="aboutme.php" data-replace="about.me"><span>about.me</span></a>


     <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span>find jobs</span></a>
     <div id="myNav" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <div class="overlay-content">
         <a href="findjobs/WebDesign.php">Web design</a>
         <a href="findjobs/GraphicDesign.php">Graphic design</a>
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

    
     <a class="hov" href="contact1.php" data-replace="contact"><span>contact</span></a>
     
       </div>
     
     </div>
       

    
  </header>

  <aside>
   
    <?xml version="1.0" encoding="UTF-8"?>
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="1000" height="550" viewBox="0 0 1002.7 344.33">
     
      <g>
        <polygon class="star-line"  stroke="#f24c3d" fill="#f24c3d" points="47.8 40.08 61.12 15.74 74.44 40.08 98.78 53.4 74.44 66.71 61.12 91.06 47.8 66.71 23.46 53.4 47.8 40.08"/>
        <polygon class="star-line"  stroke="#f2b705" fill="#f2b705" points="108.55 12.65 112.48 5.46 116.41 12.65 123.59 16.57 116.41 20.5 112.48 27.68 108.55 20.5 101.37 16.57 108.55 12.65"/>
        <polygon class="star-line" stroke="#f22e62" fill="#f22e62" points="65.13 4.59 67.64 0 70.15 4.59 74.74 7.1 70.15 9.61 67.64 14.21 65.13 9.61 60.54 7.1 65.13 4.59"/>
        <polygon class="star-line"  stroke="#038c73" fill="#038c73" points="6.31 72.71 9.76 66.4 13.21 72.71 19.52 76.16 13.21 79.61 9.76 85.93 6.31 79.61 0 76.16 6.31 72.71"/>
      </g>
      <g>
        <path class="text-line" class="cls-1" d="M65.22,61.18h92.97c24.27,0,42.54,1.18,54.79,3.54,30.28,5.77,54.73,21.92,73.35,48.43,14.61,20.86,21.92,43.84,21.92,68.94s-7.54,48.85-22.62,69.82c-18.15,25.34-41.83,41.07-71.06,47.19-7.54,1.53-14.26,2.47-20.15,2.83-5.89.35-18.85.53-38.89.53h-89.79l.53-116.66-1.06-124.61ZM173.39,72.5l-1.06,142.11,1.06,76.54c15.79-.12,27.13-.73,34.03-1.86,6.89-1.12,14.82-3.62,23.77-7.51,21.09-9.07,37.65-23.69,49.67-43.84,10.49-17.32,15.73-36.06,15.73-56.21,0-21.92-6.18-42.07-18.53-60.45-22.01-32.64-54.6-48.96-97.79-48.96l-6.88.18Z"/>
        <path class="text-line"class="cls-1" d="M428.1,109.44v5.13l-.35,27.57-.35,42.78-.53,65.05.71,36.59.35,15.91h-90.85l.88-65.05.53-57.45-.35-30.23-.53-33.58.18-6.72h90.32ZM382.32,47.57c31.11,0,46.66,8.13,46.66,24.39,0,7.9-4.1,14.05-12.28,18.47-8.19,4.42-19.71,6.63-34.56,6.63-29.58,0-44.37-8.37-44.37-25.1s14.85-24.16,44.54-24.39Z"/>
        <path class="text-line"class="cls-1" d="M567.39,47.22l-1.94,57.09-.18,5.48c10.25,0,19.56-.41,27.93-1.24,1.41-.12,2.65-.18,3.71-.18,5.18,0,7.78,2.39,7.78,7.16,0,4.42-2.71,6.62-8.13,6.62-1.65,0-3.71-.12-6.19-.35-9.31-.71-15.97-1.06-19.97-1.06h-5.13l-.18,34.24.6,68.66.46,36.73c0,8.6.65,14.61,1.96,18.03,1.3,3.42,3.55,5.13,6.75,5.13,4.26,0,8.82-2.47,13.68-7.42,4.74-4.95,8.47-11.02,11.19-18.21,2.47-6.83,5.42-10.25,8.84-10.25,4,0,6.01,2.24,6.01,6.72s-2,10.05-6.01,16.7c-4.01,6.66-8.84,12.46-14.49,17.41-13.91,12.14-31.94,18.21-54.09,18.21-20.86,0-37-6.3-48.43-18.9-5.89-6.36-9.96-13.45-12.2-21.28-2.24-7.83-3.36-18.69-3.36-32.58v-13.24l.18-37.26v-63.22c-1.65-.12-2.83-.18-3.54-.18-1.18,0-3.54.12-7.07.35-2.95.24-5.42.35-7.42.35-5.77,0-8.66-2.21-8.66-6.63s2.77-6.45,8.31-6.45c2.59,0,4.42.06,5.48.18l12.9.88v-19.97c34.88-12.61,65.28-26.45,91.21-41.54Z"/>
        <path class="text-line"class="cls-1" d="M723.99,47.22l-1.94,57.09-.18,5.48c10.25,0,19.56-.41,27.93-1.24,1.41-.12,2.65-.18,3.71-.18,5.18,0,7.78,2.39,7.78,7.16,0,4.42-2.71,6.62-8.13,6.62-1.65,0-3.71-.12-6.19-.35-9.31-.71-15.97-1.06-19.97-1.06h-5.13l-.18,34.24.6,68.66.46,36.73c0,8.6.65,14.61,1.96,18.03,1.3,3.42,3.55,5.13,6.75,5.13,4.26,0,8.82-2.47,13.68-7.42,4.74-4.95,8.47-11.02,11.19-18.21,2.47-6.83,5.42-10.25,8.84-10.25,4,0,6.01,2.24,6.01,6.72s-2,10.05-6.01,16.7c-4.01,6.66-8.84,12.46-14.49,17.41-13.91,12.14-31.94,18.21-54.09,18.21-20.86,0-37-6.3-48.43-18.9-5.89-6.36-9.96-13.45-12.2-21.28-2.24-7.83-3.36-18.69-3.36-32.58v-13.24l.18-37.26v-63.22c-1.65-.12-2.83-.18-3.54-.18-1.18,0-3.54.12-7.07.35-2.95.24-5.42.35-7.42.35-5.78,0-8.66-2.21-8.66-6.63s2.77-6.45,8.31-6.45c2.59,0,4.42.06,5.48.18l12.9.88v-19.97c34.88-12.61,65.28-26.45,91.21-41.54Z"/>
        <path class="text-line" class="cls-1" d="M874.24,104.67c18.97,0,36.94,5.24,53.91,15.73,15.67,9.66,27.63,22.86,35.88,39.59,7.3,14.73,10.96,30.34,10.96,46.84,0,11.31-2.15,22.69-6.45,34.11-4.3,11.43-10.16,21.56-17.59,30.4-10.37,12.14-23.04,21.27-38,27.4-12.26,5.07-25.04,7.6-38.36,7.6-22.27,0-42.31-6.6-60.1-19.8-13.91-10.13-24.45-23.16-31.64-39.06-6.01-13.43-9.01-27.63-9.01-42.6,0-29.22,10.61-53.5,31.82-72.82,19.91-17.91,42.78-27.04,68.58-27.4ZM869.11,115.98l-.53,178.35c3.65.24,6.19.35,7.6.35,16.38,0,32.05-4.6,47.02-13.8,14.38-8.96,25.16-20.88,32.35-35.74,5.66-11.79,8.48-24.77,8.48-38.92,0-28.43-10.49-51.49-31.46-69.18-16.97-14.27-35.41-21.41-55.33-21.41-1.65,0-4.36.12-8.13.35Z"/>
      </g>
      <g>
        <polygon class="star-line" stroke="#f22e62" fill="#f22e62" points="928.62 266.67 941.94 242.32 955.26 266.67 979.6 279.98 955.26 293.3 941.94 317.65 928.62 293.3 904.28 279.98 928.62 266.67"/>
        <polygon class="star-line" stroke="#f24c3d" fill="#f24c3d" points="987.66 242.66 991.59 235.47 995.51 242.66 1002.7 246.58 995.51 250.51 991.59 257.69 987.66 250.51 980.48 246.58 987.66 242.66"/>
        <polygon class="star-line" stroke="#038c73" fill="#038c73" points="981.9 325.34 984.41 320.74 986.92 325.34 991.51 327.85 986.92 330.36 984.41 334.95 981.9 330.36 977.31 327.85 981.9 325.34"/>
        <polygon class="star-line" stroke="#f2b705" fill="#f2b705" points="890.55 318.13 894.01 311.82 897.46 318.13 903.77 321.58 897.46 325.03 894.01 331.34 890.55 325.03 884.24 321.58 890.55 318.13"/>
      </g>
    </svg>
    

  </aside>
  <div class="row">
    <div class="side">
      <h2>Craineanu Alexia</h2>
      <p>(founder of Ditto)</p>
      <img src="../PHOTOS/me.png" style="width:400px;height:550px;"></img> 
      
    </div>
    <div class="main">
      <h2>Ce este Ditto?</h2>
      
      <p>Într-o lume în care creativitatea și inovația sunt esențiale, "Ditto" își propune să devină hub-ul central pentru tinerii freelanceri talentați, oferindu-le oportunitatea de a-și transforma visurile în realitate. "Ditto" este o platformă de freelancing special concepută pentru a încuraja și sprijini tinerii pasionați de design grafic, web design și publicitate să participe la concursuri și proiecte reale. Prin această platformă, tinerii creatori își pot construi un portofoliu impresionant, demonstrându-și abilitățile și atrăgând potențiali clienți și angajatori.</p>
      <br>
      <h2>Ce inseamna Ditto?</h2>
      
      <p>"Ditto" este un termen modern și vibrant, folosit frecvent în conversațiile zilnice pentru a exprima acordul sau similaritatea. Într-un context tineresc și trendy, "Ditto" captează spiritul unei generații care valorifică originalitatea și conexiunea. "Ditto" reprezintă acordul tacit între creatori și platformă: aceea de a colabora, de a împărtăși idei și de a construi împreună un spațiu unde creativitatea nu are limite.</p>
      <br>
      <h2>Ce scop are Ditto?</h2>
      <p>Scopul principal al "Ditto" este de a încuraja tinerii să-și urmeze pasiunea în domeniul creativ și al publicității. Platforma oferă un mediu sigur și susținător, unde aceștia pot explora, experimenta și evolua. "Ditto" este locul unde ideile prind viață și unde fiecare tânăr are ocazia să strălucească, indiferent de experiența anterioară. Prin participarea la concursuri și proiecte, tinerii designeri pot câștiga recunoaștere, premii și chiar colaborări pe termen lung.</p>
    </div>
  </div>
 
  
  </div>
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
    //menu
    function openNav() {
     document.getElementById("myNav").style.height = "100%";
   }

   function closeNav() {
     document.getElementById("myNav").style.height = "0%";
     window.onscroll = function() {scrollFunction()};



   } function openNav2() {
     document.getElementById("myNav2").style.height = "100%";
   }

   function closeNav2() {
     document.getElementById("myNav2").style.height = "0%";
     window.onscroll = function() {scrollFunction()};



   }
 </script>
</html>