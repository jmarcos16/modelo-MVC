<?php

namespace App\Controller;

use PHPMailer\PHPMailer\PHPMailer;


$arquivo = 'C:/xampp/htdocs/sendemail/teste.txt';
$handle = fopen($arquivo, "r");
while (!feof($handle)) {
    if ($linha = fgets($handle)) {
        $dados[] = $linha;
    }
}


$mail = new PHPMailer;
$mail->setLanguage('br');
$mail->CharSet = 'UTF-8';

#Configuraçao de smtp.

$mail->isSMTP();
$mail->Host = 'smtplw.com.br';
$mail->SMTPAuth = true;
$mail->Username = 'vitti1';
$mail->Password = 'VSvKxYeN1211';
$mail->SMTPSecure = 'tsl';
$mail->Port = 587;


$mail->From = 'negociafacil@vitti.com.br';
$mail->FromName = 'Vitti Contact Center';
// $mail->addAddress('negociafacil@vitti.com.br', 'Negocia Facil');
// $mail->addAddress('suporte@vitti.com');
$mail->addReplyTo('negociafacil@vitti.com.br');
// $mail->addCC('vitor.fernandes@vitti.com');

$destino = array(
    'negociafacil@vitti.com.br' => 'Jose Macos',
    'suporte@vitti.com.br' => 'Negocia Facil',
);

foreach ($dados as $email => $nome) {
    $mail->addBCC($nome);
}

echo print_r($destino) . "<br>";
echo print_r($dados);


// $mail->addBCC('suporte@vitti.com.br',);
// $mail->addBCC('modgamerapk@gmail.com',);


$mail->isHTML(true);

$mail->Subject = 'Teste de array';
$mail->Body = '<h1>Nossa</h1>';
$mail->AltBody = 'teste';



if (!$mail->send()) {
    echo 'A mensagem nao pode ser enviad! <hr>';
    echo 'mensagem erro ' . $mail->ErrorInfo;
} else {
    echo 'Email enviado com sucesso!';
}







class ControllerTeste
{
    public function __construct()
    {
    }
}
