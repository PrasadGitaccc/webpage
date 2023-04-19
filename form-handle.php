<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$no = $_POST['no'];
$message = $_POST['message'];

$email_from = 'pasy6162@gmail.com';

$email_no= '';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "no: $no.\n".
               "User Meassge: $message .\n";

$to = 'sutarprasad454@gamil.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_no,$email_body,$headers);
header("Location:index.html");
               
             




?>