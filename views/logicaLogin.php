<?php

// Quando o usuário clica no botão ocorre o metodo post e esta logica do php irá rodar ****A URL NÃO MUDA****

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "cadastro_cur_alu";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nomeUsuario = $_POST['usuario']; //Para evitar o sql injection x' or 1=1 or 'x' // Pega o valor do input chamado usuario
$senhaUsuario = $_POST['senha']; // Pega o valor do input chamado senha

$query = "SELECT * FROM professor WHERE nome_prof = '$nomeUsuario' and senha_prof = '$senhaUsuario'"; // Linha de consulta para o sql

$consulta = mysqli_query($conexao, $query); // Consulta para o banco de dados

/* 
Caso a consulte retorne alguma linha (o que indica que houve retorno de dados, entao existe o usuario), uma sessão PHPSESSID irá iniciar
Caso ela não retorne, iremos passar um parametro para a url chamada "erro", na parte de login, temos  uma parte do código que irá fazer uma verificação para ver se 
esse parametro na url e mostrara uma caixa de texto.
*/

if (mysqli_num_rows($consulta)==1){
	/*echo 'login feito com sucesso';*/

	session_start();
	$_SESSION['login']=true;
	$_SESSION['usuario']=$usuario; /* ?????? */
	setcookie("usuario", $usuario, time() + 3600, "/");
	header('location:logicaVerificacao.php');
	
	
}
else{
	/*echo 'usuário e/ou senha inválido(s)';*/
	header('location:home.php?erro');	
}


