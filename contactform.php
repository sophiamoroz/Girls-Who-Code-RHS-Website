<?php
// Put your name and year of graduation here! //
// Emily Broad, class of 2022 //
// Sunny Liu, class of 2023: changing recipients (Sunny's email) and mail header to CC Sierra's email (5/22/2022) //
// When someone edits this file, they will add their name too. //

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "sunny.liu@rocklinusd.org"; // make sure to have it forwarding to a club member, but send emails back with the account //
// $recipient2 = "sierra.janson@rocklinusd.org"; //
$subject = "Contact Form";
$mailheader = "From: $email \r\nCc: sierra.janson@rocklinusd.org \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Sorry, there's been an error!");
// mail($recipient2, $subject, $formcontent, $mailheader) or die("Sorry, there's been an error!"); //
echo "Thank you for reaching out!";
?>