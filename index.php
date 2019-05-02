<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>Tela de login</title>
   <link rel="stylesheet" href="index1.css">
</head>

<body>

   <?php
   if (isset($_POST['enviar'])) {
      if ($_POST['usuario'] == 'gustavo' and $_POST['password'] == '123') {
         header("Location: logado.php?usuario=" . $_POST['usuario']);
      } else {
         header("Location: errLogin.php");
      }
   }
   ?>

   <form action="" method="post">
      <div class="block_login">
         <div class="block_titulo">TELA DE ACESSO</div>
         <div class="block_center">
            <img src="login.png" alt="">
            <label for="">Usuario</label><br>
            <input type="text" name="usuario"><br><br>
            <label for="">Senha</label><br>
            <input type="password" name="password"><br><br>
         </div>
         <div class="block_rodape">
            <input type="submit" name="enviar" value="ACESSAR">
            <input type="button" onclick="cadastro: location.href='cadastro.php';" value="CADASTRAR-SE">
         </div>
      </div>
   </form>
</body>

</html>