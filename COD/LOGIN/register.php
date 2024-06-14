<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../CSS/maincss.css">
    <title>Register</title>
</head>
<body>

 
<header>
<div class="header">
   
   <div class="header-right">
    
     <a class="hov" href="mainpage.php" data-replace="home"><span>home</span></a>
     


     <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span>find jobs</span></a>
     <div id="myNav" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <div class="overlay-content">
         <a href="findjobs/WebDesign.html">Web design</a>
         <a href="findjobs/GraphicDesign.html">Graphic design</a>
         <a href="../../../../HTML/comingsoon.html">Data entry</a>
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

    
     <a class="hov" href="contact1.html" data-replace="contact"><span>contact</span></a>
     
       </div>
     
     </div>
</header>

      <div class="container">
    
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

          
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
      
      <script> 
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
</body>
</html>