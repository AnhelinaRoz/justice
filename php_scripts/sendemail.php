<?php
$to = "rozkovanangelina@gmail.com";
$subject = "Тема сообщения";
$message = "Привет, это текст сообщения!";
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