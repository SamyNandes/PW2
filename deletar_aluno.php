<?php 

include "db.php";

$id = $_GET['id'];
$query = "DELETE FROM aluno WHERE id_alu = $id ";
mysqli_query($conexao, $query);
header("location:./views/consultaAlunos.php");
?>