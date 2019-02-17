<?php
if($dbc = mysqli_connect('localhost', 'root', 'a', 'pranam') ){
	print '<p>connected to pranam database</p>';
}else{
	print '<p>can not connect</p>';
}
 ?>
