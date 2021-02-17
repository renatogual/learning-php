<?php
  require_once 'db_connect.php';

  $sql = "SELECT * FROM clientes";

  $lista_clientes = mysqli_query($connect, $sql);
