<meta http-equiv='refresh' content='10; url=http://thecode.local/'>
<meta charset="UTF-8" />

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$message = $_POST['message'];

$mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";

$send = mail("romashkin.2001@yandex.ru", $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

if ($send == 'true') {echo "Сообщение отправлено";}

// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}

?>