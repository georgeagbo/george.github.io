<!DOCTYPE html>
<html>
<head>
	<title>George Agbo's simple Contact Us form in PHP/MySQLi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+San">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
	#signup_form{
		width:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
.style3 {
	color: #0000FF;
	font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Send us a message</center></h2>
		<hr>
		<form method="POST" action="register.php">
		  <span class="style3">Subject:</span> 
		  <input type="text" placeholder="Type your subject here" name="subject" class="form-control" required>
		<div style="height: 10px;"></div>		
		<span class="style3">Message:</span> 
		<textarea name="message" rows="10" cols="100" placeholder="Type your message here" name="message" class="form-control" required></textarea> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Send Message</button> 
		</form>
		<?php
			session_start();
			if(isset($_SESSION['delivery_msg'])){
				?>
				<div style="height: 40px;"></div>
				<div class="alert alert-danger">
					<span><center>
					<?php echo $_SESSION['delivery_msg'];
						unset($_SESSION['delivery_msg']); 
					?>
					</center></span>
				</div>
				<?php
			}
		?>
		
	</div>
</div>
</body>
</html>