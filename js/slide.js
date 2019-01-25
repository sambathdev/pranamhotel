var i = 0;
var timer;
var path = [];

path[0] = "https://picsum.photos/800/600?image=1060";
path[1] = "https://picsum.photos/800/600?image=1061";
path[2] = "https://picsum.photos/800/600?image=1062";
path[3] = "https://picsum.photos/800/600?image=1063";

function changeImage(){
    document.getElementById("slide").src=path[i];

    if(i < path.length - 1){
        i++;
    }else {
        i = 0;
    }

    timer = setTimeout("changeImage()", 10000);
}

  function stopShow(){
      clearTimeout(timer);
  }

  function runShow() {
      changeImage();
  }

   window.onload = runShow;
