var slideindex = document.getElementById("boxchef");
var image1 = [ '../img/a2.jpg', '../img/a3.jpg', '../img/a1.jpg'];
var i = image.length;
function imagenextchef()
{
  if (i<image1.length)
  {
    i=i+1;
  }
  else{
    i=1;
  }
  slideindex.innerHTML="<img src="+"\""+image1[i-1]+"\""+">";
  setTimeout(imagenext,10000);
}

function previmagechef()
{
  if (i<image1.length+1 && i>1)
  {
    i = i-1;
  }
  else {
    i = image1.length;
  }
  slideindex.innerHTML="<img src="+"\""+image1[i-1]+"\""+">";
}