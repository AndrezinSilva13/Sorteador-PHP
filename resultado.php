<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Autor" content="André G. Silva / @andrex__gs">
    <link href="css/resultado.css" rel="stylesheet">
    <title>Sorteador</title>
</head>
<body>
    <main>
<h1 class="title"> Resultado Sorteio PHP </h1>
<hr>

<?php

session_start();
$lista = $_SESSION['lista'];
$tamVetor = count($lista);
$tamVetor = $tamVetor - 1;
$sortear = rand(0, $tamVetor);

echo "<h2 class='ganhadorTitle'> O Ganhador do Sorteio foi: </h2>  
<h3 class='ganhador'> $lista[$sortear] </h3>";


?>

<hr>
<a href="index.php"><button class='voltarButton'>Voltar</button></a>
    </main>
</body>
</html>
