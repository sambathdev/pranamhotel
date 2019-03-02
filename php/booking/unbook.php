<?php
  header('Location: ../../index.php');
  session_start();
  define('TITLE','Contact Us');
  include('../../html/template/header.html');
  include('../login/connect.php');
?>



<div class="indexbody">
  <?php

    $roomid = $_GET['id'];
    $querydrop = "DELETE FROM booked_room WHERE room_id='$roomid' LIMIT 1";
    $rdrop = mysqli_query($dbc, $querydrop);
    $queryavailable = "UPDATE rooms SET isavailable='1' WHERE roomid='$roomid'";
    $ravailable = mysqli_query($dbc, $queryavailable);

   ?>



</div>

<?php
include('../../html/template/footer.html');
 ?>
