<?php

$to ='captainphp@yandex.ru'; // на яндекс отсылается
//$to = 'arturshopengauer@mail.ru'; // на мэйл ру НЕ отсылается! https://help.mail.ru/mail-help/mailer/popsmtp
$them = 'Письмо с сайта Overtime';
//$message = "Name: " .$_POST['name']. "<br>E-mail:". $_POST['tel']. '<br>'. $_POST['message'];
$message = "Name: " . $_POST['name']. " <br> Email: " . $_POST['tel'] . '<br>' . $_POST['message'];

//$headers = "From:<Overtime_post_form>";
$headers = "From: <Overtime post form>\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($to, $them, $message, $headers);

header("Location: http://slon.icu/Bootstrap4/index.php");

?>