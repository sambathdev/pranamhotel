<?php // Script 9.7 - welcome.php #2
/* This is the welcome page. The user is redirected here
after they successfully log in. */

// Need the session:
session_start();

// Set the page title and include the header file:
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('../../html/template/header.html');

// Print a greeting:
print '<div class="indexbody">';
print '<h2 class="welcomes">Welcome to the J.D. Salinger Fan Club!</h2>';
print '<p class="welcomes">Hello, ' . $_SESSION['email'] . '!</p>';

// Print how long they've been logged in:
date_default_timezone_set('America/New_York');
print '<p class="welcomes">You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '.</p>';
print '
<p class="welcomes"><label for="email">Email Address:</label><input type="email" name="email" size="20" value="' . htmlentities($_SESSION['email']) . '"></p>
	';

// Make a logout link:
print '<p class="welcomes logout"><a href="logout.php">Logout</a></p>';
print '</div>';
include('../../html/template/footer.html'); // Need the footer.
?>
