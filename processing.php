<?php 

    include ('connection.php');

    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];

    $insert = "INSERT INTO usuarios (nome , email , senha)
    VALUES ('$nome' , '$email' , '$senha')";

    if (mysqli_query($connection, $insert)) {
        echo "Usuário cadastrado com sucesso";
    }

    else {
        echo "Erro ao cadastrar o usuário";
    }
?>