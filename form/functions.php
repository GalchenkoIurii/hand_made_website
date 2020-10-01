<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 30.09.2020
 * Time: 10:47
 */

function load($data)
{
    foreach ($_POST as $k => $v) {
        if (array_key_exists($k, $data)) {
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}

function validate($data)
{
    $errors = '';
    foreach ($data as $k => $v) {
        if ($data[$k]['required'] && empty($data[$k]['value'])) {
            $errors .= "<li>Не заполнено обязательное поле {$data[$k]['field_name']}</li>";
        }
    }
    if (!check_captcha($data['captcha']['value'])) {
        $errors .= "<li>Неверно заполнено поле {$data['captcha']['field_name']}</li>";
    }
    return $errors;
}

function set_captcha()
{
    $num1 = rand(0, 10);
    $num2 = rand(0, 10);
    $_SESSION['captcha'] = $num1 + $num2;
    return "Введите сумму {$num1} + {$num2}";
}

function check_captcha($result)
{
    return $_SESSION['captcha'] == $result;
}

function send_mail($fields, $mail_settings)
{
    $mail = new \PHPMailer\PHPMailer\PHPMailer();

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = $mail_settings['host'];                    // Set the SMTP server to send through
        $mail->SMTPAuth   = $mail_settings['smtp_auth'];                                   // Enable SMTP authentication
        $mail->Username   = $mail_settings['username'];                     // SMTP username
        $mail->Password   = $mail_settings['password'];                               // SMTP password
        $mail->SMTPSecure = $mail_settings['smtp_secure'];         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = $mail_settings['port'];                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($mail_settings['from_email'], $mail_settings['from_name']);
        $mail->addAddress($mail_settings['to_email']);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Контактная форма с сайта HandMade';

        $flag = true;
        $message = '';
        foreach ($fields as $k => $v) {
            if (isset($v['mailable']) && $v['mailable'] == 0) {
                continue;
            }
            $message .= (($flag = !$flag) ? '<tr>' : '<tr style="background-color: #f8f8f8;">')
                . "<td style='padding: 10px; border: #e9e9e9 1px solid'><b>{$v['field_name']}</b></td>
                <td style='padding: 10px; border: #e9e9e9 1px solid'>{$v['value']}</td>
                </tr>";
        }

        $mail->Body    = "<table style='width: 100%;'>$message</table>";

        if (!$mail->send()) {
            return false;
        };
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}