<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../CSS/maincss.css">
    <title>Login</title>
 
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
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                            <p>Wrong Username or Password</p>
                        </div><br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button>";
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
            }
        ?>
        <form action="" method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Login" required>
            </div>
            <div class="links">
                Don't have an account? <a href="register.php">Sign Up Now</a>
            </div>
        </form>
    </div>
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
</script>
</body>
</html>
