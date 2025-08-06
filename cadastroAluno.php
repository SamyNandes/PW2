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
<h1>Faça o cadastro do aluno!</h1>
    <form method="post" action="cadastroAlunoSucesso.php"  style="">
        <div class="containerInput"> 
            <label>Nome do aluno: </label>
            <input type="text" name="nome_alu" placeholder= "Digite o nome do aluno" required> 
        </div>
        <div class="containerInput">
            <label>Email:</label> 
            <input type="text" name="idade_alu" placeholder="Digite o email do aluno" required> 
        </div>
        <div class="containerInput">
            <label>Nome do curso:</label> 
            <input type="text" name="curso_alu" placeholder="Digite o nome do curso" required> 
        </div>
        <div class="containerInput">
            <button type="submit">Salve</button>
        </div>
    </form>
</div>     
</body>
</html>