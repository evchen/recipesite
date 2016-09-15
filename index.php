<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<title>Tasty Recipes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="recipe_style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%7CRaleway%7CIndie+Flower%7CLobster+Two%7CPacifico">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="html5reset.css">
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top" >
    <ul class="my-navbar w3-center w3-top w3-xlarge bg_brown" >
      <li class="w3-left w3-center menu_button"><a href="index.php">Home</a></li>
      <li class="w3-left w3-center menu_button"><a href="calendar.php">Calendar</a></li>
      <li class="w3-right w3-center menu_button">
        <?php if(!isset($_SESSION['user']))
          {$message='<a href="login.php">Log In</a>';}
          else{$message=$_SESSION['user'];}
          echo $message; ?>
        </li>

    </ul>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-opacity w3-display-container " >
    <div class="w3-display-middle w3-text-black w3-hide-small w3-hide-medium " >
      <h1 class="logo_font w3-center w3-xxlarge w3-padding-xlarge w3-wide w3-animate-opacity text_brown">Welcome to<br>  Tasty Recipes!</h1>
      <p class="w3-center w3-padding-xlarge w3-xlarge w3-animate-opacity text_brown handw">"Where food is more than just food"</p>
    </div>
    <div class="w3-display-middle w3-text-black w3-hide-large" >
      <h1 class="logo_font small w3-center w3-xlarge w3-padding-xlarge w3-wide w3-animate-opacity text_brown">Welcome to<br>Tasty Recipes!</h1>
      <p class="w3-center w3-padding-xlarge w3-large w3-animate-opacity text_brown handw" >"Where food is more than just food"</p>
    </div>
  </div>

  <div class="w3-col m12">
    <div class="w3-container w3-padding w3-center w3-white">
    <p class="text_brown">
      The tastiest recipe site on the internet! <br>
      Our calender of recipes include the best dishes of the month and you can get to it clicking here: <a href="calendar.php">"Go to Calendar"</a> <br>
      or from the calendar icon on the top-right corner of the menu.
    </p>

    <p class="text_brown">
      Don't forget to have a look at our tasty popular recipes at the bottom of this text!
    </p>
  </div>
  </div>

  <!-- Suggestion (Recipe Section) -->
  <div class="big-container">
    <div class="w3-content w3-container">
      <h2 class="w3-center w3-xlarge pop_recipe">Popular recipes</h2>

      <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
      <div class="w3-row-padding ">
        <div class="w3-col m3 w3-hover-opacity suggestion-small-container bottom_margin">
          <a href="meatballs.php">
            <img class="pop_img" src="meatballs.jpg"alt="Meatballs Recipe" >
          </a>
          <h4 class="handw">Swedish meatballs</h4>
        </div>

        <div class="w3-col m3 w3-hover-opacity suggestion-small-container bottom_margin">
          <a href="pancakes.php">
            <img class="pop_img" src="pancakes.jpg" alt="Pancakes Recipe">
          </a>
          <h4 class="handw">Pancakes</h4>
        </div>




      </div>
    </div>
  </div>

  </body>
  </html>
