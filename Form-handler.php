<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_form = 'gmrakib2001@gmail.com';

$email_subject = 'New form submission';


$email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                      "User Massage: $message.\n ";



$to = 'rakibmoula2001@gmail.com'
 
$headers = "From : $email_from \r\n";

$headers . = "Reply-To: $visitor_email \r\n";

mail( $to , $email_subject,$email_body,$headers);

header("Location: contact.html")
?>