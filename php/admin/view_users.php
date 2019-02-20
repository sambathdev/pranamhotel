<?php
  session_start();
  define('TITLE', 'Chef');
  include('../../html/template/header.html');
  include('../login/connect.php');

?>


  <div class="indexbody">
    <div class="center">
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
                  '<div class="userholds">'.
                    '<img class="profileview" src="' . $pathprofile . '">'.
                    '<P class="commentname"><b>'.$row['name'] .'</P>'.
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
