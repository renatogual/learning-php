<?php
include_once 'actions/listar_clientes.php';
include_once 'includes/header.php';
include_once 'includes/message.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h1 class="light">Clientes</h1>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Email</th>
          <th>Idade</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody>
        <?php
          while($dados = mysqli_fetch_array($lista_clientes)) { ?>
            <tr>
              <td><?php echo $dados['nome'] ?></td>
              <td><?php echo $dados['sobrenome'] ?></td>
              <td><?php echo $dados['email'] ?></td>
              <td><?php echo $dados['idade'] ?></td>
              <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
              <td><a href="actions/delete.php" class="btn-floating red"><i class="material-icons">delete</i></a></td>
            </tr>
          <?php }; ?>
      </tbody>
    </table>
    <div>
      <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php'
?>