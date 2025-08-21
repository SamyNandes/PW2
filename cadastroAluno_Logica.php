<?php

include 'db.php';

$nome = $_POST['nome_alu'];
$idade = $_POST['email_alu'];
$curso = $_POST['curso_alu'];

$query = "INSERT INTO aluno (nome_alu, idade_alu, curso_alu) VALUES ('$nome', '$idade', '$curso')";

mysqli_query($conexao, $query);

?>  