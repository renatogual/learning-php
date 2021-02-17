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
        </tr>
      </thead>

      <tbody>
        <?php
        while ($dados = mysqli_fetch_array($lista_clientes)) { ?>
          <tr>
            <td><?php echo $dados['nome'] ?></td>
            <td><?php echo $dados['sobrenome'] ?></td>
            <td><?php echo $dados['email'] ?></td>
            <td><?php echo $dados['idade'] ?></td>
            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
          </tr>

          <!-- Modal -->
          <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Tem certeza que deseja deletar?</h4>
            </div>
            <div class="modal-footer">

              <form action="actions/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red">Deletar</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>

            </div>
          </div>
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