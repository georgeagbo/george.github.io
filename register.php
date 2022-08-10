<?php
	include('conn.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$subject=$_POST['subject'];
	$message=$_POST['message'];

		mysqli_query($conn,"insert into messages (subject, message) values ('$subject', '$message')");
		
		//sending email verification
		$to = $email;
			$subject = "Message from a Customer that Contacted Geebst LTD";
			$message = "
				<html>
				<head>
				<title>Contact Message</title>
				</head>
				<body>
				<h2>Thank you for Contacting Geebest LTD.</h2>
				<p>Subject of the Message: ".$_POST['subject']."</p>
				<p>Message body: ".$_POST['message']."</p>
				<p>We will get back to you Shortly!!!</p>
				</body>
				</html>
				";
			//dont forget to include content-type on header if you are sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: admin@geebestltd.com". "\r\n" .
						"CC: gorglovsu@gmail.com";

		mail($to,$subject,$message,$headers);

		$_SESSION['delivery_msg'] = "Message succesfully sent to admin database and e-mail address.";
  		header('location:index.php');

  		}
?>