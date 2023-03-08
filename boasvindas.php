<?php 

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location:form.php?erro=2');
        die;
    }
echo 'Login com sucesso';



    $senha_cripto = password_hash(123, PASSWORD_BCRYPT, [
        'cost' => 10
    ]);

    echo $senha_cripto;
    
        ?>
    <p>
        <a href="logout.php">Sair</a>
    </p>