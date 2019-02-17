<?php // Script 9.6 - login.php #3
/* This page lets people log into the site (almost!). */
// Set the page title and include the header file:
define('TITLE','Login');
include('../../html/template/header-login.html');
include('connect.php');
?>

<?php // Script 11.6 - register.php /* This script registers a user by storing their information in a text file and
//creating a directory for them. */ // Identify the directory and file to use:
	print '<h2 class="logintitle1">Sign Up Form</h2>';
 	$dir = '../users/';
	$file = $dir . 'users.txt';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

		if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "../../uploads/{$_FILES['the_file']['name']}")) {
			print '<p>Your file has been uploaded.</p>';
		} else { // Problem!
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

		$problem = FALSE; // No problems so far.
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
/*
			if (is_writable($file)) { // Open the file.
				// Create the data to be written:
				$subdir = time() . rand(0, 4596);
				$data = $_POST['username'] . "\t" . password_hash(trim($_POST['password1']),PASSWORD_BCRYPT) . "\t" . $subdir . PHP_EOL;
				file_put_contents($file, $data, FILE_APPEND | LOCK_EX);// Write the data:
				mkdir ($dir . $subdir);// Create the directory:
				print '<p class="logintitle1">You are now registered!</p>';// Print a message:
				print '<a href="login.php" class = "loginagain"> Go and Log In! </a>';



			} else { // Couldn't write to the file.
				mkdir ($dir);// Create the directory://mkdir ($dir . $file);
				$myfile = fopen($dir."users.txt", "a+") or die("Unable to open file!");
				//fwrite($myfile, "John Doe\n");
				fclose($myfile);
				print '<p class="error">You could not be registered due to a system error.</p>';
			}
*/

			$pass = password_hash(trim($_POST['password1']), PASSWORD_DEFAULT);
			$realpass = trim($_POST['password1']);
			$nam = $_POST['username'];
			$query = "INSERT INTO users (name, password, confirmpassword) VALUES ('$nam', '$pass', '$realpass')";
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
		if($_POST['password1'] != $_POST['password2'] || empty($_POST['password1']) || empty($_POST['username']) ){
				print '<a href="register.php" class = "loginagain"> Sign Up Again! </a>';
		}
	} else { // Display the form.
			// Leave PHP and display the form:
?>
<form class="loginform" enctype="multipart/form-data" action="register.php" method="post">
	<table>
		<tr class="rowheight">
			<td> <label>Username:</label> </td>
			<td><input class="boxsize" type="text" name="username" size="20"></td>
		</tr>
		<tr class="rowheight">
			<td><label>Password:</label> </td>
			<td><input class="boxsize" type="password" name="password1" size="20"></td>
		</tr>
		<tr class="rowheight">
			<td><label>Confirm Password:</label></td>
			<td><input class="boxsize" type="password" name="password2" size="20"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="300000">
			<p><input type="file" name="the_file"></p></td>
		</tr>
		<tr class="rowheight">
			<td><input class="discover" type="submit" name="submit" value="Register"></td>
			<td></td>
		</tr>
	</table>
</form>



<?php } // End of submission IF. ?>

<?php
include('../../html/template/footer-login.html');
?>
