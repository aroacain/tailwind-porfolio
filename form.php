<?php
if(!empty($_POST)) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
    $subject = "You have received an email from aroacain.com";

	$toEmail = "aroarubio@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";

    mail($toEmail, $mailHeaders, $formcontent, $message) or die("Error!");
    echo "Thank You!";
}
?>