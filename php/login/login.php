<?php
  define('TITLE','Login');
  include('../../html/template/header.html');
?>


<div class="indexbody">
  <!-- write your html here -->


  	<div class="header">
  		<h2>Login</h2>
  	</div>

  	<form method="post" action="../../index.php">

  		<div class="input-group">
  			<label>Username</label>
  			<input type="text" name="username" >
  		</div>
  		<div class="input-group">
  			<label>Password</label>
  			<input type="password" name="password">
  		</div>
  		<div class="input-group">
  			<button type="submit" class="btn" name="login_user">Login</button>
  		</div>
  		<p>
  			Not yet a member? <a href="register.php">Sign up</a>
  		</p>
  	</form>


</div>






<?php
include('../../html/template/footer.html');
 ?>
