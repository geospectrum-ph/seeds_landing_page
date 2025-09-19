<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$phone = $_POST{'phone'};
$organization = $_POST{'organization'};
$position = $_POST{'position'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Organization: ".$organization."
Position: ".$position."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."

";

mail ("name@youremail.com" , "New Message", $email_message);
header("location: ../mail-success.html");
?>


