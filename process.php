										<?php
 										$IPAddress = $_SERVER['REMOTE_ADDR'];
 										$emailid=$_POST['email'];
										$con=mysqli_connect("Lifetymappreg.db.12193764.hostedresource.com","Lifetymappreg","Lifetym123!","Lifetymappreg");
										// Check connection
										if (mysqli_connect_errno())
  										{
  										echo "Failed to connect to MySQL: " . mysqli_connect_error();
  										};
  										$result=mysqli_query($con,"SELECT EmailId FROM Lifetymbetareg WHERE EmailId= '". $emailid ."'");
  										$testemail=mysqli_fetch_array($result);
										if($testemail['EmailId']==""){
										$sql="INSERT INTO Lifetymbetareg(EmailId, IPAddress)
										VALUES
										('$emailid', '$IPAddress')";
										if (!mysqli_query($con,$sql))
  										{
  										die('Error: ' . mysqli_error($con));
  										}
  										else{
  											echo "Sorry! We have stopped working on this! We haven't stored your entered email!";
  										}
  										/*function send_simple_message($emailid) {
										  $ch = curl_init();
										  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
										  curl_setopt($ch, CURLOPT_USERPWD, 'api:key-1l6h1iv430-l7qmq2ycfd5sks7ydwj00');
										  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
										  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
										  curl_setopt($ch, CURLOPT_URL, 
										              'https://api.mailgun.net/v2/lifetym.me/messages');
										  curl_setopt($ch, CURLOPT_POSTFIELDS, 
										                array('from' => 'Tarkeshwar Singh <tarkeshwar@lifetym.me>',
										                      'to' => $emailid,
										                      'bcc' => 'tarkeshwar.iitgn@gmail.com',
										                      'h:Reply-To' => 'Tarkeshwar Singh <tarkeshwar@lifetym.me>',
										                      'subject' => 'Welcome to Lifetym!',
										                      'html'=>'<!DOCTYPE html>
															<body>
																<p>
																Hi!<br><br>I hope you are doing great. I am the CEO of Lifetym and wanted to personally thank you for checking us out and subscribing to be one of our early beta users.<br><br>Since we are still in the process of building out Lifetym, I feel feedback from early enthusiasts like you can help us build a great hangout-planning app. I was wondering if you would be interested in being a part of our alpha users with exclusive behind-scenes access to the app!<br><br>Please reply if you’re interested so I can add you to our super-secret alpha group on Facebook!<br><br>Finally, thanks again for checking us out. We’ll let you know as soon as our beta app is out. Till then please feel free to connect with me anytime.<br><br>Cheers,<br>Tarkeshwar<br><br>Lifetym team<br>tarkeshwar@lifetym.me<br>+91-9535692852, Skype: tarkeshwar.iitgn 
																</p>
															</body>
															</html>'));
										  $result = curl_exec($ch);
										  curl_close($ch);
										  return $result;
										}*/ 
										function add_mailing_list($emailid) {
										  	$ch = curl_init();
										  	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
										  curl_setopt($ch, CURLOPT_USERPWD, 'api:key-1l6h1iv430-l7qmq2ycfd5sks7ydwj00');
										  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
										  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
										  curl_setopt($ch, CURLOPT_URL, 
										              'https://api.mailgun.net/v2/lists/test@lifetym.me/members');
										  curl_setopt($ch, CURLOPT_POSTFIELDS, 
										                array('address'     => $emailid,
						                          	  	'subscribed'  => true));
										  $result = curl_exec($ch);
										  curl_close($ch);
										  return $result;
										}
										//send_simple_message($emailid);
										add_mailing_list($emailid);
  										}
  										else{
  											echo "Sorry! We have stopped working on this. We haven't stored your entered email so there's no way it can be misused!.";
  										}
										mysqli_close($con);
										?>