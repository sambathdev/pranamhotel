<?php
$s_host = "sql311.epizy.com";
$s_user = "epiz_23481891";
$s_pword = "LOXAhn8tsfn4";
$s_db = "epiz_23481891_gg";

$dbc = msqli_connect($s_host, $s_user, $s_pword);
mysql_select_db($s_db, $dbc);
// if($dbc){
// 	print '<p>connected</p>';
// }else{
// 	print '<p>can not connect</p>';
// }

if($dbc = mysqli_connect('localhost', 'root', 'a', 'pranam') ){

}else{
	print '<p>can not connect</p>';
}
 ?>
