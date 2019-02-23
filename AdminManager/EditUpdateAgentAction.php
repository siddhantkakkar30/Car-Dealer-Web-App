
<?php

include 'Header.php';
?>
<html>
<head>
<title>Edit Agent Details</title>
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

$aid=$_GET["txtAgentID"];
$anam=$_GET["txtAName"];
$aadd=$_GET["txtAAddress"];
$acity=$_GET["txtACity"];
$aphone=$_GET["txtAPhone"];
$amobile=$_GET["txtAMobile"];
$afax=$_GET["txtAFax"];
$aemail=$_GET["txtAEmailID"];
$btn = $_GET["btnSubmit"];
if($btn=="Update")
{
	
	$ins_query="UPDATE agent SET AName='".$anam."',AAddress='".$aadd."' ,ACity='".$acity."',APhone='".$aphone."',AMobile='".$amobile."',AFax='".$afax."',AEmailID='".$aemail."'
  WHERE AgentID='".$aid."'";
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


<h2>Agent Details are :</h2>
<table id="mytable" border='1'>
<tr><td>Agent ID</td><td>Agent Name</td><td>Agent Address</td><td>Agent City</td><td>Agent Phone</td><td>Agent Mobile</td><td>Agent Fax</td><td>Agent Email</td></tr>
<tr><td><?php echo $aid; ?></td><td><?php echo $anam; ?></td><td><?php echo $aadd;?></td><td><?php echo $acity;?></td>
    <td><?php echo $aphone;?></td><td><?php echo $amobile;?></td><td><?php echo $afax;?></td><td><?php echo $aemail;?></td>
</tr>
</table>
 

</div>
</div>
</body>
</html>


<?php 
include 'Footer.php';
?>