<?php

include 'db.php';

$nome_prof = $_POST['nome_prof'];
$email_prof = $_POST['email_prof'];
$id_escola = $_POST['id_escola'];
$senha_prof = $_POST['senha_prof'];

$query = "INSERT INTO professor (nome_prof, email_prof, id_escola, senha_prof) VALUES ('$nome_prof', '$email_prof', '$id_escola', '$senha_prof')";

mysqli_query($conexao, $query);

?>  