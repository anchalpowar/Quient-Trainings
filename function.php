<?php
 session_start();                
$servername= "localhost";
$username="root";
$password="";
$database="contact";
$con = mysqli_connect($servername, 
$username, $password, $database);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];

$index = "insert into contact_us(first_name,last_name,subject) values ('$firstname','$lastname','$subject')";
mysqli_query($con,$index);
echo" Thankyou for contacting us!! will get back to you soon ";




?>
