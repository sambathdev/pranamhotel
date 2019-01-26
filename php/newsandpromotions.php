<?php
  define('TITLE', 'News & Promotions');
  include('../html/template/header.html');
?>
<!-- include header -->

<div class="body">
  <div class="slideholder">
		<div id="box">
			<img src="../img/a1.jpg" alt="">
		</div>
		<p onclick="previmage()" type="button" name="button" class="leftbut"><</p>
		<p onclick="imagenext()" type="button" name="button" class="rightbut">></p>
  </div>
  <div class="blockcontain">
    <div class="center">
      <div class="makegrid">
        <div class="block">
          <img src="../img/block1.jpg" alt="">
          <div class="describtion">
            <h1>BOND WITH DAD AT JW MARRIOTT HOTEL BANGKOK</h1>
            <p>Give your dad the meal he deserves for Father’s Day! Treat the old man to a hearty and happy meal at one of his favourite restaurants on Father’s Day. Whether your dad loves a heavy Grand Brunch Buffet or a Dim Sum-filled feast, JW Marriott Hotel Bangkok with great Father’s […]</p>
          </div>
          <a href="#">More</a>


        </div>
        <div class="block">
          <p>2</p>
        </div>
        <div class="block">
          <p>3</p>
          <p>3</p>
          <p>3</p>
          <p>3</p>
          <p>3</p>
        </div>
        <div class="block">
          <p>4</p>
        </div>
      </div>
    </div> <!-- end center =============== -->
  </div> <!-- end bodycontain -->


</div> <!-- end body div =============== -->




<!-- include footer -->
<?php
  include('../html/template/footer.html');
?>
