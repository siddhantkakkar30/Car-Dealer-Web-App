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

$aid =$_GET['AgentID'];
$anam="";
$aadd="";
$acity="";
$aphone=0;
$amobile=0;
$afax=0;
$aemail="";


$sel_query="SELECT * FROM agent where AgentID=".$aid;
$result = mysqli_query($con,$sel_query);
if($row = mysqli_fetch_assoc($result))
{
    
	$anam=$row['AName'];
	$aadd=$row['AAddress'];
	$acity=$row['ACity'];
	$aphone=$row['APhone'];
	$amobile=$row['AMobile'];
	$afax=$row['AFax'];
	$aemail=$row['AEmailID'];
	
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      </div>
      
      <div class="col-lg-6">
    
   
<form method="get" action="	EditUpdateAgentAction.php">

<table class="table table-bordered">
<strong>Agent Update</strong>
<br/>
<tr><td>Agent Id</td><td> <input type="text" name="txtAgentID"  value='<?php echo $aid;?>' class="form-control" required/></td></tr>
<tr><td>Agent Name</td><td><input type="text"  name="txtAName" value="<?php echo $anam;?>" class="form-control" required/></td></tr>
<tr><td>Agent Address</td><td><input type="text"  name="txtAAddress" value="<?php echo $aadd;?>" class="form-control" required/></td></tr>
<tr><td>Agent City</td><td><input type="text"   name="txtACity" value="<?php echo $acity;?>" class="form-control" required/></td></tr>
<tr><td>Agent Phone</td><td><input type="text"   name="txtAPhone" value="<?php echo $aphone;?>" class="form-control" required/></td></tr>
<tr><td>Agent Mobile</td><td><input type="text"   name="txtAMobile" value="<?php echo $amobile;?>" class="form-control" required/></td></tr>
<tr><td>Agent Fax</td><td><input type="text"   name="txtAFax" value="<?php echo $afax;?>" class="form-control" required/></td></tr>
<tr><td>Agent Email ID</td><td><input type="text"   name="txtAEmailID" value="<?php echo $aemail;?>" class="form-control" required/></td></tr>



	<tr><td></td>
	<td>
	<input type="submit" name="btnSubmit"  class=" btn btn-warning" value="Update"/></td></tr>
	
	
	


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
