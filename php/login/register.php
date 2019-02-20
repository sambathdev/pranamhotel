<?php // Script 9.6 - login.php #3
/* This page lets people log into the site (almost!). */
// Set the page title and include the header file:
define('TITLE','Login');
include('../../html/template/header-login.html');
include('connect.php');
?>
<div class="loginbodycenter">
<?php // Script 11.6 - register.php /* This script registers a user by storing their information in a text file and
//creating a directory for them. */ // Identify the directory and file to use:
 	$dir = '../users/';
	$file = $dir . 'users.txt';
	$problem = FALSE; // No problems so far.
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

		if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "../../uploads/{$_FILES['the_file']['name']}")) {
      $pathpro = "../../uploads/{$_FILES['the_file']['name']}";
      print '<p>Your file has been uploaded.</p>';
		} else { // Problem!
			$problem = TRUE;
			print '<p style="color: red;">Your file could not be uploaded because: ';
			// Print a message based upon the error:
			switch ($_FILES['the_file']['error']) {
				case 1:	print 'The file exceeds the upload_max_filesize setting in php.ini';break;
				case 2:	print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';break;
				case 3:	print 'The file was only partially uploaded';break;
				case 4:	print 'No file was uploaded';break;
				case 6: print 'The temporary folder does not exist.';break;
				default:print 'Something unforeseen happened.';break;
			}
			print '.</p>'; // Complete the paragraph.
		}


	// Check for each value...
		if (empty($_POST['username'])) {
			$problem = TRUE;
			print '<p class="error">Please enter a username!</p>';
		}
		if (empty($_POST['password1'])) {
			$problem = TRUE;
			print '<p class="error">Please enter a password!</p>';
		}
		if ($_POST['password1'] != $_POST['password2']) {
			$problem = TRUE;
			print '<p class="error">Your password did not match your confirmed password!</p>';
		}

		if (!$problem) { // If there weren't any problems...


			$pass = password_hash(trim($_POST['password1']), PASSWORD_DEFAULT);
			$realpass = trim($_POST['password1']);
			$nam = $_POST['username'];
      $email = $_POST['email'];
			$query = "INSERT INTO users (name, email, password, confirmpassword, pathpro, reg_date) VALUES ('$nam', '$email', '$pass', '$realpass', '$pathpro', NOW())";
			// Execute the query:
			if (mysqli_query($dbc, $query)) {
				print '<p>The blog entry has been added!</p>';
				print '<p> <a href="../../index.php">Home</a> </p>';
			} else {
				print '<p style="color: red;">Could not add the entry because:<br>' . '.</p><p>The query being run was: ' . $query . '</p>';
			}
			mysqli_close($dbc);


		} else { // Forgot a field.
			print '<p class="error">Please go back and try again!</p>';
		}
		if($problem){
				print '<a href="register.php" class = "loginagain"> Sign Up Again! </a>';
		}
	} else { // Display the form.
			// Leave PHP and display the form:
?>

</div>
<form class="loginform" enctype="multipart/form-data" action="register.php" method="post">
	<h2 class="logintitle1">Sign Up Form</h2>
	<input class="boxsize" type="text" name="username" size="20" placeholder="Username">
	<input class="boxsize" type="email" name="email" size="30" placeholder="Email Address">
	<input class="boxsize" type="password" name="password1" size="20" placeholder="Password">
	<input class="boxsize" type="password" name="password2" size="20" placeholder="Confirm Password">
	<input type="hidden" name="MAX_FILE_SIZE" value="300000">
	<p class="profilesignup">Profile Picture <input type="file" name="the_file"></p>

	<input class="discover" type="submit" name="submit" value="Register">
	<a href="login.php" class="discover"><p>Log In</p></a>

</form>



<?php } // End of submission IF. ?>

<?php
include('../../html/template/footer-login.html');
?>
