<?php
  session_start();
  define('TITLE','Accommadation');
  include('../../html/template/header.html');
?>

<div class="indexbody">

  <div class="w3-row-padding w3-padding-16 padding100px center" id="about">
    <div class="w3-col m6 margin-bot50px">
      <a href="deluxeroom.php" class="accomblock">
        <img src="../../img/room/deluxeroom1copy.jpg" alt="Me" style="width:100%">
        <h4>Deluxe Room</h4>
        <p>Guest room, 1 King or 2 Twin/Single Bed(s)</p>
      </a>
    </div>
    <div class="w3-col m6 margin-bot50px">
      <a href="premierroom.php" class="accomblock">
        <img src="../../img/room/premier-king-1.jpg" alt="Me" style="width:100%">
        <h4>Premier Room</h4>
        <p>Guest room, 1 King or 2 Twin/Single Bed(s)</p>
      </a>
    </div>
    <div class="w3-col m6 margin-bot50px">
      <a href="executiveroom.php" class="accomblock">
        <img src="../../img/room/executiveroom.jpg" alt="Me" style="width:100%">
        <h4>Executive Room</h4>
        <p>Guest room, 1 King or 2 Twin/Single Bed(s)</p>
      </a>
    </div>
    <div class="w3-col m6 margin-bot50px">
      <a href="meetingandevent.php" class="accomblock">
        <img src="../../img/room/meetingandeventroom1.jpg" alt="Me" style="width:100%">
        <h4>Meeting Room</h4>
        <p>Wide Area with many chairs.</p>
      </a>
    </div>
  </div>


</div>


<?php
include('../../html/template/footer.html');
 ?>
