<!DOCTYPE html>
<html lang="pt-br">

<head>
   
</head>

<body>


<?php

if(isset($_POST["user"])){

  echo "user";
}

?>

    <div>
    <form method="post">
        <div  class = "tela">
        
        <label for ="user">Usuario:</label>
        <input type ="text" name="user"></label>

        <label for ="Password">Password:</label>
        <input type ="password" name="pass"/>

        <button type="button" value= "enviar">Enviar</button>

</form>


        </div>


    </div>



</body>

</html>