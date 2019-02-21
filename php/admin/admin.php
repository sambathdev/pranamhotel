<?php
  session_start();
  if(!$_SESSION['admin']){
    header('location: ../../index.php');
  }
  define('TITLE', 'Chef');
  include('../../html/template/header.html');

?>
  <div class="indexbody">
    <div class="center">
      <h1 class="admintitle">Admin Control the website</h1>

      <div class="admintask">
        <div class="admintaskblock" style="color: red;">
          <a class="rmlink" href="view_comments.php"> <p> <i class="fas fa-comment-alt"></i> View comments</p> </a>
          <p class="justcolor" style="box-shadow: red 0 2px 10px ;
          background-color: red;"></p>
        </div>
        <div class="admintaskblock" style="color: blue;">
          <a class="rmlink" href="view_users.php"> <p> <i class="fas fa-users"></i> View Users</p> </a>
          <p class="justcolor" style="box-shadow: blue 0 2px 10px ;
          background-color: blue;"></p>
        </div>
        <div class="admintaskblock" style="color: cyan;">
          <a class="rmlink" href="../sitemap/sitemap.php"> <p> <i class="fas fa-sitemap"></i> Site Map</p> </a>
          <p class="justcolor" style="box-shadow: cyan 0 2px 10px ;
          background-color: cyan;"></p>
        </div>
        <div class="admintaskblock">
          <a class="rmlink" href="view_comment.php"> <p>See comment</p> </a>
        </div>
      </div>
    </div>
  </div> <!-- end body div =============== -->

<!-- include footer -->
<?php
  include('../../html/template/footer.html');
?>
