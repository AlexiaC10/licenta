<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DITTO</title>
  <link rel="stylesheet" href="../../CSS/maincss.css">
  <link rel="stylesheet" href="../../CSS/concurs.css">
</head>

<body>

  <header>
    <div class="header">
   
      <div class="header-right">
       
        <a class="hov" href="../home.php" data-replace="home"><span>home</span></a>


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

  <main class="container1">
    <div class="centered-content">
      <div class="left-column">
        <h2>Brief for the Contest "Website for TechNova: The Ultimate Design Challenge</h2>

        <p id="daysLeft">Days Left Until Contest Closes: [Calculate and display days remaining using JavaScript]</p>
        <div class="contest-description">
          <p>Company Description:</p>
          <p1>TechNova is a global leader in innovative technological solutions, specializing in cutting-edge software
            development and IT services. With a presence on five continents and a team of passionate experts, TechNova
            aims to transform the way companies leverage technology to achieve their goals.</p1>
            <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
          <p>Contest Objective:</p>
          <p1>We are seeking talented designers to create a new website for TechNova. This website should reflect our
            innovation, professionalism, and commitment to excellence. We want the website to be not only functional but
            also aesthetically pleasing, capturing the essence of our brand.</p1>
            <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
          <p>Website Requirements:</p>
          <ul>
            <p1>
              <p2>Visual Design:</p2>

               <li> Modern Look: Clean, professional design with an innovative color palette.</li>
               <li> Branding: Seamless integration of our logo and brand elements.</li>
               <li> High-Quality Media: Use of top-quality images and graphics.</li>
               <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
              
              <p2>Functionality:</p2>
           
                <li>Easy Navigation: Clear, structured menu for easy access.</li>
                <li>  Responsive Design: Optimized for desktop, tablet, and mobile.</li>
                <li>SEO-Friendly: Structured for search engine indexing.</li>
                <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
             <p2> Content:</p2>

             <li>Home Page: Concise TechNova presentation with attention-grabbing elements.</li> 
             <li> About Us: Information about our mission, vision, and team.</li> 
             <li> Services: Detailed descriptions of our offerings.</li> 
             <li>Case Studies: Examples of successful projects and client testimonials.</li> 
             <li>Contact: Simple contact form, map, and essential details.</li>
             <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
              <p2>Interactivity:</p2>

             <li> Blog: Section for tech articles and news.</li>
             <li>Social Media Links: Integration of our social media profiles.</li>
             <li>Live Chat: Real-time chat option with representatives.</li>
            </p1>
            <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
          </ul>
          <p>Evaluation Criteria:</p>
          <ul>
          <p1><li>Creativity: Innovative and unique design.</li>
           <li> User Experience: Ease of navigation and interaction.</li>
           <li> Brand Alignment: Consistency with TechNova’s values and image.</li>
            <li>Technical Quality: Speed and compatibility across devices.</li></p1>
          </ul>
          <hr style="width:80%;text-align:left;margin-left:0">
               <p><br/</p>
          <p>Participation:</p>
           <p1> Register on our contest platform and submit your design with a brief concept presentation.</p1>
           <hr style="width:80%;text-align:left;margin-left:0">
           <p><br/</p>
            <h2>Good luck! We look forward to your innovative designs!</h2>
        </div>
      </div>
      
    </div>

    <section class="logo-submission">
      <h2>Website Submission</h2>
      <form id="logoForm" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>
        <br>
        <input type="file" id="logoFile" name="logoFile" accept=".jpg, .jpeg, .png" required>
        <br>
        <button type="submit">Submit</button>
      </form>
      <p id="congratsMessage" style="display: none; color: green;">Congratulations! Your logo has been submitted.</p>
    </section>
  </main>

  <footer class="footer">
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-facebook"></ion-icon></a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-twitter"></ion-icon></a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon
            name="logo-instagram"></ion-icon></a></li>
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
  <script>


    // Funcție pentru a calcula și afișa zilele rămase până la închiderea concursului
    function calculateDaysLeft() {
      // Data în care se închide concursul (31 decembrie 2025, 23:59:59 ora locală)
      const contestEndDate = new Date('2024-07-11T23:59:59');
      const currentDate = new Date('2024-06-10T23:59:59');

      // Calculăm diferența în milisecunde între data curentă și data de închidere a concursului
      const difference = contestEndDate.getTime() - currentDate.getTime();

      // Calculăm zilele rămase
      const daysLeft = Math.ceil(difference / (1000 * 3600 * 24));

      // Afișăm rezultatul în elementul cu id-ul 'daysLeft'
      const daysLeftElement = document.getElementById('daysLeft');
      daysLeftElement.textContent = `Days Left Until Contest Closes: ${daysLeft}`;
    }

    // Funcție pentru validarea formularului de încărcare a logo-ului
    function validateForm() {
      const name = document.getElementById('name').value.trim();
      const description = document.getElementById('description').value.trim();
      const logoFile = document.getElementById('logoFile').value.trim();

      // Verificăm dacă toate câmpurile sunt completate
      if (name === '' || description === '' || logoFile === '') {
        alert('Please fill in all fields.');
        return false; // Prevenim trimiterea formularului dacă nu sunt completate toate câmpurile
      }

      // Aici puteți adăuga alte condiții de validare, cum ar fi dimensiunea fișierului sau tipul de fișier acceptat

      // Dacă totul este valid, afișăm mesajul de felicitare
      const congratsMessage = document.getElementById('congratsMessage');
      congratsMessage.style.display = 'block';

      // Returnăm false pentru a preveni trimiterea formularului
      return false;
    }

    // Afișăm zilele rămase când pagina este încărcată
    document.addEventListener('DOMContentLoaded', function () {
      calculateDaysLeft(); // Calculăm și afișăm zilele rămase
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