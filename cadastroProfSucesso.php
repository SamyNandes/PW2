<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "cadastro_cur_alu";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome_prof = $_POST['nome_prof'];
$email_prof = $_POST['email_prof'];
$id_escola = $_POST['id_escola'];
$senha_prof = $_POST['senha_prof'];

$query = "INSERT INTO professor (nome_prof, email_prof, id_escola, senha_prof) VALUES ('$nome_prof', '$email_prof', '$id_escola', '$senha_prof')";

mysqli_query($conexao, $query);

?>  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de cursos e alunos</title>
    <link href="style.css" rel="stylesheet">
</head>
<style>
        body{
            background-image: url('./assets/fundo.png');
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .containerModal {
            width: 300px;
            background-color: white;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            margin: 150px auto;
        }

        .success-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .success-message {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .ok-btn {
            background-color: green;
            color: white;
            padding: 10px 15px;
            border-radius: 3px;
            text-decoration: none;
        }

        .ok-btn:hover{
            background-color: rgb(0, 88, 0);
        }

        .btn-container {
            display: flex;
            justify-content:flex-end;
        }

    </style>
<body>

<div class="containerModal">
    <h1 class="success-title">Sucesso!</h1>
    <p class="success-message">Cadastro feito com êxito, entre em nosso aplicativo (SCR) para consultas.</p>
    <div class="btn-container"><a class="ok-btn" href="./views/home.php">OK</a></div>
</div>

</body>
</html>