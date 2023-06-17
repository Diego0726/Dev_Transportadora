<?php

$usuario = 'root';
$senha = '';
$database = 'devtransportes2teste';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao se conectar ao banco de dados: " . $mysqli->error);
}
