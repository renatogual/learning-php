<?php
include_once 'includes/header.php'
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
        <tr>
          <td>José Renato</td>
          <td>Gualberto</td>
          <td>renatogual@hotmail.com</td>
          <td>26</td>
          <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <div>
      <a href="" class="btn">Adicionar cliente</a>
    </div>
  </div>
</div>

<?php
include_once 'includes/footer.php'
?>