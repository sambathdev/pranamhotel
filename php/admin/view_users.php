<?php
  session_start();
  define('TITLE', 'Chef');
  include('../../html/template/header.html');
  include('../login/connect.php');

?>


  <div class="indexbody">
    <div class="center">
      <p class="useraccounttitle">Pranam Hotel's User Account</p>
      <div class="userblockss">
        <?php
          $query = 'SELECT * FROM users ORDER BY id DESC';
          if ($r = mysqli_query($dbc, $query)) {
            while ($row = mysqli_fetch_array($r)) {
              $pathprofile = $row['pathpro'];
              if($row['pathpro'] == ''){
                $pathprofile = '../../uploads/default.jpg';
              }
              print
                  '<div class="userholds">';
                  if($row['name'][0] === 's' || $row['name'][0] === 'h')
                    print '<p class="premieraccount">Premier</p>';
                  if($row['name'] === 'admin')
                    print '<p class="premieraccount" style="background-color: pink;">Admin</p>';

              print
                    '<img class="profileview" src="' . $pathprofile . '">'.
                    '<P class="profilename"><b>'.$row['name'] .'</P>'.
                    '<p class="profiledes">Registration Date:'.' '.$row['reg_date'].'</p>'.
                    '<p class="profiledes">Email Address:'.' '.$row['email'].'</p>'.
                  '</div>';
            }
          }
         ?>

      </div>
    </div>

  </div> <!-- end body div =============== -->



<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
