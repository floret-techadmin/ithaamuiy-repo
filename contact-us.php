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
<body class="cntMnu"> 
<!--================header start===========-->
<?php include("includes/header.php");?>
<!--================header end===============-->  
<!--=====================section start=============-->
<section>
  <div class="container">
    <h1 class="mb50">Contact Us</h1>
    <div class="cf">
      <?php
        $ip = $_SERVER['REMOTE_ADDR'];
        $website = $_SERVER['HTTP_HOST'];
        $path_db_form="/var/www/enquiry/form.php"; //form with connect with database
        $path_no_db_form="/var/www/enquiry/no-db-form.php";// form without database connections
        $path_db_config="/var/www/enquiry/dbconn.php"; // config path for common to all
        include_once($path_db_config);
        if(mysqli_connect_errno()) {
        include($path_no_db_form);
        }
        else{
        $fields = " company_code";
        $conditions =" website LIKE '%$website%'";
        $company_codeqry = $objErpConnect->select("company_basic", $fields, $conditions);
        $company_data = mysqli_fetch_object($company_codeqry);
        $company_code = $company_data->company_code;
        include($path_db_form);
        }
      ?>
    </div>
  </div>
</section>
<!--==================section end===================-->
<!--======================footer start===============-->
<?php include("includes/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){
  //$(".mainNav li.home a").addClass("active"); //menu active   
  $(':contains("Republic Of Maldives, Maldives")').each(function(){
    $(this).html($(this).html().split("Republic Of Maldives, Maldives").join("<br>Republic Of Maldives"));
  });
}); 
</script>
<script type="text/javascript">
    function postContactToGoogle(){
      $('#send').attr('value', 'Please Wait...');
      var name              = $('#name').val();
      var email             = $('#email').val();
      var phone             = $('#phone').val();
      var location          = $('#location').val();
      var description       = $('#description').val();
            $.ajax({
                url: "https://docs.google.com/forms/d/1JcuaHzivN6lph_LRFwY-BkGO34CB1uOtVfd_pU9bAuI/formResponse",
                data: {"entry.2005620554" : name, "entry.1045781291" : email, "entry.1166974658": phone, "entry.1065046570": location, "entry.839337160": description},
                type: "POST",
                dataType: "xml",
                statusCode: {
                    0: function (){
                        $('#name').val("");
                        $('#email').val("");
                        $('#phone').val("");
                        $('#location').val("");
                        $('#description').val("");
                        $('#send').attr('value', 'Submit');
                        window.location.href = 'thanks.php';
                        //Success message
                    },
                    200: function (){
                        $('#name').val("");
                        $('#email').val("");
                        $('#phone').val("");
                        $('#location').val("");
                        $('#description').val("");
                        $('#send').attr('value', 'Submit');
                        window.location.href = 'thanks.php';
                    }
                }
            });
    }
</script>
<!--==================footer end===================-->
</body>
</html>
