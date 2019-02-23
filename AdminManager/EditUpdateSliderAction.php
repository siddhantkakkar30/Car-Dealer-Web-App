<?php

include 'Header.php';
?>
<html>
<head>
<title>Edit Slider Details</title>
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

$zsid=$_GET["txtSliderID"];
$zurl=$_GET["txtImageUrl"];
$ztitle=$_GET["txtTitle"];
$zcontent=$_GET["txtContent"];

$btn = $_GET["btnSubmit"];
if($btn=="Update")
{
	
	$ins_query="UPDATE slider SET zImageUrl='".$zurl."',zTitle='".$ztitle."' ,zContent='".$zcontent."'  WHERE zSID='".$zsid."'";
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



echo "<a href='UpdateSlider.php'>Go Back</a>";
?>


<h2>Slider Details are :</h2>
<table id="mytable" border='1'>
<tr><td>Slider ID</td><td>Slider Image Url</td><td>Slider Title</td><td>Slider Content</td></tr>
<tr><td><?php echo $zsid; ?></td><td><?php echo $zurl; ?></td><td><?php echo $ztitle;?></td><td><?php echo $zcontent;?></td>
   
</tr>
</table>
 

</div>
</div>
</body>
</html>


<?php 
include 'Footer.php';
?>