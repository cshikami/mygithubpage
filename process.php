<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

$EmailTo = "cshikami@gmail.com";
$Subject = "New Message Received chrisshikami.com";

//prepare email body text

$Body .= "First Name: ";
$Body .= $firstname;
$Body .= "\n";

$Body .= "Last Name: ";
$Body .= $lastname;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

//send email
$success = mail($EmailTo, $Subject, $Body, "From: " . $email);
//redirect to success page
if ($success) {
		echo '<script type=
		"text/javascript">';
		echo 'window.location.replace("/cshikami_portfolio/contact.html")';
		echo '</script>';
} else {
	echo "invalid";
}

?>