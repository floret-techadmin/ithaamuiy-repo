<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Renaatus </title>
<meta name="Description" content="" /> 
<meta name="Keywords" content="" /> 
<meta name="robots" content="index,follow" /> 
<link rel="canonical" href="http://www./" />
<?php include("includes/csslinks.php");?>
<link rel="stylesheet" type="text/css" href="css/flexslider.css"/>
</head>
<body class="hmMnu"> 
<!--================header start===========-->
<?php include("includes/header.php");?>
<!--================header end===============-->
<!--=====================Slider start=============-->
<div id="slide">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="images/slider-1.jpg" alt="" />
        <div class="banner">         
          <h4>01 <br/>Ithaa Muiy<br/><span>Penthouse balcony</span></h4>          
          <h1 class="mb25">Your architectural <span>masterpiece awaits you</span></h1> 
        </div>
      </li>
      <li><img src="images/slider-2.jpg" alt="" />
        <div class="banner">         
          <h4>02 <br/>Ithaa Muiy<br/><span>Interior View</span></h4>          
          <h1 class="mb25">Your architectural <span>masterpiece awaits you</span></h1> 
        </div>
      </li>
      <li><img src="images/slider-3.jpg" alt="" />
        <div class="banner">
          <h4>03 <br/>Ithaa Muiy<br/><span>Exterior View</span></h4>
          <h1 class="mb25">Your architectural <span>masterpiece awaits you</span></h1>
        </div>
      </li>
      <li><img src="images/slider-4.jpg" alt="" />
        <div class="banner"> 
          <h4>04 <br/>Ithaa Muiy<br/><span>Exterior View</span></h4>
          <h1 class="mb25">Your architectural <span>masterpiece awaits you</span></h1>
        </div>
      </li>
      <li><img src="images/slider-5.jpg" alt="" />
        <div class="banner">         
          <h4>05 <br/>Ithaa Muiy<br/><span>Exterior View</span></h4>
          <h1 class="mb25">Your architectural <span>masterpiece awaits you</span></h1> 
        </div>
      </li>      
    </ul> 
  </div>    
</div>
<!--=====================Slider end=============-->      
<!--=====================section start=============-->
<section>

<div class="cf mb100"></div>
<div class="cf tAc">
  <h6 class="mb15">01</h6>
  <h1 class="mb20">About Ithaa Muiy</h1>
  <h5 class="mb45">A luxury waterfront property in Hulhumale, Maldives!</h5>
</div>
<div class="reqBg">
  <div class="container">
    <div class="req_left">
      <p class="mb25">Guided by technology and expertise, we believe in building quality constructions and architectural masterpieces. We have completed two commercial projects in Male, Republic of Maldives. Renaatus Ithaa Muiy will mark our debut housing project in the international segment. </p>
      <a class="rm_link" href="renaatus-ithaa-muiy.php">Read More</a>
    </div>
    <a class="reqLink" href="contact-us.php">Enquire<br/>here</a>
  </div>
</div>
<div class="cf"></div>

<div class="cf rooms">
  <img src="images/living-room.jpg" alt="Living Room" /><p class="imgTxt">Living Room</p>
</div>
<div class="cf rooms">
  <img src="images/apartment-interior-views.jpg" alt="Apartment Interior Views" /><p class="imgTxt">Apartment Interior Views</p>
</div>
<div class="cf rooms">
  <img src="images/club-interior-views.jpg" alt="Club Interior Views" /><p class="imgTxt">Club Interior Views</p>
</div>
<div class="cf rooms">
  <img src="images/exterior-views.jpg" alt="Exterior Views" /><p class="imgTxt">Exterior Views</p>
</div>

<div class="cf mb100"></div>
<div class="container">
  <div class="cf mb60 tAc">
    <h6 class="mb15">02</h6>
    <h1 class="mb20">COMPLETED PROJECTS in MALDIVES</h1>
    <h5 class="mb45">Commitment, Reliability & Integrity!</h5>
  </div>
  <div class="cf mb100">
    <div class="cpMain">
      <img src="images/completed-project-1.jpg" alt="" />
      <h2 class="mb10">India Maldives Friendship <br/>Faculty of Hospitality</h2>
      <h3 class="mb30">Male, Republic of Maldives</h3>
      <!-- <p></p> -->
    </div>
    <div class="cpMain fRight">
      <img src="images/completed-project-2.jpg" alt="" />
      <h2 class="mb10">Renovation of Work of Indira Gandhi Memorial Hospital (I.G.M.H) </h2>
      <h3 class="mb30">Male, Republic of Maldives</h3>
      <!-- <p></p> -->
    </div>
  </div>
</div>
<div class="cf"></div>
<div class="cf bookBg">
  <div class="book_container">
    <h2 class="mb50 tAc">Book your masterpiece today </h2>
    <!-- <form action="#" method="post" id="book_masterpiece" class="book_form cf">          
      <div class="group">
        <input type="text" id="enq_name" name="enq_name" class="field" placeholder="Name" required />
      </div> 
      <div class="group pull-right">
        <input type="text" id="enq_mail" name="enq_mail" class="field" placeholder="Email" required />
      </div>
      <div class="group">
        <input type="text" id="enq_phone" name="enq_phone" class="field" placeholder="Phone" onkeypress="return isNumberKey(event)" required />
      </div>   
      <div class="group pull-right">
        <input type="text" id="Configuration" name="Configuration" class="field" placeholder="Configuration" required />
      </div> 
      <div class="group pull-right">
        <input type="text" id="Project" name="Project" class="field" placeholder="Project" required />
      </div>    
      <div class="group pull-right mb0">
        <input type="submit" value="BOOK NOW" class="submit" />
      </div>
    </form> -->

    <div class="cf book_form">
      <?php 
        $ip = $_SERVER['REMOTE_ADDR'];        
        $path_mini_form="/var/www/enquiry/quick_enquiry.php"; //form with connect with database
        $website = $_SERVER['HTTP_HOST']; 
        include($path_mini_form);
      ?>
    </div>
  </div>
</div>
</section>
<!--==================section end===================-->
<!--======================footer start===============-->
<?php include("includes/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){    
    //$(".sideMenu li.h_active a").addClass("mnu_active"); //menu active  
}); 
</script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript">
//Flexslider
$(window).load(function() {
  $('.flexslider').flexslider({
      animation: "fade",
      slideshow: true,  
    });
  });
</script>
<!--==================footer end===================-->
</body>
</html>
