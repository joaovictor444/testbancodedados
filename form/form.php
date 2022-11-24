<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processing.php" method="post">
        
        <div>
            <label for="user">Nome de usuário</label>
            <input type="text" name="nome">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="password">Senha</label>
            <input type="password" name="senha">
        </div>

        <div>
            <input type="submit" value="Cadastrar">
        </div>

    </form>
</body>
</html>