<?php




$server="localhost";
$username="Siddhant";
$password="Siddhant";
$database="zbluecars";


$con=mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    ?>