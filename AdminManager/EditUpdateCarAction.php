
<?php

include 'Header.php';
?>
<html>
<head>
<title>Edit Car Details</title>
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





$carid =$_GET['txtCarID'];
$cartitle=$_GET['txtTitle'];
$carfeature=$_GET['txtFeatureSet'];
$cardescrip=$_GET['txtDescription'];
$carcdid=$_GET['txtCdid'];
$carprice=$_GET['txtPrice'];
$cid=$_GET['txtCustomerID'];
$aid=$_GET['txtAgentID'];

{
	
	$ins_query="UPDATE zbc_carinfo SET Title='".$cartitle."',FeatureSet='".$carfeature."' ,Description='".$cardescrip."',CDID='".$carcdid."',Price='".$carprice."',CustomerID='".$cid."',AgentID='".$aid."'
  WHERE CarID='".$carid."'";
	
	
	
	
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



echo "<a href='Index.php'>Go Back</a>";
?>


<h2>Car Details are :</h2>
<table id="mytable" border='1'>
<tr><td>Car ID</td><td>Car Title</td><td>Feature</td><td>Description</td><td>CDID</td><td>Price</td><td>Customer ID</td><td>Agent ID</td></tr>
<tr><td><?php echo $carid; ?></td><td><?php echo $cartitle; ?></td><td><?php echo $carfeature;?></td><td><?php echo $cardescrip;?></td>
    <td><?php echo $carcdid;?></td><td><?php echo $carprice;?></td><td><?php echo $cid;?></td><td><?php echo $aid;?></td>
</tr>
</table>
 

</div>
</div>
</body>
</html>


<?php 
include 'Footer.php';
?>