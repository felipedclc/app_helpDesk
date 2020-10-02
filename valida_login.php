<?php

session_start();

$usuario_autenticado = false;
$usuario_id = null; 
$usuario_perfil_id = null;

$perfis = [1=> 'Administrativo', 2=> 'Usuario'];

$usuarios_app = [  // cadastro de usuarios do sistema
    array('id'=> 1,'email' => 'adm@teste.com', 'senha' => '12345', 'perfil_id'=> 1),
    array('id'=> 2,'email' => 'user@teste.com', 'senha' => '102030', 'perfil_id'=> 2),
    array('id'=> 3,'email' => 'jose@teste.com', 'senha' => '102030', 'perfil_id'=> 2),
    array('id'=> 4,'email' => 'maria@teste.com', 'senha' => '102030', 'perfil_id'=> 2)
];

foreach($usuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) { // se o post for igual ao cadastro
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if($usuario_autenticado) {
    print 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
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