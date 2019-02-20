<?php
  session_start();
  define('TITLE', 'Chef');
  include('../../html/template/header.html');
  include('../login/connect.php');

?>


  <div class="indexbody">

    <?php
    $name = $_SESSION['username'];
    $query = 'SELECT * FROM comments ORDER BY comment_date DESC';
    $queryprofile = "SELECT * FROM users where name = '$name'";
    if($a = mysqli_query($dbc, $queryprofile)){
      while ($rowprofile = mysqli_fetch_array($a)) {
        $pathprofile = $rowprofile['pathpro'];
      }
    }
    if ($r = mysqli_query($dbc, $query)) {
      while ($row = mysqli_fetch_array($r)) {
        print
        '<div class="center">
          <div class="commentblock">'.
            '<img href="'. $rowprofile['profile'] .'">'.
            '<P class="commentname"><b>'.$row['first_name'] ." ". $row['last_name'].'</b>'.' From '.$row['country'].'</P>'.
            '<P>'.$row['comment'].'</P>'.
            '<a href="delete_entry.php?id='.$row['id'].'">Delete</a>'
          .'</div>
        </div>';
      }
    }
     ?>
  </div> <!-- end body div =============== -->




<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
