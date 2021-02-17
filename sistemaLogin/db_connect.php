<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'sistema-login';

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
  echo 'Falha ao conectar ao banco de dados. ERRO: ' . mysqli_connect_error();
}
