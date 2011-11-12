<?php

// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to="jake@secretservers.net";

// Your subject
$subject="Test";

// From
$header="from: your name <your email>";

// Your message
$message="Hello \r\n";
$message.="This is test\r\n";
$message.="Test again ";

// send email
$sentmail = mail($to,$subject,$message,$header);

// if your email succesfully sent
if($sentmail){
echo "Email Has Been Sent .";
}
else {
echo "Cannot Send Email ";
}

?>