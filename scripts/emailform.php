<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $mensage = htmlspecialchars($_POST["menssage"]);

    if (empty($name) || empty($email) || empty($menssage))
    {
        echo "Por favor, preencha todos os campos necessarios.";
        exit;
    }
    
    $phone = $_POST["phone"];
    
    $subject = "Nova mensagem de contato";
    $body = "Nome: $nome\nE-mail: $email\n";
    if (!empty($phone))
    {
        if (!preg_match("/^\d{3} \d{3} \d{3}$/", $phone))) 
        {
            echo "Por favor, coloque um numero valido.";
            exit;
        }
        $body .= "Telefone:$phone\n";
    }
    $body .= "Mensagem:\n$menssage";
    $headers = "From: $email";

    if (mail("asm.remodelacoes@gmail.com", $subject, $body, $headers)) 
    {
        echo "Mensagem enviada com sucesso!";
    }
    else 
    {
        echo "Falha ao enviar a mensagem.";
    }
}
?>
