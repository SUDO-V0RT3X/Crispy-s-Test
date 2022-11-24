<?php
$name = $POST['name'];  
$visitor_email = $POST['email'];  
$subject = $POST['subject'];  
$message = $POST['message'];  

$email_from = 'info@chriscosa.co.za';

$email_subject = 'NEW FORM SUBMISSION';

$email_body = "USER NAME:  $name.\n".
            "USER EMAIL:  $visitor_email.\n".
            "SUBJECT:  $subject.\n".
            "USER MESSAGE:  $message.\n";

$to = 'info@chrisco.co.za';

$headers = "From $email_from  \r\n";

$headers . = "Reply-To $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")


?>