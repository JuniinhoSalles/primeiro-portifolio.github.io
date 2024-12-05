<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $mensagem = $_POST['mensagem'];

    // Definir o destinatário do e-mail
    $para = "salles_1a@hotmail.com"; // Substitua pelo seu e-mail
    $assunto = "Novo formulário de contato";

    // Criar o corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Nascimento: $nascimento\n";
    $corpo .= "Mensagem: $mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>
