<?php
  $name = $POST ['name'];
  $visitor_email = $POST ['email'];
  $message = $_POST ['message'];

  $email_from = 'joekennedy10@gmx.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name. \n".
                  "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

  $to = "P2551689@my365.dmu.ac.uk";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact.html");

?>
