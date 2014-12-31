										<?php
										 print "Awesome! We'll keep you posted.";
 										$IPAddress = $_SERVER['REMOTE_ADDR']; //collect ipaddress
										$con=mysqli_connect("Lifetymappreg.db.12193764.hostedresource.com","Lifetymappreg","Lifetym123!","Lifetymappreg");
										// Check connection
										if (mysqli_connect_errno())
  										{
  										echo "Sorry! Something went wrong!";
  										}
										$sql="INSERT INTO Lifetymbetareg(EmailId, IPAddress)
										VALUES
										('$_POST[email]', '$IPAddress')";

										if (!mysqli_query($con,$sql))
  										{
  										die("Sorry! something went wrong!");
  										}
										mysqli_close($con);
										?>