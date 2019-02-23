
<?php

include 'Header.php';
?>
<html>
<head>
<title>Edit Customer Details</title>
<style>
#mytable td {font-weight: bolder;text-align:center;}
</style>
</head>
<body>
<div class="container-fluid">
  <div class="col-lg-2">
  </div>
  
  <div class="col-lg-10">
<?php 
require_once('Connection.php');

$cid=$_GET["txtCustomerID"];
$cnam=$_GET["txtCName"];
$cadd=$_GET["txtCAddress"];
$ccity=$_GET["txtCCity"];
$cphone=$_GET["txtCPhone"];
$cemail=$_GET["txtCEmailID"];
$btn = $_GET["btnSubmit"];
if($btn=="Update")
{
	
	$ins_query="UPDATE customer SET CName='".$cnam."',CAddress='".$cadd."' ,CCity='".$ccity."',CPhone='".$cphone."',CEmailID='".$cemail."'
  WHERE CustomerID='".$cid."'";
	$qry=mysqli_query($con,$ins_query);

	if($qry>0)
	{
		echo "Record Updated;<hr/>";
	}
	else
	{
		echo "Something wrong in update query";
	}

}



echo "<a href='UpdateCustomer.php'>Go Back</a>";
?>


<h2>Customer Details are :</h2>
<table id="mytable" border='1'>
<tr><td>Customer ID</td><td>Customer Name</td><td>Customer Address</td><td>Customer City</td><td>Customer Phone</td><td>Customer Email</td></tr>
<tr><td><?php echo $cid; ?></td><td><?php echo $cnam; ?></td><td><?php echo $cadd;?></td>
<td><?php echo $ccity;?></td> <td><?php echo $cphone;?></td><td><?php echo $cemail;?></td>
   
</tr>
</table>
 </div>
</div>


</body>
</html>


<?php 
include 'Footer.php';
?>