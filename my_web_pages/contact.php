<?php
// Create connection
$con=mysqli_connect("localhost","root","","breast_feeding");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   $sql="INSERT INTO tbl_contact(name, mail, message)
  VALUES('$_REQUEST[name]','$_REQUEST[mail]', '$_REQUEST[message]')";
  
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


mysqli_close($con);
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../assets/css/formCss.css3.1.1037.css" rel="stylesheet" type="text/css"/>
<link type="text/css" rel="stylesheet" href="../assets/css/pastel.css3.1.css"/>
<link type="text/css" media="print" rel="stylesheet" href="..assets/css/printForm.css3.1.css"/>

<style type="text/css">
    .form-label{
        width:150px !important;
    }
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:690px;
        background:url("../assets/img/noise.png") repeat scroll 0% 0% rgb(207, 204, 200);
        color:rgb(82, 75, 58) !important;
        font-family:'Tahoma';
        font-size:13px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:rgb(242, 214, 5);
    }

</style>
<body>
<form class="jotform-form" name="contact_thanks" id="contact_thanks" style="margin-top:150px">
  <input type="hidden" name="formID"  />
  <div class="form-all" style="margin-left:325px">
    <ul class="form-section">
      <li id="cid_1" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_1" class="form-header" style="margin-left:100x">
            THANKS!!!  YOU WILL BE CONTACTED SOON !!!
          </h2>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_3">
        <div id="cid_3" class="form-input-wide">
          <img alt="" class="form-image" border="0" src="../assets/img/thanks.jpg" height="188" width="268" style="margin-left:225px"/>
        </div>
      </li>
      <li style="clear:both">
      </li>
    </ul>
  </div>
</form>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/js3.1.1037.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script type="text/javascript">
   JotForm.init();
</script>
</body>
</HTML>
