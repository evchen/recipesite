<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<title>Swedish Meatballs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%7CRaleway%7CIndie+Flower%7CLobster+Two%7CPacifico">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="html5reset.css">
<link rel="stylesheet" href="recipe_style.css">
<body>
  <?php $r_id=1;  ?>
  <!-- Navbar (sit on top) -->
  <div class="w3-top" >
    <ul class="my-navbar w3-center w3-top w3-xlarge bg_brown" >
      <li class="w3-left w3-center menu_button"><a href="index.html"><i class="fa fa-home"></i></a></li>
      <li class="w3-left w3-center menu_button"><a href="calendar.html">Calendar</a></li>
      <li class="w3-right w3-center menu_button">
        <?php if(!isset($_SESSION["user"]))
          {$message='<a href="login.php">Log In</a>';}
          else{$message=$_SESSION["user"];}
          echo $message; ?>
        </li>

    </ul>
  </div>
  <div class="recipe-container text_brown">
    <!-- small and medium image displayer-->
    <div class="w3-col m12 w3-hide-large bottom_margin">
      <h2 class="text_brown w3-hide-large" style="text-align:center ">Swedish Meatballs </h2>
      <img src="meatlballs.jpg" class="image_resize " alt="meatballs image">
  </div>

    <!-- large image displayer -->
    <div class="w3-col m12 w3-hide-medium w3-hide-small recipe-head-container" >
      <div class="image_container" style="background-image:url('meatballs.jpg');">
        <h1>Swedish Meatballs</h1>
      </div>
    </div>


  <!-- ingredients -->
  <div class="w3-col m8 list_padding">
    <h3>Ingredients</h3>
    <ul>
      <li>1/2 cup milk (whole, 2%, or skim</li>
      <li>1/2 cup fine breadcrumbs</li>
      <li>1 large egg</li>
      <li>1 teaspoon salt</li>
      <li>Freshly ground black pepper</li>
      <li>1/2 cup grated Parmesan cheese</li>
      <li>1/4 cup finely minced Italian parsley</li>
      <li>1 pound ground meat such as beef, pork, turkey, chicken, or veal, or a mix</li>
      <li>1/2 cup finely chopped onion (or grated on a coarse grater) from 1 small yellow onion</li>
      <li>1 clove garlic, finely minced</li>
    </ul>

  </div>




  <!-- Nutrition value -->
  <div class="w3-col m4 nutri_container" style="margin-top:2%;padding-left:1%;padding-right:1%">
    <h4 class="nutri_facts">Nutrition Facts</h4>
    <p class="nutri_text">
      <i>4 servings</i>
    </p>
    <table style="width:100%">
      <tr>
        <td class="left">Calories</td>
        <td class="right">399kCals</td>
      </tr>
      <tr>
        <td class="left">Carbohydrate</td>
        <td class="right">20g</td>
      </tr>
      <tr>
        <td class="left">Fat</td>
        <td class="right">23g</td>
      </tr>
      <tr>
        <td class="left">Protein</td>
        <td class="right">27g</td>
      </tr>
      <tr>
        <td class="left">Cholesterol</td>
        <td class="right">164mg</td>
      </tr>
      <tr>
        <td class="left">Sodium</td>
        <td class="right">2,400mg</td>
      </tr>
      <tr>
        <td class="left">Fiber</td>
        <td class="right">1g</td>
      </tr>
    </table>

  <!-- Instruction -->
  </div>
  <div class="w3-col m12 list_padding bottom_margin">
    <h3>Instructions</h3>
    <ul>
      <li>Combine the milk and breadcrumbs: Pour the milk over the breadcrumbs in a small bowl and set aside while preparing the rest of the meatball mix. The breadcrumbs will absorb the milk and become soggy.
      </li>
      <li>Whisk the egg, salt, pepper, Parmesan, and parsley: Whisk the egg in a large bowl until blended. Whisk in the salt and a generous quantity of black pepper, then whisk in the Parmesan and parsley.
      </li>
      <li>Combine the egg and ground meat: Add the meat to the egg mixture. Use your hands to thoroughly mix the egg into the ground meat.
      </li>
      <li>Add the onions and soaked breadcrumbs: Add the onions, garlic, and soaked breadcrumbs to the meat. Mix them thoroughly into the meat with your fingers. Try not to overwork the meat; pinch the meat between your fingers rather than kneading it.
      </li>
      <li>
        Form the meat into meat balls: Pinch off a piece of the meat mixture and gently roll between your hands to form 1 1/2-inch meatballs. Continue shaping until all the meat is used.
      </li>
      <li>
        To roast the meatballs in the oven: Arrange the meatballs spaced slightly apart on a baking sheet. Cook under the broiler for 20 to 25 minutes or bake at 400 &#8457; for 25 to 30 minutes. (Watch closely if cooking meatballs made with lean meat.) The meatballs are done when cooked through and the outsides are browned, and when they register 165 &#8457; in the middle on an instant read thermometer. Serve immediately.
      </li>
      <li>
        To cook the meatballs in sauce: Bring a marinara sauce or other pasta sauce to a simmer and add as many meatballs as will fit comfortably in the pan. Cover and simmer for 30 to 35 minutes. The meatballs are done when they're cooked through and register 165 &#8457; in the middle on an instant read thermometer. Serve immediately.
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
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle avatar_pic" src="a_avatar.png" alt="Avatar Image">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Steve <span class="w3-opacity w3-medium">Sep 03, 2016, 9:12 PM</span></h4>
        <p>This recipe is AWESOME! I am in love with it!! A true taste of Sweden in this dish, very recommended.</p><br>
      </div>
    </div>
    <hr>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle avatar_pic" src="a_avatar.png" alt="Avatar Image">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>David <span class="w3-opacity w3-medium">Sep 5, 2016, 11:15 AM</span></h4>
        <p>This dish goes great with pancakes as desert from this same website!</p><br>
      </div>
    </div>
  </div>

  <!-- Line -->
  <div class="w3-col m12 bottom_margin">
    <hr>
  </div>

</div>



<!-- Suggestion (Recipe Section) -->
<div class="big-container">
  <div class="w3-content w3-container">
    <h2 class="w3-center w3-xlarge pop_recipe">Popular recipes</h2>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding ">
      <div class="w3-col m3 w3-hover-opacity suggestion-small-container bottom_margin">
        <a href="meatballs.html">
          <img src="meatballs.jpg" class="pop_img" alt="Meatballs Recipe">
        </a>
        <h4 class="handw">Swedish meatballs</h4>
      </div>

      <div class="w3-col m3 w3-hover-opacity suggestion-small-container bottom_margin">
        <a href="pancakes.html">
          <img src="pancakes.jpg" class="pop_img" alt="Pancakes Recipe">
        </a>
        <h4 class="handw">Pancakes</h4>
      </div>




    </div>
  </div>
</div>
</body>
</html>
