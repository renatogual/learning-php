<?php
require_once 'db_connect.php';

session_start();

if (isset($_POST['btn-entrar'])) {
  $erro = array();
  // mysqli_escape_string filtra apenas strings para enviar ao banco de dados
  $login = mysqli_escape_string($connect, $_POST['login']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if (empty($login || $senha)) {
    $erros[] = "<li> O campo login/senha está vazio <li>";
  } else {
    $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
    $resultado = mysqli_query($connect, $sql);

    if(mysqli_num_rows($resultado) > 0) {
      $sql = "SELECT * FROM usuarios WHERE login = '$login' && senha = '$senha' ";
      $resultado = mysqli_query($connect, $sql);

      if(mysqli_num_rows($resultado) == 1) {
        $dados = mysqli_fetch_array($resultado);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        header('Location: home.php');
      } else {
        $erros[] = '<li> Usuário e senha incorretos <li>';
      }

    } else {
      $erros[] = '<li> Usuário incorreto <li>';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de login em PHP</title>
</head>

<body>
  <h1>Login</h1>

  <?php 
    if(!empty($erros)) {
      foreach($erros as $erro) {
        echo $erro;
      }
    }
  ?>
  <hr>
  <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post">
    Nome: <input type="text" name="login" style="margin-left: 10px; margin-right: 10px;">
    Senha: <input type="password" name="senha" style="margin-left: 10px;">
    <button type="submit" name="btn-entrar">Entrar</button>
  </form>
</body>

</html>