<?php
  session_start();
  define('TITLE', 'Sitemap');
  include('../../html/template/header.html');
?>
<!-- include header -->

<div class="body">
  <h1 class="pagetitle">Sitemap</h1>

  <div class="center holdsite">
    <div class="colum">
      <li> <a href="../../index.php">Home</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../newsandpromotions/newsandpromotions.php">News and Promotions</a> </li>
        <li> <a href="../newsandpromotions/newsandpromotions.php">Special Offers</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../restaurant/restaurant.php">Restaurant</a> </li>
        <li> <a href="../restaurant/khmerfood.php">Khmer food</a> </li>
        <li> <a href="../restaurant/europefood.php">Europe food</a> </li>
        <li> <a href="../restaurant/chef.php">Meet chef</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../accommodation/accommodation.php">Accommodation</a> </li>
        <li> <a href="../accommodation/deluxeroom.php">Deluxe Room</a> </li>
        <li> <a href="../accommodation/premierroom.php">Premier Room</a> </li>
        <li> <a href="../accommodation/executiveroom.php">Executive Room</a> </li>
        <li> <a href="../accommodation/meetingandevent.php">Meeting And Event </a> </li>
    </div>
    <div class="colum">
      <li> <a href="../wellness/wellness.php">Wellness</a> </li>
        <li> <a href="../wellness/massageandspa.php">Massage And Spa</a> </li>
        <li> <a href="../wellness/pool.php">Pool</a> </li>
        <li> <a href="../wellness/skybar.php">Skybar</a> </li>
        <li> <a href="../wellness/gym.php">Gym</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../contact/contact.php">Contact Us</a> </li>
        <li> <a href="../contact/location.php">Location</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../login/login.php">Login</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../more/award.php">Award</a> </li>
      <li> <a href="../more/history.php">History</a> </li>
    </div>
    <div class="colum">
      <li> <a href="../sitemap/sitemap.php">Sitemap</a> </li>
    </div>
  </div>

</div> <!-- end body div =============== -->




<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
