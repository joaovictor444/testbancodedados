<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div>
        <h1>Faça seu Login</h1>
        <form action="testLogin.php" method="POST">
            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>

            <div>
                <label for="">Senha</label>
                <input type="password" name="senha" placeholder="">
            </div>

            <div>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>