<?php
  session_start();
  define('TITLE','Contact Us');
  include('../../html/template/header.html');
?>

<?php // Script 12.4 - add_entry.php
/* This script adds a blog entry to the database. */
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.
	// Validate the form data:
	$problem = FALSE;
	if(!isset($_SESSION['username'])){

    if (!empty($_POST['firstname']) || !empty($_POST['lastname'])) {
      $firstname = trim(strip_tags($_POST['firstname']));
      $lastname = trim(strip_tags($_POST['lastname']));
      $comment = $_POST['subject'];
      $country = $_POST['country'];
  	} else {
  		print '<p style="color: red;">Please submit both a firstname and lastname.</p>';
  		$problem = TRUE;
  	}

  }else{
    if (!empty($_POST['subject']) ) {
      $firstname = $_SESSION['username'];
      $comment = $_POST['subject'];
      $country = $_POST['country'];
  	} else {
  		print '<p style="color: red;">Please submit both a firstname and lastname.</p>';
  		$problem = TRUE;
  	}
  }

	if (!$problem) {
		// Connect and select:
		include('../login/connect.php');
		// Define the query:
    if(!isset($_SESSION['username'])){
      $query = "INSERT INTO comments (first_name, last_name, country, comment, comment_date)
  		VALUES ('$firstname', '$lastname', '$country', '$comment', NOW())";
    } else {
      $query = "INSERT INTO comments (first_name, country, comment, comment_date)
  		VALUES ('$firstname', '$country', '$comment', NOW())";
    }

		// Execute the query:
		if (@mysqli_query($dbc, $query)) {
			print '<p>The blog entry has been added!</p>';
		} else {
			print '<p style="color: red;">Could not add the entry because:<br>'
			. mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}
		mysqli_close($dbc); // Close the connection.
	} // No problem!
} // End of form submission IF.
// Display the form:
?>



<div class="indexbody">
  <div class="center">
    <div class="containerform">
      <div style="text-align:center">
        <h2>Contact Us</h2>
        <p>Swing by for a cup of coffee, or leave us a message:</p>
      </div>
      <div class="row">
        <div class="column">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.699349557424!2d104.91666691431868!3d11.573397391783718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095143a986fc07%3A0xc4976c41ebdc86bf!2z4Z6i4Z624Z6C4Z624Z6a4Z6c4Z6M4Z-S4Z6N4Z6T4Z-I!5e0!3m2!1sen!2skh!4v1548781517477" frameborder="0" width="100%" height="400px" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="column">
          <form action="contact.php" method="post">
            <?php if(!isset($_SESSION['username'])){ ?>
            <label for="fname">First Name</label>
            <input class="fullbox" type="text" id="fname" name="firstname" placeholder="Your name.." >
            <label for="lname">Last Name</label>
            <input class="fullbox" type="text" id="lname" name="lastname" placeholder="Your last name..">
            <label for="country">Country</label>
            <select class="fullbox" id="country" name="country">
              <option value="cambodia">Cambodia</option>
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select>
          <?php } ?>
            <label for="subject">Comment</label>
            <textarea class="fullbox" id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input class="subbut" type="submit" value="Submit">
            <?php
              if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset( $_POST['firstname'] )){
                  print '<p>sent</p>';
                }
              }
            ?>
          </form>
        </div>
      </div>
    </div> <!-- end containerform -->
  </div> <!-- end center -->

</div>

<?php
include('../../html/template/footer.html');
 ?>
