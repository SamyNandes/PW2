<?php

include 'db.php';

$nome = $_POST['nome_alu'];
$email = $_POST['email_alu'];
$curso = $_POST['curso_alu'];

$query = "INSERT INTO aluno (nome_alu, email_alu, curso_alu) VALUES ('$nome', '$email', '$curso')";

mysqli_query($conexao, $query);

header("location:./views/consultaAlunos.php");
?>  