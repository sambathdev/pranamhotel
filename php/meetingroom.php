<?php
  define('TITLE', 'Meeting And Event');
  include('../html/template/header.html');
?>
<!-- include header -->
    <div class="body">
      <div class="slideholder" onloadstart="imagenext()">
  			<div id="box">
  				<img src="../img/a1.jpg" alt="">
  			</div>
  			<p onclick="previmage()" type="button" name="button" class="leftbut"><</p>
  			<p onclick="imagenext()" type="button" name="button" class="rightbut">></p>
  		</div>
      <h1 class="pagetitle">Meeting And Event</h1>




    </div> <!-- end body div =============== -->




<!-- include footer -->
<?php
  include('../html/template/footer.html');
?>
