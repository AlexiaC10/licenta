<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DITTO</title>
  <link rel="stylesheet" href="../CSS/maincss.css">
  <link rel="stylesheet" href="../CSS/contact1.css">
</head>

<body>
   
  <header>
    <div class="header">
   
        <div class="header-right">
         
          <a class="hov" href="home.php" data-replace="home"><span>home</span></a>
          
  
  
          <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span>find jobs</span></a>
          <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <a href="findjobs/WebDesign.html">Web design</a>
              <a href="findjobs/GraphicDesign.html">Graphic design</a>
              <a href="comingsoon.html">Data entry</a>
              <a href="comingsoon.html">Marketing</a>
            </div>
          </div>
        
  
          <a class="hov" href="#" data-replace="tutorials" onclick="openNav2()"><span>tutorials</span></a>
          <div id="myNav2" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
            <div class="overlay-content">
              <a href="tutorials/tutorial_web.html">Web Design</a>
              <a href="comingsoon.html">Graphic design</a>
              <a href="comingsoon.html">Data entry</a>
              <a href="comingsoon.html">Marketing</a>
            </div>
          </div>
         
          <a class="hov" href="http://localhost/COD/LOGIN/index.php" data-replace="login"><span>login</span></a>
  
         
          <a class="hov" href="#" data-replace="contact"><span>contact</span></a>
          
            </div>
          
          </div>
  </header>

  <div class="page-container">
    <div class="container2">
      <h1>Contact Us</h1>
      <form id="contactForm">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Submit</button>
        <div class="loader" id="loader"></div>
        <div id="responseMessage"></div>
      </form>
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
  <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Show loader animation
      document.getElementById('loader').style.display = 'block';

      // Simulate sending data (replace with actual submission logic)
      setTimeout(function() {
        // Hide loader
        document.getElementById('loader').style.display = 'none';

        // Display success message
        document.getElementById('responseMessage').innerText = 'Message sent successfully!';

        // Reset form
        document.getElementById('contactForm').reset();
      }, 2000); // Simulate 2 seconds delay, replace with actual submission logic
    });
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
</body>

</html>
