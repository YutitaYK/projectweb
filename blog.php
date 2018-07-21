<?php
if (!defined('WEB_ROOT')) {
  exit;
}
?>
<div class="row">
    <div class="col-md-12"> 
      <?php require_once 'include/nevMenu.php'; ?>
    </div>
  <style>

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  
  padding: 5px;
  margin-top: -20px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 10px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  
  border-radius: 50%;
  display: inline-block;

}



/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 15000s;
  animation-name: fade;
  animation-duration: 15000s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>


</div>
<div class="slideshow-container">

<div class="mySlides fade ">

  <div class="numbertext">1 / 2</div>
  <img src="images/smart-farming-4.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 1</div>
  <img src="images/smart-farming-6.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<div class="container">
  <h2>บล็อกความรู้เทคโนโลยีกับการเกษตร 4.0</h2>
  <p>ในอนาคตความต้องการบริโภคผลผลิตทางการเกษตรและเนื้อสัตว์ต่อคนจะเพิ่มขึ้นมากจากจำนวนประชากรโลก องค์การอาหารและการเกษตรแห่งสหประชาชาติ ประมาณการว่าประชากรโลกจะเพิ่มขึ้นราว 35% เป็น 9.7 พันล้านคนในปี 2050</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">บล็อก</a></li>
    <li><a data-toggle="tab" href="#menu1">ราคาเห็ด</a></li>
    <li><a data-toggle="tab" href="#menu2">เทคโนโลยีกับการเกษตร</a></li>
    <li><a data-toggle="tab" href="#menu3">พูดคุยเรื่องเห็ดเห็ด</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>บล็อกความรู้</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>ราคาเห็ดแต่ละวัน</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>ข่าวเกษตรกรยุคใหม่</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>พูดคุยเรื่องเห็ดเห็ด</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
<?php require_once 'include/footer.php'; ?>

