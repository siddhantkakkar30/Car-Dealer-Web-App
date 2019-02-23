<?php

include 'Header.php';
?>
<!DOCTYPE html>
<html>
<head>

<link rel="icon" href="../../favicon.ico">

<title>Example Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    
    <link href="css/style1.css" rel="stylesheet" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Slider : Edit</title>
<style>
#mytable td {font-weight: bolder;}
</style>
</head>
<body>
<?php
require_once('Connection.php');

$n=1;

$zsid =$_GET['zSID'];
$zurl="";
$ztitle="";
$zcontent="";


$sel_query="SELECT * FROM slider where zSID=".$zsid;
$result = mysqli_query($con,$sel_query);
if($row = mysqli_fetch_assoc($result))
{
    
	$zurl=$row['zImageUrl'];
	$ztitle=$row['zTitle'];
	$zcontent=$row['zContent'];
	
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      </div>
      
      <div class="col-lg-6">
    
   
<form method="get" action="	EditUpdateSliderAction.php">

<table class="table table-bordered">
<strong>Slider Update</strong>
<br/>
<tr><td>Slider Id</td><td> <input type="text" name="txtSliderID"  value='<?php echo $zsid;?>' class="form-control" required/></td></tr>
<tr><td>Slider Image Url</td><td><input type="text"  name="txtImageUrl" value="<?php echo $zurl;?>" class="form-control" required/></td></tr>
<tr><td>Slider Title</td><td><input type="text"  name="txtTitle" value="<?php echo $ztitle;?>" class="form-control" required/></td></tr>
<tr><td>Slider Content</td><td><input type="text"   name="txtContent" value="<?php echo $zcontent;?>" class="form-control" required/></td></tr>



	<tr><td></td>
	<td>
	<input type="submit" name="btnSubmit"  class=" btn btn-danger" value="Update"/></td></tr>
	
	
	


</table>
</form>

 </div>
  </div>
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

<?php 
include 'Footer.php';

?>