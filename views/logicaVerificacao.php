<?php 

#iniciar sessão
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "cadastro_cur_alu";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);



#Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'mainPage';
	}
}
else{
		$pagina = 'home';
}

switch ($pagina) {
	case 'mainPage': include 'mainPage.php'; break;
	default: include 'home.php'; 
	break;
}
