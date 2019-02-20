<?php
  session_start();
  define('TITLE', 'Chef');
  include('../../html/template/header.html');
?>

  <div class="indexbody">
    <div class="center">
      <h1 class="admintitle">Admin Control the website</h1>

      <div class="admintask">
        <div class="admintaskblock">
          <a class="rmlink" href="view_comments.php"> <p>View comments</p> </a>
        </div>
        <div class="admintaskblock">
          <a class="rmlink" href="view_users.php"> <p>View Users</p> </a>
        </div>
        <div class="admintaskblock">
          <a class="rmlink" href="view_comment.php"> <p>See comment</p> </a>
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
