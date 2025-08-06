<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Projetos</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container"> 
<img src="./assets/logo.png" class="logo" width="80" >
<h1>Faça seu cadastro!</h1>
    <form method="post" action="cadastroProfSucesso.php"  style="">
        <div class="containerInput"> 
            <label>Nome do professor:</label>
            <input type="text" name="nome_prof" placeholder= "Digite o nome do professor" required> 
        </div>
        <div class="containerInput">
            <label>Email:</label> 
            <input type="text" name="email_prof" placeholder="Digite o seu email" required> 
        </div>
        <div class="containerInput">
            <label>ID da escola:</label> 
            <input type="text" name="id_escola" placeholder="Digite o id da escola" required> 
        </div>
        <div class="containerInput">
            <label>Senha:</label> 
            <input type="password" name="senha_prof" placeholder="Digite sua senha" required> 
        </div>
        <div class="containerInput">
            <button type="submit">Cadastra-se!</button>
        </div>
    </form>
</div>     
</body>
</html>