<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Projetos</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5"> 
    <img src="./assets/logo.png" class="logo" width="80" alt="Logo">
    <h1 class="my-4">Faça o cadastro do aluno!</h1>

    <form method="post" action="./views/home.php">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do aluno:</label>
            <input type="text" class="form-control" id="nome" name="nome_alu" placeholder="Digite o nome do aluno" required> 
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label> 
            <input type="email" class="form-control" id="email" name="email_alu" placeholder="Digite o email do aluno" required> 
        </div>

        <div class="mb-3">
            <label for="curso" class="form-label">Nome do curso:</label> 
            <input type="text" class="form-control" id="curso" name="curso_alu" placeholder="Digite o nome do curso" required> 
        </div>

        <!-- Botão para abrir o modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Salvar
        </button>
    </form>
</div>     

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        Tem certeza de que deseja salvar o cadastro do aluno?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <!-- Este botão envia o formulário manualmente -->
        <button type="button" class="btn btn-primary" href="./views/home.php" onclick="document.querySelector('form').submit();">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle (inclui Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
