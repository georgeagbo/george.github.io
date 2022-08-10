<?php

$conn = mysqli_connect("localhost","root","","contacts");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>