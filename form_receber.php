<?php
    # form_receber.php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'mateus' && $senha == '123') {
        session_start();
        $_SESSION['usuario'] = '$usuario';

        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
    }