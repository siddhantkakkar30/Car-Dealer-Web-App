<html>
<head>
<title> Add Book</title>
</head>
<body>
<?php
require_once 'Connection.php';


$anam=$_GET["txtAName"];
$aadd=$_GET["txtAAddress"];
$acity=$_GET["txtACity"];
$aphone=$_GET["txtAPhone"];
$amobile=$_GET["txtAMobile"];
$afax=$_GET["txtAFax"];
$aemail=$_GET["txtAEmailID"];

$ins_query="INSERT INTO agent( AName, AAddress, ACity, APhone,AFax,AMobile,AEmailID) 
   VALUES ('".$anam."','".$aadd."','".$acity."','".$aphone."','".$amobile."','".$afax."','".$aemail."')";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    ?>
    <center>
   CONGRATULATIONS RECORD INSERTED<hr/>
    <table border="1">
      <tr><td colspan="2">Agent Details</td></tr>
      <tr><td>Agent Name</td><td><?php echo $anam;?> </td></tr> 
      <tr><td>Agent Address</td><td><?php echo $aadd;?> </td></tr> 
      <tr><td>Agent City</td><td><?php echo $acity;?> </td></tr> 
      <tr><td>Agent Phone</td><td><?php echo $aphone;?> </td></tr> 
      <tr><td>Agent Mobile</td><td><?php echo $amobile;?> </td></tr> 
      <tr><td>Agent Fax</td><td><?php echo $afax;?> </td></tr> 
      <tr><td>Agent Email</td><td><?php echo $aemail;?> </td></tr> 
      <tr><td ></td><td ><a href="Index.php">GO TO HOME</a>&nbsp;&nbsp; <a href="AddAgent.php"> INSERT NEW RECORD</a></td>
	  
     
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
