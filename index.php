<?php
  session_start();
  define('TITLE','Pranam Hotel');
  include('html/template/header.html');
?>



<div class="indexbody">
  <!-- write your html here -->
  <div class="">
    <h1 class="welcomeindex">Welcome To Pranam Hotel</h1>
    <h1 class="welcomeindex"> <?php
    if(isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
            print 'Mr. '.$_SESSION['username'].', you are loged in at '.$_SESSION['loggedin'];
    }
    ?></h1>
  </div> <!-- end welcome -->



  <header class="w3-display-container w3-content" style="max-width:1500px;">
    <img class="w3-image" src="https://www.w3schools.com/w3images/hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
    <div class="w3-display-left w3-padding w3-col l6 m8">
      <div class="w3-container w3-blue booking-title">
        <h2><i class="fa fa-bed w3-margin-right"></i>Hotel Name</h2>
      </div>
      <div class="w3-container w3-white w3-padding-16">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-half w3-margin-bottom">
              <label><i class="fa fa-calendar-o"></i> Check In</label>
              <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
            </div>
            <div class="w3-half">
              <label><i class="fa fa-calendar-o"></i> Check Out</label>
              <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
            </div>
          </div>
          <div class="w3-row-padding" style="margin:8px -16px;">
            <div class="w3-half w3-margin-bottom">
              <label><i class="fa fa-male"></i> Adults</label>
              <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
            </div>
            <div class="w3-half">
              <label><i class="fa fa-child"></i> Kids</label>
            <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
            </div>
          </div>
          <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
        </form>
      </div>
    </div>
  </header>


  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/room_single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From $99</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom chooseroom">Choose Room</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/room_double.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Double Room</h3>
        <h6 class="w3-opacity">From $149</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom chooseroom">Choose Room</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://www.w3schools.com/w3images/room_deluxe.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Deluxe Room</h3>
        <h6 class="w3-opacity">From $199</h6>
        <p>King-size bed</p>
        <p>40m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom chooseroom">Choose Room</button>
      </div>
    </div>

    <div class="w3-row-padding" id="about">
      <div class="w3-col l4 12">
        <h3>About</h3>
        <h6>Our hotel is one of a kind. It is truely amazing. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h6>
      <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
      </div>
      <div class="w3-col l8 12">
        <!-- Image of location/map -->
        <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;">
      </div>
    </div>

    <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
      <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> 423 Toul Kork, Phnom Penh, Cambodia</div>
      <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +855 151 515</div>
      <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: pranamhotel@gmail.com</div>
    </div> <!-- end about -->
  </div>



</div>


<?php
include('html/template/footer.html');
 ?>
