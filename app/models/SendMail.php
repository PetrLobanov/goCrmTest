<?php

namespace Models;

use PHPMailer\PHPMailer\PHPMailer;

Class SendMail {

    private $workEmail = 'hello@mail.ru';

    public function send($email, $city) {

        $mail = new PHPMailer();

        $mail->addAddress($this->workEmail);
        $mail->addAddress($email);

        $mail->Subject = 'Subject';
        $mail->Body = "<p>City - $city</p>";
        $mail->isHTML(true);


        if ($mail->send()) {

            return 'ok';

        } else {

            return $mail->ErrorInfo;

        }
    }

}
