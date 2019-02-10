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
  </div>
  <div class="">
    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/wellness/ZOLK2SVVJRFJRGVFBFBSOOLGS4.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/chef/picchef.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/room/deluxeroom1.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>  <!-- end slide -->

  <div class="bbcocontain">
    <div class="center">
      <div class="bbcodes">
        <h1>Breakfast </h1>
        <h4>Operation Hours: 06:00 am – 10:30 pm (daily)</h4>
        <p>An upscale casual dine – in and to-go bakery offering fresh baked goods, breakfast sandwiches, omelets, coffee, Teas, fresh fruit smoothies, specialty sandwiches, salads, soups, bowls, cheesecake and more. In 2018, BBCO expand its alfresco area so call “BBCO Terrace” in aiming to provide a new dining experience to guests.</p>
      </div>
      <div class="bbcoimg">
        <img src="img/chef/breakfast.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="menucontain">
    <div class="center">
      <div class="coffee">
        <h1>COFFEE TIME</h1>
        <p>Enjoy coffee, lattes, cappuccinos, affogato and more at Pranam.</p>
      </div>
      <div class="allday">
        <h1>ALL DAY BREAKFAST</h1>
        <p>Pranam offers a selection of menus throughout the day: Breakfast, Lunch, Dinner, Dessert and an All-Day menu.</p>
      </div>
      <div class="cont">
        <h1>CONTACT US</h1>
        <p>Location: 1st Floor, PhnomPenh Tower Tel: +662 656 7700</p>
      </div>
    </div>
  </div>
  <div class="otherindex">
    <div class="center">
      <div class="col1">
        <img src="img/chef/col1.jpg" alt="">
        <h1>We Offer ...</h1>
        <p>BBCO offers an array of products tailored to the “on the go” professional with an active and urban lifestyle. With a combination of “local flare”, and gourmet selection, products include fresh grab and go, organic foods, packaged beer and wine, chilled beverages, frozen yogurt, cakes, cookies and cupcakes, artesian chocolate, toffee, snacks and signature customized 3D cake. Our commitment to excellence is exhibited through sourcing the highest quality products and delivering exceptional service and create guests experience.</p>
      </div>
      <div class="col2">
        <h1>The Terrace</h1>
        <p>With the aim to creating new experience, BBCO offering a new unique outdoor dining experience and we name it “BBCO Terrace”.</p>
        <img src="img/chef/terrace.png" alt="">
      </div>
      <div class="col3">
        <img src="img/room/deluxe.jfif" alt="">
        <h4>Room Feature</h4>
        <p>33sqm/355sqft</p>
        <p>Air Conditioned</p>
        <p>Connecting Rooms are not available</p>
        <p>Windows, soundproof</p>
        <h4>Accessible Room Features</h4>
        <p>This room type offers mobility accessible rooms</p>
        <p>This room type does not offer accessible rooms with roll in showers</p>
        <p>This room type does not offer hearing accessible rooms</p>



      </div>
    </div>
  </div>



</div>

<?php
include('html/template/footer.html');
 ?>
