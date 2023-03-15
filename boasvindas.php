<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header('location:form.php?erro=2');
    die;
}
echo 'Login com sucesso';



$senha_cripto = password_hash(123, PASSWORD_BCRYPT, [
    'cost' => 10
]);

//echo $senha_cripto;

?>
<p>

    <?php
    if ($_SESSION['admin']) {
    ?>
        <a href="usuarios.php">Usuários</a>
    <?php
    }
    ?>
    <br>
    <a href="logout.php">Sair</a>
</p>