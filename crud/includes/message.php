<?php
session_start(); //Inicia a sessão
if(isset($_SESSION['mensagem'])) { ?>

  <script>
    window.onload = function() {
      M.toast({ html: "<?php echo $_SESSION['mensagem']; ?>" })
    }
  </script>
  
<?php }
session_unset(); //Encerra a sessão
?>