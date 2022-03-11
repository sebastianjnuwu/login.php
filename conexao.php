<?php

require('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('HOST', $_ENV["host"]);
define('USUARIO', $_ENV["user"]);
define('SENHA', $_ENV["senha"]);
define('DB', $_ENV["database"]);

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');