<html>
<head>
<title> Add Customer</title>
</head>
<body>
<?php
require_once 'Connection.php';


$zurl=$_GET["txtImageUrl"];
$ztitle=$_GET["txtTitle"];
$zcontent=$_GET["txtContent"];


$ins_query="INSERT INTO slider( zImageUrl, zTitle, zContent) 
   VALUES ('".$zurl."','".$ztitle."','".$zcontent."')";
$qry=mysqli_query($con,$ins_query);
if($qry>0)
{
    ?>
    <center>
   CONGRATULATIONS RECORD INSERTED<hr/>
    <table border="1">
      <tr><td colspan="2">Slider Details</td></tr>
      <tr><td>Slider Image Url</td><td><?php echo $zurl;?> </td></tr> 
      <tr><td>Slider Title</td><td><?php echo $ztitle;?> </td></tr> 
      <tr><td>Slider Content</td><td><?php echo $zcontent;?> </td></tr> 
      
      <tr><td ></td><td ><a href="Index.php"> Go Back</a>&nbsp;&nbsp; <a href="AddSlider.php"> INSERT NEW RECORD</a></td>
	  
     
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
