<html>
<head>
<title> Add Customer</title>
</head>
<body>
<?php
require_once 'Connection.php';





$cnam=$_GET["txtCName"];
$cadd=$_GET["txtCAddress"];
$ccity=$_GET["txtCCity"];
$cphone=$_GET["txtCPhone"];
$cemail=$_GET["txtCEmailID"];

$ins_query="INSERT INTO customer( CName, CAddress, CCity, CPhone,CEmailID) 
   VALUES ('".$cnam."','".$cadd."','".$ccity."','".$cphone."','".$cemail."')";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    ?>
    <center>
   CONGRATULATIONS RECORD INSERTED<hr/>
    <table border="1">
      <tr><td colspan="2">Customer Details</td></tr>
      <tr><td>Customer Name</td><td><?php echo $cnam;?> </td></tr> 
      <tr><td>Customer Address</td><td><?php echo $cadd;?> </td></tr> 
      <tr><td>CustomerCity</td><td><?php echo $ccity;?> </td></tr> 
      <tr><td>Customer Phone</td><td><?php echo $cphone;?> </td></tr> 
      <tr><td>Customer Email</td><td><?php echo $cemail;?> </td></tr> 
      <tr><td ></td><td ><a href="Index.php"> Go Back</a>&nbsp;&nbsp; <a href="AddCustomer.php"> INSERT NEW RECORD</a></td>
	  
     
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
