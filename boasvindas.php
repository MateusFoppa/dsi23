<?php 

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location:form.php?erro=2');
        die;
    }
echo 'Login com sucesso';