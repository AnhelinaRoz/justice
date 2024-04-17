<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$number = $_POST["number"];
$place = $_POST["place"];
$position = $_POST["position"];
$message = $_POST["message"];

$to = "rozkovanangelina@gmail.com";
$subject = "Email from the website";

$message = "
<html>
<head>
<title>Email from the website</title>
</head>
<body>
<p>Firstname: $firstname</p>
<p>Lastname: $lastname</p>
<p>Email: $email</p>
<p>Number: $number</p>
<p>Place: $place</p>
<p>Position: $position</p>
<p>Message: $message</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: sender@example.com" . "\r\n" .
    "Reply-To: sender@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();


$mailSent = mail($to, $subject, $message, $headers);


header("Location: ../index.html");
?>
