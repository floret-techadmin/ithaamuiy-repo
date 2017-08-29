<div class="cf book_form">
  <?php 
    $ip = $_SERVER['REMOTE_ADDR'];        
    $path_mini_form="/var/www/enquiry/quick_enquiry.php"; //form with connect with database
    $website = $_SERVER['HTTP_HOST']; 
    include($path_mini_form);
  ?>
</div>