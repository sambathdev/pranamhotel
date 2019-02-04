<?php
  session_start();
  define('TITLE', 'Meeting And Event');
  include('../../html/template/header.html');
?>
<!-- include header -->
  <div class="indexbody">

      <p> </p>
      <p class="titless" align="center">Meeting And Event Room Available</p>
      <p> </p>


      <div class="gallerymeetingandevent">
      <a target="_blank" href="deluxeroom.jpg">
        <img src="../../img/room/meetingandeventroom1.jpg" alt="Cinque Terre" width="1200" height="800">
      </a>
      <div class="desc">Ball Room 1 <button type="button" onclick="alert('Tel: 016569055')">Book Now</button> </div>
      </div>

      <div class="gallerymeetingandevent">
      <a target="_blank" href="deluxeroom.jpg">
        <img src="../../img/room/meetingandeventroom2.jpg" alt="Cinque Terre" width="1200" height="800">
      </a>
      <div class="desc">Ball Room 2 <button type="button" onclick="alert('Tel: 016569055')">Book Now</button> </div>
      </div>

      <div class="gallerymeetingandevent">
      <a target="_blank" href="deluxeroom.jpg">
        <img src="../../img/room/meetingandeventroom3.jpg" alt="Cinque Terre" width="1200" height="800">
      </a>
      <div class="desc">Ball Room 3 <button type="button" onclick="alert('Tel: 016569055')">Book Now</button> </div>
      </div>

      <div class="gallerymeetingandevent">
      <a target="_blank" href="deluxeroom.jpg">
        <img src="../../img/room/meetingandeventroom4.jpg" alt="Cinque Terre" width="1200" height="800">
      </a>
      <div class="desc">Ball Room 4 <button type="button" onclick="alert('Tel: 016569055')">Book Now</button> </div>
      </div>


  </div>
  <!-- end body div =============== -->




<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
