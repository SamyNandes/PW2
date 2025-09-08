<?php include 'header.php' ?>

<body>
<div class="container m-5" style="padding: 40px 0px !important;">
  <img src="./assets/logo.png" class="logo" width="80" alt="Logo">
  <h1 class="my-4">Faça o cadastro do aluno!</h1>

  <form id="formCadastro" method="post" action="./cadastroAluno_Logica.php" onsubmit="abrirModal(event)" style=" width: 80%">
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

    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Parabéns!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        Sucesso ao cadastrar aluno.
      </div>
      <div class="modal-footer">
        <button type="button" id="okBtn" class="btn btn-primary">Visualizar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function abrirModal(e) {
    e.preventDefault() // Não envia o form ainda, impede o comportamento padrão
    const modal = new bootstrap.Modal(document.getElementById('exampleModal')) // Cria uma instância de modal para podermos controlar
    modal.show() // Abre o modal referenciado
  }
  document.getElementById('okBtn').addEventListener('click', function () {
    document.getElementById('formCadastro').submit()
  }) // Escuta o botão, e no momento de clique envia o formulario
</script>

<?php include 'footer.php' ?>
