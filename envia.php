<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']); // Adicionei esta linha

$para = "mmuniz2209@gmail.com";
$assunto = "Fale comigo - portfólio";

$corpo = "Nome:  " . $nome . "\n" . "Email:  " . $email . "\n" . "Telefone:  " . $telefone . "\n" . "Mensagem: " . $mensagem . "\n"; // Corrigi esta linha

$cabeca = "From: limao.oliveira1809@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion(); // Corrigi esta linha

if(mail($para, $assunto, $corpo, $cabeca)) {
    echo("E-mail enviado com sucesso!");
} else {
    echo("Houve um erro ao enviar o e-mail :(");
}
?>
