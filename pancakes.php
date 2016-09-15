<?php

include 'comment.php';
session_start();

// Set session variables
$r_id=2;
$_SESSION["r_id"] = $r_id;


?>
<!DOCTYPE html>
<html lang="en">
<title>Pancakes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%7CRaleway%7CIndie+Flower%7CLobster+Two%7CPacifico">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="html5reset.css">
<link rel="stylesheet" href="recipe_style.css">
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

<div class="recipe-container text_brown">
  <!-- small and medium image displayer-->
  <div class="w3-col m12 w3-hide-large bottom_margin">
    <h2 class="text_brown w3-hide-large" style="text-align:center">Pancakes</h2>
    <img src="pancakes.jpg" class="image_resize " alt="pancakes image">
</div>

  <!-- large image displayer -->
  <div class="w3-col m12 w3-hide-medium w3-hide-small recipe-head-container" >
    <div class="image_container" style="background-image:url('pancakes.jpg');">
      <h1>Pancakes</h1>
    </div>
  </div>


  <!-- ingredients -->
  <div class="w3-col m8 list_padding">
    <h3>Ingredients</h3>
    <ul>
      <li>100g plain flour</li>
      <li>2 egg</li>
      <li>300ml semi-skimmed milk</li>
      <li>1 tbsp sunflower oil or vegetable, plus extra for frying</li>
      <li>pinch salt</li>
    </ul>

  </div>




  <!-- Nutrition value -->
  <div class="w3-col m4 nutri_container">
    <h4 class="nutri_facts">Nutrition Facts</h4>
    <p class="nutri_text">
      <i>4 servings</i>
    </p>
    <table class="full_table">
      <tr>
        <td class="left">Calories</td>
        <td class="right">258kCals</td>
      </tr>
      <tr>
        <td class="left">Carbohydrate</td>
        <td class="right">44g</td>
      </tr>
      <tr>
        <td class="left">Fat</td>
        <td class="right">16g</td>
      </tr>
      <tr>
        <td class="left">Protein</td>
        <td class="right">12g</td>
      </tr>
      <tr>
        <td class="left">Cholesterol</td>
        <td class="right">88mg</td>
      </tr>
      <tr>
        <td class="left">Sodium</td>
        <td class="right">780mg</td>
      </tr>

    </table>
  </div>
  <!-- Instruction -->
  <div class="w3-col m12 list_padding bottom_margin">
    <h3>Instructions</h3>
    <ul>
      <li>Blending in the flour: Put the flour and a pinch of salt into a large mixing bowl and make a well in the centre. Crack the eggs into the middle, then pour in about 50ml milk and 1 tbsp oil. Start whisking from the centre, gradually drawing the flour into the eggs, milk and oil. Once all the flour is incorporated, beat until you have a smooth, thick paste. Add a little more milk if it is too stiff to beat.
      </li>
      <li>Finishing the batter: Add a good splash of milk and whisk to loosen the thick batter. While still whisking, pour in a steady stream of the remaining milk. Continue pouring and whisking until you have a batter that is the consistency of slightly thick single cream. Traditionally, people would say to now leave the batter for 30 mins, to allow the starch in the flour to swell, but there’s no need.
      </li>
      <li>Getting the right thickness: Heat the pan over a moderate heat, then wipe it with oiled kitchen paper. Ladle some batter into the pan, tilting the pan to move the mixture around for a thin and even layer. Quickly pour any excess batter into a jug, return the pan to the heat, then leave to cook, undisturbed, for about 30 secs. Pour the excess batter from the jug back into the mixing bowl. If the pan is the right temperature, the pancake should turn golden underneath after about 30 secs and will be ready to turn.
      </li>
      <li>Flipping pancakes: Hold the pan handle, ease a fish slice under the pancake, then quickly lift and flip it over. Make sure the pancake is lying flat against base of the pan with no folds, then cook for another 30 secs before turning out onto a warm plate. Continue with the rest of the batter, serving them as you cook or stack onto a plate. You can freeze the pancakes for 1 month, wrapped in cling film or make them up to a day ahead.
      </li>
    </ul>

  </div>
  <!-- Line -->
  <div class="w3-col m12" >
    <hr>
  </div>

  <!-- Write Comment -->
  <div class="w3-col m12 bottom_margin top_margin_small">
      <div class="w3-container w3-padding">
        <h6 class="w3-opacity">Comment</h6>
        <p contenteditable="true" class="w3-border w3-padding">Write your comment here..</p>
        <button type="button" class="w3-btn w3-theme w3-right bg_brown top_margin_small"><i class="fa fa-pencil"></i> Post</button>
      </div>
      <hr>
  </div>

  <!-- Comments -->
  <div class="w3-col m12 bottom_margin">
    <h5><b>Recent Comments</b></h5>
    <br>
    <?php
    $var_i = 0;

    while($var_i<2){
      $c = get_comments($var_i, $r_id);
      $u = get_user($var_i, $r_id);
      echo

    "<div class='w3-row'>
      <div class='w3-col m2 text-center'>
        <img class='w3-circle avatar_pic' src='a_avatar.png' alt='Avatar Image'>
      </div>
      <div class='w3-col m10 w3-container'>
        <h4>" .$u.  "<span class='w3-opacity w3-medium'> Sep 03, 2016, 9:12 PM </span></h4>
        <p> " .$c. "</p><br>
      </div>
    </div>
    <hr>";
    ++$var_i;
    }
      ?>

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
          <img src="meatballs.jpg" class="pop_img" alt="Meatballs Recipe">
        </a>
        <h4 class="handw">Swedish meatballs</h4>
      </div>

      <div class="w3-col m3 w3-hover-opacity suggestion-small-container bottom_margin">
        <a href="pancakes.php">
          <img src="pancakes.jpg" class="pop_img" alt="Pancakes Recipe">
        </a>
        <h4 class="handw">Pancakes</h4>
      </div>
    </div>
  </div>
</div>
</body>
</html>
