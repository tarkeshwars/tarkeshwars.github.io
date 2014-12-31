<?php
$IPAddress = $_SERVER['REMOTE_ADDR'];
$BuySelectedOption=$_POST['BuySelectedOption'];
$con=mysqli_connect("Lifetymappreg.db.12193764.hostedresource.com","Lifetymappreg","Lifetym123!","Lifetymappreg");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$sql="INSERT INTO Lumos_Interested_People(IPAddress,BuySelectedOption )
VALUES
('$IPAddress', 'BuySelectedOption')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
 }
else{
}
mysqli_close($con);
?>