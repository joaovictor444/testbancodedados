<?php 

    session_start();
    include ('connection.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true )){
        
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");

    }

    $exibir = $_SESSION ['nome'];

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id_usuario LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id_usuario DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
    }
    $result = $connection->query($sql);

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="index.php">Voltar</a>
        <?php  echo "BEM VINDO $exibir" ?>
    </body>
    </html>