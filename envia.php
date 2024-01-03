<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "mmuniz2209@gmail.com";
$assunto = "Fale comigo - portifolio";

$corpo = "Nome:  ".$nome."\n"."Email:  ".$email."\n"."Telefone:  ".$telefone."\n".

$cabeca = "From: limao.oliveira1809@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail ($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("houve um erro ao enviar o e-mail :(");
}

?>