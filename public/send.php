<?php
$firstname = $_POST['firstname'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];

$firstname = htmlspecialchars($firstname);
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$date = htmlspecialchars($date);

$firstname = urldecode($firstname);
$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$date = urldecode($date);

$firstname = trim($firstname);
$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$date = trim($date);

mail("pomah4uk@gmail.com", "Заявка с сайта", "Фамилия:".$firstname.". E-mail: ".$email.". Имя".$name.". Телефон".$phone.". Дата".$date ,"From: krasnovairiska@gmail.com \r\n");

if (mail("pomah4uk@gmail.com", "Заявка с сайта", "Фамилия:".$firstname.". E-mail: ".$email.". Имя".$name.". Телефон".$phone.". Дата".$date ,"From: krasnovairiska@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>