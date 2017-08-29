<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Renaatus Ithaa Muiy</title>
<meta name="Description" content="" /> 
<meta name="Keywords" content="" /> 
<meta name="robots" content="index,follow" /> 
<link rel="canonical" href="http://www./" />
<?php include("includes/csslinks.php");?>
 
</head>
<body class="abtMnu"> 
<!--================header start===========-->
<?php include("includes/header.php");?>
<!--================header end===============-->  
<!--=====================section start=============-->
<section>
  <div class="abtMain">
    <div class="abtDiv">
      <h1 class="mb50" id="ov">About Us</h1>
      <h2 class="mb30">RPP Group was established in 1970, with construction as its main focus.</h2>
      <p class="mb30">Today RPP Group is one of South India’s leading conglomerate infrastructure Development group. Headquartered in Erode, the group has branch offices in several cities in South India.</p>
      <p class="mb30">Our portfolio houses services like construction, construction supervision and survey. We also push ourselves in construction of commercial building, villas, apartments etc. Our driving forces are our principles, quality, our timely management skills, technology and expertise.</p>
      <p class="mb30">Our team of experts has an in depth knowledge of construction and infrastructure with an added attribute of high motivation. Our experts possess the ability to constantly update themselves with the new developments of the industry that help them in handling every project carefully.</p>    
      <p>We handle projects related to construction of private, public, international, housing, irrigation, mining, providing materials for construction, construction supervision and so on.</p>    
    </div>
    <div class="cf"></div>
    <h3 class="hl_txt">Renaatus Projects</h3>
  </div>
  <div class="cf"></div>
  <div class="container">
    <div class="cf vmBg tAc">
      <h1 class="mb50" id="vm">Vision</h1>
      <p>To create a strong repute as a construction, contracting and development company aligned with time, budget, quality and safety.</p>
      <div class="cf vm_bor"></div>
      <h1 class="mb50">Mission</h1>
      <p>To invest our time and money in equipment, innovation and technology and provide landmark infrastructures.</p>
    </div>
  </div>
  <div class="vmBox"></div>
  <div class="cf mb60"></div>
  <div class="container">
    <h1 class="tAc mb60" id="bod">Board of Directors</h1>
    <div class="cf">
      <div class="bodMain">
        <img src="images/selvasundaram.png" alt="" />
        <h2>R.P. Selvasundaram</h2>
        <h5>Chairman & Managing Director</h5>
        <p>A post-graduate in business administration from the Institute of Business Administration and Management (IBAM), New Delhi.</p>
      </div>      
      <div class="bodMain">
        <img src="images/padmini-sundaram.png" alt="" />
        <h2>Padmini Sundaram</h2>
        <h5>Executive Director</h5>
        <p>She handles the finance and administration department. Her zeal has helped in moulding a young, dedicated and competitive workforce.</p>
      </div>
      <div class="bodMain">
        <img src="images/manoj-poosappan.png" alt="" />
        <h2>Manoj Poosappan</h2>
        <h5>Joint Managing Director</h5>
        <p>A post-graduate in Construction Economics and Management from University College London, United Kingdom.</p>
      </div>      
    </div>
  </div>
  <div class="cf mb100"></div>
  <div class="cf whyBg mb100">
    <div class="container">
      <div class="cf mb60 tAc" id="why">
        <h1 class="mb20 whiteClr">Why Us</h1>
        <!-- <h5 class="mb45"></h5> -->
      </div>
      <div class="Carousel cf">
        <div id="whyus" class="owl-carousel abt_why">
          <div class="item">
            <h4>Total area Developed (till date)</h4>
            <h3>9.6 Million sq. ft</h3>
          </div>
          <div class="item">
            <h4>Residential Housing area</h4>
            <h3>2.64 Million sq. ft </h3>
          </div>
          <div class="item">
            <h4>Institutions and Commercial Spaces area</h4>
            <h3>4.48 million sq. ft</h3>
          </div>
          <div class="item">
            <h4>Government Projects area</h4>
            <h3>5.27 Million sq. ft</h3>
          </div>
          <div class="item">
            <h4>Total Number of Projects (till date)</h4>
            <h3>50 +</h3>
          </div>
          <div class="item">
            <h4>Total People Residing in the Buildings Constructed by us</h4>
            <h3>23500 people</h3>
          </div>
          <div class="item">
            <h4>Total People Employed by us</h4>
            <h3>450 people</h3>
          </div>
          <div class="item">
            <h4>Total Work-in-Progress</h4>
            <h3>5.04 Million sq. ft</h3>
          </div>
        </div>
      </div>    
    </div>
  </div>
  <div class="container">
    <div class="cf awardBg tAc">
      <h1 class="mb50" id="ah">Awards & Honours</h1>
      <p class="mb50">We have garnered awards and honours from reputed names in the construction industry. Our awards and recognition is a testimony to our quality construction. Our company has been bestowed with:</p>
      <h2>The Construction Industry Award 2013</h2>
    </div>
  </div>
  <div class="cf mb60"></div>
</section>
<!--==================section end===================-->
<!--======================footer start===============-->
<?php include("includes/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){
    //$(".mainNav li.home a").addClass("active"); //menu active 
  $(".abt_why").owlCarousel({
    items : 3, //10 items above 1000px browser width
    itemsDesktop : [1024,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // betweem 900px and 601px
    itemsTablet: [670,1], //2 items between 600 and 0
    itemsMobile : [380,1], // itemsMobile disabled - inherit from itemsTablet option
    navigation : true,
    pagination : true,
    autoPlay: 3000,
    //autoPlay: false,
    slideSpeed : 1000,
  });  
}); 
</script>
<script type="text/javascript">
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
&& location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - 100 //offsets for fixed header
      }, 1000);
      return false;
    }
  }
});
//Executed on page load with URL containing an anchor tag.
if($(location.href.split("#")[1])) {
    var target = $('#'+location.href.split("#")[1]);
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - 100 //offset height of header here too.
      }, 1500);
      return false;
    }
  }
});
</script>
<!--==================footer end===================-->
</body>
</html>
