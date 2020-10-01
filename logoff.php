<?php
/*
session_start(); // iniciando a sessao

echo '<pre>';
print_r($_SESSION);

unset($_SESSION['x']); // remove o array e o indice da sessao (não gera erro se não tiver indice para remover)

echo '<pre>';
print_r($_SESSION);

session_destroy(); // remove todos os indices da sessao 

echo '<pre>';
print_r($_SESSION);
*/

session_destroy();
header('Location: index.php'); // redirecionando após o comando destroy

?>