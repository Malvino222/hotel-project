<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.php">
    <title>Cadastrar</title>
</head>
<body>
    <form method="post">
  <label><h3>Previsão de Entrada: </h3></label>
   <label for="data">Data: </label>
    <input type="date" name="data">

          <label>Horario: </label>
        <input type="time" name="horario">
        <input type="submit" value="Reservar">
       
    </form>
</body>
</html>

    <?php
    $horario;
    $previsaodeentrada;
    ?>