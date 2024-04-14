<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];
//$ = $_POST[""];
//$ = $_POST[""];

$to = "rozkovanangelina@gmail.com";
$subject = "Email from the website";
$message = "
<p>$firstname</p>
<p>$lastname</p>
<p>$email</p>
<p>$number</p>
<p>$message</p>
";
$headers = "From: sender@example.com" . "\r\n" .
    "Reply-To: sender@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Отправка
$mailSent = mail($to, $subject, $message, $headers);

// Проверка успешности отправки
if($mailSent) {
    echo "Сообщение успешно отправлено!";
} else {
    echo "Ошибка при отправке сообщения.";
}
?>