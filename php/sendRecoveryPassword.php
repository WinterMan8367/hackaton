<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//$body = file_get_contents('form.html', true);
//echo $body;
// Файлы phpmailer
require '../PHPMMailer/PHPMailer.php';
require '../PHPMMailer/SMTP.php';
require '../PHPMMailer/Exception.php';

//$_POST = json_decode(file_get_contents('php://input'), true);
//        var_dump($_POST);
//        die();

$email = $_GET['email'];

//die($email);

// Формирование самого письма
$title = "Восстановление пароля";
$titleHtml =  " Восстановление пароля";
$body = "
            Если это не вы запросили сброс пароля либо передумали, просто проигнорируйте это письмо. В целях безопасности никому не пересылайте это письмо!
";


// Настройки PHPMailer

try {
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'n.vasilencov@yandex.ru'; // Логин на почте
    $mail->Password   = '55nikolay'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('n.vasilencov@yandex.ru', 'Альтан'); // Адрес самой почты и имя отправителя

    $mail->addAddress($email);

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    // Проверяем отравленность сообщения
    $mail->send();


} catch (Exception $e) {
//            $result = "error";
    var_dump($e);
    $file = "./logs/PHPMailer/log_".time().".json";
    if (!file_exists($file)) {
        $fp = fopen($file, "w");
        fwrite($fp, $e);
        fclose($fp);
    }
}
// Отображение результата
//        echo json_encode(["result" => $result]);
