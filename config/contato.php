<?php

//requisitando conexao com o banco de dados 
require_once('conn/conn.php');
require_once('email.php');

//recebendo dados 
$nome     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if(empty($nome) || empty($email) || empty($telefone) || empty($mensagem)){
    echo "Por favor preencha todos os campos.";
}else{

   $body = "Nome: " .$nome. "\r\n" .
        "E-mail: " .$email. "\r\n".
        "Telefone: " .$telefone. "\r\n".
        "Mensagem: " .$mensagem;

    $e = new Envio();
    $e->enviaEmailAutomatico("igor@igornobrega.com", "Contato site", $body);
    echo "E-mail enviado com sucesso.";
}