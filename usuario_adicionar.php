<?php
require('models/Model.php');
require('models/Usuario.php');


$username = $_POST['username'] ?? false;
$password = $_POST['password'] ?? false;
$admin = isset($_POST['admin']);

$password = password_hash($password, PASSWORD_BCRYPT);

$usuario = new Usuario();
$usuario->create([
    'username' => $username,
    'password' => $password,
    'admin' => $admin,
    'active' => 1
]);

header('location:usuarios.php');
die;