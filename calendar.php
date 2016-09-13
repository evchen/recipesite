<!DOCTYPE html>
<html>
<title>Recipe Calendar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%7CRaleway%7CIndie+Flower%7CLobster+Two%7CPacifico">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="html5reset.css">
<link rel="stylesheet" href="cal.css">
<body >

<!-- Navbar (sit on top) -->
<div class="w3-top" >
  <ul class="my-navbar w3-center w3-top w3-xlarge bg_brown" >
    <li class="w3-left w3-center menu_width"><a href="index.html"><i class="fa fa-home"></i></a></li>
    <li class="w3-left w3-center w3-xlarge menu_cal"><h2>September 2016</h2></li>
    <li class="w3-left w3-center menu_width"><a href="calendar.html"><i class="fa fa-calendar"></i></a></li>

  </ul>
</div>

<!-- First Parallax Image with Logo Text -->

  <div id="calendar-wrap">

            <div id="calendar" class="text_brown">
                <ul class="weekdays">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                    <li>Sunday</li>
                </ul>

                <!-- Days from previous month -->

                <ul class="days">
                    <li class="day other-month">
                        <div class="date">27</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">28</div>

                    </li>
                    <li class="day other-month">
                        <div class="date">29</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">30</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">31</div>
                    </li>

                    <!-- Days in current month -->

                    <li class="day">
                        <div class="date">1</div>
                    </li>
                    <li class="day">
                        <div class="date">2</div>
                    </li>
                </ul>

                    <!-- Row #2 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">3</div>
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                    </li>
                    <li class="day">
                        <div class="date">5</div>
                    </li>
                    <li class="day">
                        <div class="date">6</div>
                    </li>
                    <li class="day">
                        <div class="date">7</div>

                    </li>
                    <li class="day">
                        <div class="date">8</div>
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                        <div class="event">
                          <a href="pancakes.html">
                            <img class="cal_img" src="pancakes.jpg" alt="Pancake recipe" />
                          </a>
                        </div>
                    </li>
                </ul>

                    <!-- Row #3 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">10</div>
                    </li>
                    <li class="day">
                        <div class="date">11</div>
                    </li>
                    <li class="day">
                        <div class="date">12</div>
                    </li>
                    <li class="day">
                        <div class="date">13</div>
                    </li>
                    <li class="day">
                        <div class="date">14</div>
                    </li>
                    <li class="day">
                        <div class="date">15</div>
                    </li>
                    <li class="day">
                        <div class="date">16</div>
                    </li>
                </ul>

                    <!-- Row #4 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">17</div>
                    </li>
                    <li class="day">
                        <div class="date">18</div>
                    </li>
                    <li class="day">
                        <div class="date">19</div>
                        <div class="event" >
                          <a href="meatballs.html">
                            <img class="cal_img" src="meatballs.jpg" alt="meatballs recipe" />
                          </a>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">20</div>
                    </li>
                    <li class="day">
                        <div class="date">21</div>
                    </li>
                    <li class="day">
                        <div class="date">22</div>
                    </li>
                    <li class="day">
                        <div class="date">23</div>
                    </li>
                </ul>

                        <!-- Row #5 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">24</div>
                    </li>
                    <li class="day">
                        <div class="date">25</div>

                    </li>
                    <li class="day">
                        <div class="date">26</div>
                    </li>
                    <li class="day">
                        <div class="date">27</div>
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                    </li>
                    <li class="day">
                        <div class="date">29</div>
                    </li>
                    <li class="day">
                        <div class="date">30</div>
                    </li>
                </ul>

                <!-- Row #6 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">31</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">1</div> <!-- Next Month -->
                    </li>
                    <li class="day other-month">
                        <div class="date">2</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">3</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">4</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">5</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">6</div>
                    </li>
                </ul>

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->




        <!-- Suggestion (Recipe Section) -->
        <div class="big-container">
          <div class="w3-content w3-container w3-padding-64 ">
            <h2 class="w3-center w3-xlarge pop_recipe">Popular recipes</h2>

            <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
            <div class="w3-row-padding ">
              <div class="w3-col m3 w3-hover-opacity suggestion-small-container">
                <a href="meatballs.html">
                  <img src="meatballs.jpg" class="pop_img" alt="Meatballs recipe">
                </a>
                <h4>Swedish meatballs</h4>
              </div>

              <div class="w3-col m3 w3-hover-opacity suggestion-small-container">
                <a href="pancakes.html">
                  <img src="pancakes.jpg" class="pop_img" alt="Pancake recipe">
                </a>
                <h4>Pancakes</h4>
              </div>




            </div>
          </div>
        </div>
</body>
</html>
