<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php
	require 'PHPMailer/sendmail.php';
if(isset($_POST['s'])){
	$desc= $_POST['desc'];
	$p_name = $_POST['p_name'];
	$u_name = $_POST['u_name'];
	$seller_email= $_POST['seller_email'];


	$sendto= $seller_email;
	$subject= $u_name .' wants to buy '. $p_name;
	$message=$desc;
	send_mail($sendto,'hello there!',$subject,$message);
}

?>
</body>
</html>
