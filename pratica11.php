<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica11 form</title>
</head>
<body>
    <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="card">
      <label> Nome: </label>    
      <input type="text" id="nome" name="nome"/>  
      <br/><br/>
      <label> email: </label>    
      <input type="email" id="mail" name="mail"/>  
      <br/><br/>
      <label> telefone: </label>    
      <input type="tel" id="tell" name="tell"/>                                       
      <br/><br/>
      <input type="submit" id="enviar" name="enviar" value="MANDA">
    </form>
  <h2>dados informed:</h2>
  <?php
  $nome= $mail= $tell= "";
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $nome = $_POST['nome'];
    $mail = $_POST['mail'];
    $tell = $_POST['tell'];
    echo "<strong> Nome: </strong> $nome <br/>";
    echo "<strong> Email: </strong> $mail <br/>";
    echo "<strong> Tell: </strong> $tell <br/>";
  }
  ?>
</body>
</html>