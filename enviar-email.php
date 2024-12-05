<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Defina o destinatário do e-mail (seu e-mail)
    $destinatario = "salles_1a@hotmail.com"; // Substitua pelo seu e-mail

    // Defina o assunto do e-mail
    $assunto = "Mensagem do Fale Conosco de $nome";

    // Criação da mensagem do e-mail
    $mensagem_email = "Você recebeu uma nova mensagem de $nome ($email):\n\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $mensagem_email, $headers)) {
    echo "<h2>Mensagem enviada com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao enviar a mensagem. Tente novamente mais tarde.</h2>";
    }
} else {
    echo "<h2>Método de requisição inválido.</h2>";
}
?>