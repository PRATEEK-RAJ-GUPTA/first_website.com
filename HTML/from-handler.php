<?php
$name=$-Post['name'];
$visitor_email=$_Post['email'];
$subject=$_subject['subject'];
$message=$_Post['message'];

$email_form='prateekrajg49@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
              "User Email:$visitor_email.\n".
                "Subject:$subject.\n".
                "User Message:$message.\n";
$to='prateekrajg49@gmail.com';
$headers="Form:$email_form \r\n"
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$eail_subject,$eamil_body,$headers);


header("Location:contact.html");
?>