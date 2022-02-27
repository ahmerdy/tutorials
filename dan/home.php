<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lib/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Automatic Slideshow</h2>

<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="images/img1.jpg" style="width:100%">
  <img class="mySlides" src="images/img3.jpg" style="width:100%">
  <img class="mySlides" src="images/img4.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_rr by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 17:41:40 GMT -->
</html>
