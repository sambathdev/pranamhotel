<?php // Script 9.6 - login.php #3
/* This page lets people log into the site (almost!). */
// Set the page title and include the header file:
define('TITLE','Login');
include('../../html/template/header-login.html');

if($dbc = mysqli_connect('localhost', 'root', 'a', 'testsite') ){
	print '<p>yeah yeah</p>';
}else{
	print '<p>can not connect</p>';
}

?>

<?php // Script 11.8 - login.php
/* This script logs a user in by check the stored values in text file. */
print '<h2 class="logintitle1">Login Form</h2>
	<p class="logintitle2">Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
// Identify the file to use:
$file =  '../users/users.txt';
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.
	if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {
		$loggedin = FALSE; // Not currently logged in.
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE name='$username'";
		// $password = password_verify(trim($_POST['password']), $pw) ;
		$results = mysqli_query($dbc, $query);
		if (mysqli_num_rows($results) >= 1) {
			if($row = mysqli_fetch_assoc($results)){
				// $passcheck = password_verify($password, $row['password']);
				print $row['password'];
				print $row['name'];
				if (password_verify($password, $row['password']) || $username == $row['name'] ) {
					$loggedin = TRUE;
					// mysqli_close($dbc);
				}
			}

		}else {
			array_push($errors, "Wrong username/password combination");
		}

/*
//------------
		// Enable auto_detect_line_settings:
		ini_set('auto_detect_line_endings', 1);
		// Open the file:
		$fp = fopen($file, 'rb');
		// Loop through the file:
		while ( $line = fgetcsv($fp, 200, "\t") ) {
			// Check the file data against the submitted data:
			if ( ($line[0] == $_POST['username']) && (password_verify(trim($_POST['password']), $line[1])) ) {
				$loggedin = TRUE; // Correct username/password combination.
				// Stop looping through the file:
				break;
			} // End of IF.
		} // End of WHILE.
		fclose($fp); // Close the file.
		// Print a message:
//----------------------------------------
*/

		if ($loggedin) {
			date_default_timezone_set('Asia/Phnom_Penh');
			session_start();
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['loggedin'] = date('l F j, Y h:i A');
			ob_end_clean(); // Destroy the buffer!
			header('Location: ../../index.php');
			exit();
		} else {
			print '<p class="text--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>';
			print '<a href="login.php" class = "loginagain"><p>login again! </p></a>';
		}
	} else{
		print '<p class="text--error">Please make sure you enter both an email address and a password!<br>Go back and try again.</p>';
		print '<a href="login.php" class = "loginagain"><p>login again! </p></a>';
	}
} else { // Display the form.
// Leave PHP and display the form:
?>
<form class="loginform" action="login.php" method="post" class="form--inline">
<table>
	<tr class="rowheight">
		<td><label for="email">Username</label></td>
		<td><input class="boxsize" type="text" name="username" size="30"></td>
	</tr>
	<tr class="rowheight">
		<td><label for="password">Password:</label></td>
		<td><input class="boxsize" type="password" name="password" size="30"></td>
	</tr>
	<tr>
		<td><p><input type="submit" name="submit" value="Log In!" class="button--pill"></p></td>
		<td><a href="../../index.php" class="discover"><p>Discover without Login</p></a></td>
		<td><a href="register.php" class="discover"><p>register</p></a></td>
	</tr>
</table>


</form>
<?php } // End of submission IF. ?>

<?php
include('../../html/template/footer-login.html');
?>
