<?php 

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "cadastro_cur_alu";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM ALUNO";

$consulta = mysqli_query($conexao, $query); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      background-image: url('../assets/fundo.png');
      background-size: cover;
      display: flex;
      align-items: center;
      height: 100vh;
    }
    .table-container {
      margin: 80px auto;
      padding: 10px;
      background-color: #fff;
      border-radius: 15px !important;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .login-title {
      margin-bottom: 20px;
      text-align: center;
    }
    </style>
</head>
<body>
  <div class="table-container w-50">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Curso</th>
      <th scope="col">Excluir aluno</th>  
    </tr>
  </thead>
  <tbody>
    <?php if($consulta){
        while($linha = mysqli_fetch_array($consulta)){
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($linha['id_alu']) . "</td>";
                    echo "<td>" . htmlspecialchars($linha['nome_alu']) . "</td>";
                    echo "<td>" . htmlspecialchars($linha['email_alu']) . "</td>";
                    echo "<td>" . htmlspecialchars($linha['curso_alu']) . "</td>";
                    echo "<td> <a class=\"text-white text-decoration-none\" href=\"../deletar_aluno.php?id=" . htmlspecialchars($linha['id_alu']) . "\"><button class=\"btn btn-primary\"> Exluir aluno </button></a> </td>";
                    echo "</tr>";
        }
    } else {
        echo "ocorreu um erro terrivel";
    }; ?>
  </tbody>
</table>
<a href="./mainPage.php" class="text-light text-decoration-none"><button class="btn btn-primary">Voltar para a página de home</button></a></div>
</body>
</html>
