<?php
  session_start();
  define('TITLE','Contact Us');
  include('../../html/template/header.html');
  include('../login/connect.php');
?>



<div class="indexbody">
  <div class="center">
    <?php
      $query = 'SELECT * FROM booked_room ORDER BY room_id DESC';
      if ($r = mysqli_query($dbc, $query)) {
        while ($row = mysqli_fetch_array($r)) {
          print
          '<div class="center">
            <div class="commentblock">'.
              // '<img'. " class='profilecomment'" .'src="'. $pathprofile .'">'.
              '<div class="cmhold floatright">'.
              '<P class="commentname"><b>'.$row['name'] ." ". $row['phone_number'].'</b>'.'</P>'.
              '<P class="cm">'.$row['comments'].'</P>';
              ?>
              </div>


          <div class="w3-third w3-margin-bottom" style="width: 30%;">
            <?php
              $roomid = $row['room_id'];
              $query = "SELECT * FROM rooms WHERE roomid='$roomid' LIMIT 1";
              $results = mysqli_query($dbc, $query);
              $row = mysqli_fetch_array($results);
            ?>
            <img src="https://www.w3schools.com/w3images/room_single.jpg" alt="Norway" style="width:100%">
            <div class="w3-container w3-white">
              <form class="" action="booking.php?id=<?php print $roomid; ?>" method="post">
                <h3><?php print $row['kind']; if($row['isavailable'] == 0) print " Not Available";?></h3>
                <h6 class="w3-opacity">From $<?php print $row['price']; ?></h6>
                <p>
                  <?php if($row['bed'] == 1 )
                          print 'Single';
                        if($row['bed'] == 2)
                          print 'Double';
                  ?> bed
                </p>
                <p>15m<sup>2</sup></p>
                <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
            </div>
          </div>
        </div>
      </div>
          <?php
        }
      }
    ?>
  </div> <!-- end center -->
</div>

<?php
include('../../html/template/footer.html');
 ?>
