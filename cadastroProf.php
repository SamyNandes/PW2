<?php include 'header.php' ?>

<body>
<div class="container m-5" style="padding: 40px 0px !important;">
  <img src="./assets/logo.png" class="logo" width="80" >
  <h1 class="my-4">Faça seu cadastro!</h1>

  <form id="formCadastroProf" method="post" action="./views/home.php" onsubmit="abrirModal(event)" style="width: 80%" >
    <div class="mb-3">
      <label for="nome" class="form-label">Nome do professor:</label>
      <input type="text" class="form-control" id="nome" name="nome_prof" placeholder="Digite o nome do professor" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email_prof" placeholder="Digite o email" required>
    </div>

    <div class="mb-3">
      <label for="id_escola" class="form-label">ID da escola:</label>
      <input type="text" class="form-control" id="id_escola" name="id_escola" placeholder="Digite o ID da escola" required>
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha_prof" placeholder="Digite sua senha" required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar-se!</button>
  </form>
</div>

<div class="modal fade" id="modalProf" tabindex="-1" aria-labelledby="modalProfLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalProfLabel">Parabéns!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        Sucesso ao se cadastrar.
      </div>
      <div class="modal-footer">
        <button type="button" id="okBtnProf" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>

<script>
  function abrirModal(e) {
    e.preventDefault()
    const modal = new bootstrap.Modal(document.getElementById('modalProf'))
    modal.show()
  }
  document.getElementById('okBtnProf').addEventListener('click', function () {
    document.getElementById('formCadastroProf').submit()
  })
</script>

<?php include 'footer.php' ?>
