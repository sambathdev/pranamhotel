<?php
  session_start();
  define('TITLE', 'Chef');
  include('../../html/template/header.html');
  include('../login/connect.php');

?>


  <div class="indexbody">
    <?php

    if (isset($_GET['id']) && is_numeric($_GET['id']) ) { // Display the entry in a form:
      // Define the query:
      $query = "SELECT * FROM comments WHERE id={$_GET['id']}";
      if ($r = mysqli_query($dbc, $query)) { // Run the query.
        $row = mysqli_fetch_array($r); // Retrieve the information.


        $pathprofile = '../../uploads/default.jpg';
        $queryprofile = "SELECT * FROM users";
        if($a = mysqli_query($dbc, $queryprofile)){
          while ($rowprofile = mysqli_fetch_array($a)) {
            if($rowprofile['name'] == $row['first_name']){
              $pathprofile = $rowprofile['pathpro'];
            }
          }
        }
        print
        '<div class="center">'.
          '<form class="deleteform" action="delete_entry.php" method="post">'.
          '<p class="deleteverify">Are you sure you want to delete this Comment?</p>'.
          '<div class="commentblock">'.
            '<img'. " class='profilecomment'" .'src="'. $pathprofile .'">'.
            '<div class="cmhold">'.
            '<P class="commentname"><b>'.$row['first_name'] ." ". $row['last_name'].'</b>'.' From '.$row['country'].'</P>'.
            '<P class="cm">'.$row['comment'].'</P>'.
            '</div>'.
            '<input type="hidden" name="id" value="' . $_GET['id'] . '">'.
            '<input class="deletesure" type="submit" name="submit" value="Delete!"></p>'.
          '</div>'.
          '</form>'.
        '</div>';


      } else { // Couldn't get the information.
        print '<p style="color: red;">Could not retrieve the blog entry because:<br>'
        . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
      }
    }elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form.

    	$query = "DELETE FROM comments WHERE id={$_POST['id']} LIMIT 1";
    	$r = mysqli_query($dbc, $query); // Execute the query.
    	if (mysqli_affected_rows($dbc) == 1) {
    		print '<p class="hasdeleted">Comment has been deleted.</p>';
    		print '<a class="toadmin" href="admin.php"><p>Go To AdminPage</p></a>';
    	} else {
    		print '<p style="color: red;">Could not delete the blog entry because:<br>'
    		. mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
    	}
    } else { // No ID received.
    	print '<p style="color: red;">This page has been accessed in error.</p>';
    }

     ?>
  </div> <!-- end body div =============== -->




<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
