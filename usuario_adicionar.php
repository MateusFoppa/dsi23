<?php

$usuario = $_POST['username'];
$senha = $_POST['password'];
$admin = isset($_POST['admin']);

$senhaCripto = password_hash($senha, PASSWORD_BCRYPT);

require('pdo.inc.php');

$gravar = $pdo->prepare('INSERT INTO usuarios (name, password, active, admin) 
VALUES (:usr, :pass, "1", :adm)'  );

$gravar->bindParam(':usr', $usuario);
$gravar->bindParam(':pass', $senhaCripto);
$gravar->bindParam(':adm', $admin);

$gravar->execute();

header('location:usuarios.php');
die;