<html>
<head>
<title> Car Added</title>
</head>
<body>
<?php
require_once 'Connection.php';


$cartitle=$_GET["txtTitle"];
$carfeature=$_GET["txtFeatureSet"];
$cardescrip=$_GET["txtDescription"];
$carcdid=$_GET["txtCdid"];
$carprice=$_GET["txtPrice"];
$cid=$_GET["txtCustomerID"];
$aid=$_GET["txtAgentID"];

$ins_query="INSERT INTO zbc_carinfo( Title, FeatureSet, Description, CDID,Price,CustomerID,AgentID) 
   VALUES ('".$cartitle."','".$carfeature."','".$cardescrip."','".$carcdid."','".$carprice."','".$cid."','".$aid."')";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    ?>
    <center>
   CONGRATULATIONS RECORD INSERTED<hr/>
    <table border="1">
      <tr><td colspan="2">Car Details</td></tr>
      <tr><td>Title</td><td><?php echo $cartitle;?> </td></tr> 
      <tr><td>Feature Set</td><td><?php echo $carfeature;?> </td></tr> 
      <tr><td>Description</td><td><?php echo $cardescrip;?> </td></tr> 
      <tr><td>CDID</td><td><?php echo $carcdid;?> </td></tr> 
      <tr><td>Price</td><td><?php echo $carprice;?> </td></tr> 
      <tr><td>Customer ID</td><td><?php echo $cid;?> </td></tr> 
      <tr><td>Agent ID</td><td><?php echo $aid;?> </td></tr> 
      <tr><td ></td><td ><a href="Index.php">GO TO HOME</a>&nbsp;&nbsp; <a href="AddCar.php"> INSERT NEW RECORD</a></td>
	  
     
       </table>
       </center>
        
       <?php 
       
}
else
{
    echo "Something wrong in  insert query";

}
     ?> 
 
   

</body>
</html>
