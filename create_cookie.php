<?php
  if ($_POST['cor']){
    setcookie("cordefundo", $_POST['cor'], time() + 2);
  }


?>
<html>
    <head>
        
    </head>
    <body>
        <h3>Cookie criado com sucesso!</h3>
        <a href="forma.php">Voltar ao Formulário</a>
    </body>
</html>