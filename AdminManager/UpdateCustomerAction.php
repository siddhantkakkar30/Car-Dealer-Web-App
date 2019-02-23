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

<title>Customer : Edit</title>
<style>
#mytable td {font-weight: bolder;}
</style>
</head>
<body>
<?php
require_once('Connection.php');

$n=1;


$cid =$_GET['CustomerID'];
$cnam="";
$cadd="";
$ccity="";
$cphone=0;
$cemail="";


$sel_query="SELECT * FROM customer where CustomerID=".$cid;
$result = mysqli_query($con,$sel_query);
if($row = mysqli_fetch_assoc($result))
{
    
    
    $cnam=$row['CName'];
    $cadd=$row['CAddress'];
    $ccity=$row['CCity'];
    $cphone=$row['CPhone'];
    $cemail=$row['CEmailID'];
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      </div>
      
      <div class="col-lg-6">
    
   
<form method="get" action="	EditUpdateCustomerAction.php">

<table class="table table-bordered">
<strong>Car Update</strong>
<br/>
<tr><td>Customer Id</td><td> <input type="text" name="txtCustomerID"  value='<?php echo $cid;?>' class="form-control" required/></td></tr>
<tr><td>Customer Name</td><td><input type="text"  name="txtCName" value="<?php echo $cnam;?>" class="form-control" required/></td></tr>
<tr><td>Customer Address</td><td><input type="text"  name="txtCAddress" value="<?php echo $cadd;?>" class="form-control" required/></td></tr>
<tr><td>Customer City</td><td><input type="text"   name="txtCCity" value="<?php echo $ccity;?>" class="form-control" required/></td></tr>
<tr><td>Customer Phone No</td><td><input type="text"   name="txtCPhone" value="<?php echo $cphone;?>" class="form-control" required/></td></tr>
<tr><td>Customer Email Id</td><td><input type="text"   name="txtCEmailID" value="<?php echo $cemail;?>" class="form-control" required/></td></tr>



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
