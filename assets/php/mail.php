<?php
//-------------------------------------------------------------------
require_once '../lib/PHPMailer/src/PHPMailer.php';
require_once '../lib/PHPMailer/src/SMTP.php';
require_once '../lib/PHPMailer/src/Exception.php';
//-------------------------------------------------------------------
require_once '../../.env';
//-------------------------------------------------------------------


$method = $_SERVER['REQUEST_METHOD'];


$c = true;
if ($method === 'POST' && !empty($_POST))
{
    // Данные для письма

    $title = $_POST['project_name'];
    $form_subject = $_POST['form_subject'];
    $city = $_POST['city'];
    $message = "";


    // Обработка данных формы

    foreach ($_POST as $key => $value)
    {
        $value = trim($value);
        $value = strip_tags($value);

        $key = str_replace('_', ' ', $key);
        if ($key != 'Комментарий к заказу' && $value != '')
        {
            if ($value == 'on') $value = 'Да';
            else $value = str_replace('_', ' ', $value);
        }
        if ($key == 'Agree') $key = 'Согласен на обработку персональных данных';


        // Получение данных для письма

        if ($value != '' &&
            $key != 'project name' &&
            $key != 'form subject' &&
            $key != 'city')
        {
            $message .= "
			" . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
        }
    }
    $message = "<table style='width: 100%;'>$message</table>";


    // Файлы phpmailer

    // Файлы, которые отправляет пользователь

    $file = $_FILES['form_file'];


    // Формирование самого письма
    $body = $form_subject . " $city";
    $body .= $message;


    // Настройки PHPMailer

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try
    {
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 1;
        $mail->Debugoutput = function ($str, $level) {
            $GLOBALS['status'][] = $str;
        };


        // Настройки почты

        $mail->Host = SMTP_Host;                                             // SMTP сервера почты
        $mail->Username = SMTP_Username;                                          // Логин на почте
        $mail->Password = SMTP_Password;                                       // Пароль для внешнего приложения
        $mail->SMTPSecure = SMTP_Secure;
        $mail->Port = SMTP_Port;

        $mail->setFrom(SMTP_Email, SMTP_Name);   // Адрес самой почты и имя отправителя

        
        // Получатели письма
        
        foreach (EMAIL_RECEIVERS as $email)
        {
            $mail->addAddress($email);
        }


        // Прикрепление файлов к письму
        if (!empty($file['name'][0]))
        {
            for ($ct = 0; $ct < count($file['tmp_name']); $ct++)
            {
                $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
                $filename = $file['name'][$ct];

                if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile))
                {
                    $mail->addAttachment($uploadfile, $filename);
                    $rfile[] = "Файл $filename прикреплён";
                }
                else $rfile[] = "Не удалось прикрепить файл $filename";
            }
        }


        // Отправка сообщения

        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;


        // Проверка успешности отправки сообщения

        if ($mail->send()) $result = "success";
        else $result = "error";

    } catch (Exception $e)
    {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
}
//-------------------------------------------------------------------