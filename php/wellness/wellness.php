<?php
  session_start();
  define('TITLE','Gym');
  include('../../html/template/header.html');
?>

<div class="indexbody">
  <!-- write your html here -->
  <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../../img/wellness/camille-kmile-1120204-unsplash.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../../img/wellness/brooke-lark-182428-unsplash.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../../img/wellness/CHI-Mothers-Day-Spa-_Shangri-La-Hotel-Bangkok-Celebrates-Mothers-Day-with-Jasmine-Moment.jpg" style="width:100%; padding-top:80px;">
  <div class="text"></div>
</div>

<!-- The dots/circles -->

</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>


  <div class="blog-container-wellness">
    <img class="introPic" src="../../img/wellness/camille-kmile-1120204-unsplash.jpg" alt="">
    <h1 class="header-in-blog">High Qualities Shampoo </h1> <br> <br>
    <p class="preview-wellness">Testers of all hair types adored this shampoo’s super-soft finish and subtle rose scent, though those with oily hair found that they had to wash more frequently. Gentle surfactants that will get your hair clean, but not so many moisturizing ingredients that it will be weighed down this shampoo left testers’ oily hair feeling light and refreshed. This shampoo was recently recommended to me and I haven't used anything else since. It gently cleans my hair without making it super dry. As for my conditioner, I use this mask from the same collection. A tiny bit each time I wash goes a long way and keeps my hair extra hydrated.</p>
  </div>
  <div class="blog-container-wellness">
    <img class="introPic" src="../../img/wellness/brooke-lark-182428-unsplash.jpg" alt="">
    <h1 class="header-in-blog">Special technique</h1>
    <p class="preview-wellness">Few of us are born with innate massaging skills, yet virtually all of us love to give and receive good massages. Because of the many benefits of massage—relieving pain and reducing stress—learning to give a better massage to yourself or your partner can be profound, and everyone can do it. I spoke with expert masseuse and founder of Elements Therapeutic Massage, Michele Merhib, to gather some tips for increasing your massage-fu.</p>
  <p></p>
  </div>
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}



function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 9000); // Change image every 2 seconds
}
</script>
</div>

<?php
include('../../html/template/footer.html');
 ?>
