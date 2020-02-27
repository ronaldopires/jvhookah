<?php

//Configuração de email
$to = Config::EMAIL_USER; //para
$subject = 'Contato Site Jv Hookah'; //Assunto
$message = 'Email de ' .$_GET['nome'] . "\r\n" . $_GET['mensagem']; //Mensagem
$destinatario = $_GET['email'];
$headers = 'From: ' . $destinatario . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
<script>
    alert("Email enviado com sucesso!");
</script>
<meta http-equiv="refresh" content="0; url=contato">