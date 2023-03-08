<?php
    # form_receber.php
    $senha_cripto = '$2y$10$QjiXB7lv21uwj3I.E6hr0.4Rder..q/pTC3npHcxHHjq5pAER1xrG';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'mateus' && password_verify($senha ,$senha_cripto)) {
        session_start();
        $_SESSION['usuario'] = '$usuario';

        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
    }