<?php

//requisitando conexao com o banco de dados
require_once('conn/conn.php');
require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php');

//classe para envio de email automatico.
class Envio{

    public function enviaEmailAutomatico($to, $subject, $body){

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "mail.igornobrega.com";
        $mail->Port = 465;
        $mail->IsHTML(true);
        $mail->Username = "igor@igornobrega.com";
        $mail->Password = "7131@Eve";
        $mail->SetFrom("igor@igornobrega.com");
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        
        $mail->Send();

    }
}