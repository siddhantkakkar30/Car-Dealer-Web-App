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

<title>Car : Edit</title>
<style>
#mytable td {font-weight: bolder;}
</style>
</head>
<body>
<?php
require_once('Connection.php');

$n=1;


$carid =$_GET['CarID'];
$cartitle="";
$carfeature="";
$cardescrip="";
$carcdid=0;
$carprice=0;
$cid=0;
$aid=0;


$sel_query="SELECT * FROM zbc_carinfo where CarID=".$carid;
$result = mysqli_query($con,$sel_query);
if($row = mysqli_fetch_assoc($result))
{
    
    
    $cartitle=$row['Title'];
    $carfeature=$row['FeatureSet'];
    $cardescrip=$row['Description'];
    $carcdid=$row['CDID'];
    $carprice=$row['Price'];
    $cid=$row['CustomerID'];
    $aid=$row['AgentID'];
	
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      </div>
      
      <div class="col-lg-6">
    
   
<form method="get" action="	EditUpdateCarAction.php">

<table class="table table-bordered">
<strong>Car Update</strong>
<br/>
<tr><td>Car Id</td><td> <input type="text" name="txtCarID"  value='<?php echo $carid;?>' class="form-control" required/></td></tr>
<tr><td>Car Title</td><td><input type="text"  name="txtTitle" value="<?php echo $cartitle;?>" class="form-control" required/></td></tr>
<tr><td>Car Feature</td><td><input type="text"  name="txtFeatureSet" value="<?php echo $carfeature;?>" class="form-control" required/></td></tr>
<tr><td>Car Description</td><td><input type="text"   name="txtDescription" value="<?php echo $cardescrip;?>" class="form-control" required/></td></tr>
<tr><td>CDID</td><td><input type="text"   name="txtCdid" value="<?php echo $carcdid;?>" class="form-control" required/></td></tr>
<tr><td>Price</td><td><input type="text"   name="txtPrice" value="<?php echo $carprice;?>" class="form-control" required/></td></tr>
<tr><td>Customer ID</td><td><input type="text"   name="txtCustomerID" value="<?php echo $cid;?>" class="form-control" required/></td></tr>
<tr><td>Agent ID</td><td><input type="text"   name="txtAgentID" value="<?php echo $aid;?>" class="form-control" required/></td></tr>



	<tr><td></td>
	<td>
	<input type="submit" name="btnSubmit"  class=" btn btn-info" value="Update"/></td></tr>
	
	
	


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
