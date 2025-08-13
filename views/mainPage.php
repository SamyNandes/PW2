<?php
// Verifica se o botão foi clicado
if (isset($_POST['limpar_cookie'])) {
    // Remove o cookie "usuario"
    setcookie("usuario", "", time() - 3600, "/");
    $mensagem = "Cookie 'usuario' foi limpo!";
    header("Location: home.php");
exit;
}

// Define o cookie (apenas para teste)
if (!isset($_COOKIE['usuario'])) {
    setcookie("usuario", "Joao", time() + 3600, "/"); // Expira em 1 hora
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: #0C2E4A;
      color: white;
      padding: 20px;
      text-align: center;
    }

    main {
      flex: 1;
      padding: 40px 20px;
      text-align: center;
    }

    h1 {
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      color: #666;
    }

    footer {
      background: #333;
      color: white;
      text-align: center;
      padding: 15px;
    }

    a.button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #0C2E4A;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    a.button:hover {
      background: #0C2E4A;
    }

    .buttonRed{
        background:rgb(177, 8, 8);
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        cursor:pointer;
    }
    a.button:hover {
      background:rgb(8, 67, 177);
    }

    .buttonRed:hover {
      background:rgb(252, 51, 51);
    }
  </style>
</head>
<body>

  <header>
    <h1>O que você busca hoje?</h1>
  </header>

  <main>
    <h2><img style=" width: 100px; height: 100px; border-radius: 100px" src="../assets/logo.png" alt=""></h2>
    <a href="../cadastroAluno.php" class="button">Criar aluno</a>
    <a href="" class="button">Ver cursos</a>
    <a href="./consultaAlunos.php" class="button">Ver alunos</a>
        <form method="post">
        <button type="submit" class="buttonRed" name="limpar_cookie">Sair</button>
    </form>
  </main>

  <footer>
    &copy; 2025. Todos os direitos reservados.
  </footer>

</body>
</html>