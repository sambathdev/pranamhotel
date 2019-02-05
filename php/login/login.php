<?php // Script 9.6 - login.php #3
/* This page lets people log into the site (almost!). */
// Set the page title and include the header file:
define('TITLE','Login');
include('../../html/template/header-login.html');
// Print some introductory text:
print '<h2 class="logintitle1">Login Form</h2>
	<p class="logintitle2">Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Handle the form:
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {

		if ( (strtolower($_POST['email']) == 'paragon@pranam.com') && ($_POST['password'] == 'pranam') ) { // Correct!
			// Do session stuff:
			date_default_timezone_set('Asia/Phnom_Penh');
			session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['loggedin'] = date('l F j, Y h:i A');
			// Redirect the user to the welcome page!
			ob_end_clean(); // Destroy the buffer!
			header ('Location: ../../index.php');
			exit();
		} else { // Incorrect!

			print '<p class="text--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>';
			print '<a href="login.php" class = "loginagain"><p>login again! </p></a>';
		}
	} else { // Forgot a field.
		print '<p class="text--error">Please make sure you enter both an email address and a password!<br>Go back and try again.</p>';
		print '<a href="login.php" class = "loginagain"><p>login again! </p></a>';
	}

} else { // Display the form.

	print '<form class="loginform" action="login.php" method="post" class="form--inline">
	<table>
		<tr class="rowheight">
			<td><label for="email">Email Address:</label></td>
			<td><input class="boxsize" type="email" name="email" size="30"></td>
		</tr>
		<tr class="rowheight">
			<td><label for="password">Password:</label></td>
			<td><input class="boxsize" type="password" name="password" size="30"></td>
		</tr>
		<tr>
			<td><p><input type="submit" name="submit" value="Log In!" class="button--pill"></p></td>
			<td><a href="../../index.php" class="discover"><p>Discover without Login</p></a></td>
		</tr>
	</table>


	</form>

	';
}
include('../../html/template/footer-login.html');
?>
