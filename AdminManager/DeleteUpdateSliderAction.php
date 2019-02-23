
<?php

include 'Header.php';
?>
<html>
<head>
<title>Delete Slider Details</title>
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


$n=1;

$zsid =$_GET['zSID'];
$zurl="";
$ztitle="";
$zcontent="";


$ins_query="DELETE FROM slider WHERE zSID='".$zsid."'";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    echo "Record Deleted;<hr/>";
}
else
{
    echo "Something wrong in Delete query";
}



    
  

echo "<a href='UpdateSlider.php'>Go Back</a>";
?>

</div>
</div>


</body>
</html>


<?php 
include 'Footer.php';
?>