<?php

    echo '<pre>';
    print_r($_POST);

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_POST['titulo']. '#'. $_POST['categoria']. '#'. $_POST['descricao'] . PHP_EOL; // PHP_EOL (passa o proximo aruivo para linha de baixo)

    // $texto_array = [$_POST['titulo'], $_POST['categoria'], $_POST['descricao']];
    // $texto_string = implode("//", $texto_array);
    
    $arquivo = fopen('arquivo.txt', 'a'); // (a)- abre ou cria um novo arquivo 

    fwrite($arquivo, $texto); // acrescenta o $texto_string no final do $arquivo 

    fclose($arquivo); // fecha o arquivo 

    header('Location: abrir_chamado.php')

?>