<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('../assets/fundo.png');
	  background-size: cover;
	  display: flex;
	  align-items: center;
	  height: 100vh
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 50px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .login-title {
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2 class="login-title">Acesso ao Sistema</h2>
  <form method="post" action="logicaLogin.php">
    <div class="mb-3">
      <label for="usuario" class="form-label">Nome de usuário</label>
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
    </div>
    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
    <p style="margin: 15px 0px">Não tem conta ainda?</p>
    <a href="../cadastroProf.php" class="btn btn-outline-primary w-100">Cadastrar-se</a>
  </form>

  <?php if (isset($_GET['erro'])) { ?>
    <div class="alert alert-danger mt-3" role="alert">
      Usuário e/ou senha inválido(s).
    </div>
  <?php } ?>
</div>

</body>
</html>
