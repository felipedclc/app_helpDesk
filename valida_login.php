<?php

session_start();

$usuario_autenticado = false;

$usuarios_app = [  // cadastro de usuarios do sistema
    array('email' => 'adm@teste.com', 'senha' => '12345'),
    array('email' => 'user@teste.com', 'senha' => '102030')
];

foreach($usuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) { // se o post for igual ao cadastro
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado) {
    print 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php'); // desviando a aplicação para home.php
}
else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro'); // desviando a aplicação para login=erro
}


/*
    print_r($_GET);
    print '<br>';
    print $_GET['email'];
    print '<br>';
    print $_GET['senha'];

    print_r($_POST);
    print '<br>';
    print $_POST['email'];
    print '<br>';
    print $_POST['senha'];
*/
    
?>