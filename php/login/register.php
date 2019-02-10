<?php // Script 9.6 - login.php #3
/* This page lets people log into the site (almost!). */
// Set the page title and include the header file:
define('TITLE','Login');
include('../../html/template/header-login.html');?>

<?php // Script 11.6 - register.php /* This script registers a user by storing their information in a text file and
//creating a directory for them. */ // Identify the directory and file to use:
	print '<h2 class="logintitle1">Sign Up Form</h2>';
 	$dir = '../users/';
	$file = $dir . 'users.txt';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.
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
		} else { // Forgot a field.
			print '<p class="error">Please go back and try again!</p>';
		}
		if($_POST['password1'] != $_POST['password2'] || empty($_POST['password1']) || empty($_POST['username']) ){
				print '<a href="register.php" class = "loginagain"> Sign Up Again! </a>';
		}
	} else { // Display the form.
			// Leave PHP and display the form:
?>
<form class="loginform" action="register.php" method="post">
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
