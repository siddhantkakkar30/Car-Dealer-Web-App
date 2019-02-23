
<?php

include 'Header.php';
?>
<html>
<head>
<title>Delete Customer Details</title>
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

$carid =$_GET['CarID'];
$cartitle="";
$carfeature="";
$cardescrip="";
$carcdid=0;
$carprice=0;
$cid=0;
$aid=0;

$ins_query="DELETE FROM zbc_carinfo  WHERE CarID='".$carid."'";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    echo "Record Deleted;<hr/>";
}
else
{
    echo "Something wrong in Delete query";
}



    
  

echo "<a href='UpdateCar.php'>Go Back</a>";
?>

</div>
</div>


</body>
</html>


<?php 
include 'Footer.php';
?>