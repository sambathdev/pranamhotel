<?php // Script 9.8 - logout.php
/* This is the logout page. It destroys the session information. */

// Need the session:
session_start();

// Reset the session array:
$_SESSION = [];

// Destroy the session data on the server:
session_destroy();

// Define a page title and include the header:
define('TITLE', 'Logout');
include('../../html/template/header.html');

?>
<div class="indexbody">
<p class="logintitle">You are now logged out.</p>
<p class="logintitle">Thank you for using this site. We hope that you liked it.<br></p>
</div>

<?php include('../../html/template/footer.html'); // Need the footer. ?>
