
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



$n=1;

$aid =$_GET['AgentID'];
$anam="";
$aadd="";
$acity="";
$aphone=0;
$amobile=0;
$afax=0;
$aemail="";

$ins_query="DELETE FROM agent WHERE AgentID='".$aid."'";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    echo "Record Deleted;<hr/>";
}
else
{
    echo "Something wrong in Delete query";
}



    
  

echo "<a href='UpdateAgent.php'>Go Back</a>";
?>

</div>
</div>


</body>
</html>


<?php 
include 'Footer.php';
?>