<?php
    # form_receber.php
    # $senha_cripto = '$2y$10$QjiXB7lv21uwj3I.E6hr0.4Rder..q/pTC3npHcxHHjq5pAER1xrG';
    require('pdo.inc.php');


    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //Prepara a consulta
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE
     username = ? AND active = 1');

    //Anexa a variável $usuario no parametro 1
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);

    //Roda a consulta no banco
    $sql->execute();

    //Busca os dados no banco
    $dados = $sql->fetch(PDO::FETCH_ASSOC);
    //var_dump($dados);

    if ($sql->rowCount() == 1 
    && 
    password_verify($senha ,$dados['password'])) {
        session_start();
        $_SESSION['usuario'] = '$usuario';
        $_SESSION['admin'] = $dados['admin'];

        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
    }