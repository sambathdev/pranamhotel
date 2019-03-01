<?php
  session_start();
  define('TITLE','Contact Us');
  include('../../html/template/header.html');
  include('../login/connect.php');
?>



<div class="indexbody">
  <div class="center">
    <?php if (isset($_GET['roomid']) && is_numeric($_GET['roomid']) ) { ?>
    <div class="w3-third w3-margin-bottom" style="width: 30%;">
      <?php
        $roomid = $_GET['roomid'];
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
    <?php if($row['isavailable'] == '1'){ ?>
    <div class="" style="float: right; width: 68%;">
        <label for="fname">Your Name</label>
        <input class="fullbox" type="text" id="fname" name="name" placeholder="Your name.." >
        <label for="lname">Phone Number</label>
        <input class="fullbox" type="text" id="lname" name="phonenumber" placeholder="Your Phone Number">
        <label for="subject">Comment</label>
        <textarea class="fullbox" id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input class="subbut" type="submit" value="BOOK NOW">
        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset( $_POST['name'] )){
              print '<p>sent</p>';
            }
          }
        ?>
      </form>
    </div>
  <?php }else{
    print '<p class="notav">Not Available</p>';
  } ?>
  <?php } elseif (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $roomid = $_GET['id'];
    $query = "UPDATE rooms SET isavailable='0' WHERE roomid='$roomid'";
    $r = mysqli_query($dbc, $query); // Execute the query.
    $name = $_POST['name'];
    $pnumber = $_POST['phonenumber'];
    $comments = $_POST['subject'];
    $queryinsert = "INSERT INTO booked_room (name, phone_number, comments, room_id) VALUES('$name', '$pnumber', '$comments', '$roomid')";
    $r1 = mysqli_query($dbc, $queryinsert);
  ?>
    <h1>You booked</h1>
  <?php
  }
  ?>

  </div> <!-- end center -->
</div>

<?php
include('../../html/template/footer.html');
 ?>
