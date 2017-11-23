<?php

include "../View";
include "../Model";
require('PHPMailer/class.phpmailer.php');

class mainController
{

    public function main(){
        include("../View/Template/body.php");
    }

    public function mailer($name,$senderMail,$message){

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->From = $senderMail;
        $mail->FromName = $name ;
        $mail->Subject = "Contact from "." ".$name;
        $mail->Body = $message;
        $mail->AddAddress("thm.meder@gmail.com", "Thomas MEDER");
        if(!$mail->Send()) {
            echo 'Erreur : ' . $mail->ErrorInfo;
        } else {
            echo 'Message envoyé !';
        }

        include("../View/Template/body.php");
    }
}