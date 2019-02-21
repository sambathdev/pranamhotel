<?php
  session_start();
  if(!$_SESSION['admin']){
    header('location: ../../index.php');
  }
  define('TITLE', 'Chef');
  include('../../html/template/header.html');
  include('../login/connect.php');
?>
<div class="indexbody">
  <?php
    $query = 'SELECT * FROM comments ORDER BY comment_date DESC';
    if ($r = mysqli_query($dbc, $query)) {
      while ($row = mysqli_fetch_array($r)) {
        $pathprofile = '../../uploads/default.jpg';
        $queryprofile = "SELECT * FROM users";
        if($a = mysqli_query($dbc, $queryprofile)){
          while ($rowprofile = mysqli_fetch_array($a)) {
            if($rowprofile['name'] == $row['first_name']){
              $pathprofile = $rowprofile['pathpro'];
            }
          }
        }
        print
        '<div class="center">
          <div class="commentblock">'.
            '<img'. " class='profilecomment'" .'src="'. $pathprofile .'">'.
            '<div class="cmhold">'.
            '<P class="commentname"><b>'.$row['first_name'] ." ". $row['last_name'].'</b>'.' From '.$row['country'].'</P>'.
            '<P class="cm">'.$row['comment'].'</P>'.
            '</div>'.
            '<a class="deletecm" href="delete_entry.php?id='.$row['id'].'"><i class="fas fa-trash-alt"></i>Delete</a>'.
          '</div>
        </div>';
      }
    }
  ?>
</div> <!-- end body div =============== -->


<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
