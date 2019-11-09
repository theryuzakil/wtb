<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$to="karmadebjit@gmail.com";
	$headers="From: $name<$email>";
	if(mail($to, $subject, $message, $headers))
	{
		echo "Email Sent";
	}
	else
	{
		echo "Error";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Sender</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	<div class="container">
	<form action="" method="post">
		<p>Name</p>
		<input type="text" name="name">
		<p>Email</p>
		<input type="email" name="email">
		<p>Subject</p>
		<input type="text" name="subject">
		<p>Message</p>
		<input type="text" name="message">
		<input type="submit" class="btn btn-success" name="submit">
	</form>
</div>
</body>
</html>
