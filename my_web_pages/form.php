 <?php
 // Create connection
$con=mysqli_connect("localhost","root","","breast_feeding");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="INSERT INTO tbl_registration_form(mother_name, date_of_birth, del_date, state, current_city, area, pincode, mobile, mail)
  VALUES('$_REQUEST[mother_name]', '$_REQUEST[date_of_birth]','$_REQUEST[del_date]', '$_REQUEST[state]', '$_REQUEST[currentcity]', '$_REQUEST[area]', '$_REQUEST[pincode]', '$_REQUEST[mobile]', '$_REQUEST[mail]')";

  
  if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
  ?>
  
 <?php
//multiple recipients
$to  = $_POST["mail"];

//subject
$subject = 'Promoting Breastfeeding';

// message
$message = '

<!DOCTYPE html>
<html lang="en">
<head>
  <title><h2>Promoting Breastfeeding</h2></title>
</head>
<body>
  <p><h3>Congratulations!!!</h3></p>
  <p><h4>You have been registered successfully.</h4></p>
  <p><h4>Please <a href="http://192.168.1.2/My%20Project/breast%20feeding/post%20registration/post_registration_form.html">click here</a>  on the link provided below to complete your Registration.</h4></p>
  </body>
</html>
';

//Send the Content-type header
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



// Mail it
$mail_sent = @mail($to, $subject, $message, $headers);
echo $mail_sent ? "Mail sent" : "Mail failed";

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
<form class="jotform-form" name="contact_thanks" id="contact_thanks" style="margin-top:125px">
  <input type="hidden" name="formID"  />
  <div class="form-all" style="margin-left:325px">
    <ul class="form-section">
      <li id="cid_1" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_1" class="form-header" style="margin-left:100x">
            THANK YOU FOR REGISTERING WITH US...!!!<br/><br/>  PLEASE CHECK YOUR E-MAIL TO PROCEED FURTHER
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
  
 