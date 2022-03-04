<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Autor" content="André G. Silva / @andrex__gs">
    <link href="css/index.css" rel="stylesheet">
    <title>Sorteador</title>
</head>
<body>
    <main>
<h1 class="title"> Sorteador em PHP </h1>

<p class='information'> Informe no campo abaixo uma lista com os itens (nomes, números, apelidos, etc) 
    para serem sorteados. </p>

<hr>

<form action="index.php" method="post">
<h4 class='inserirParticipantesTitle'> Insira os Participantes Abaixo: <h4>
<input type="text" name="lista[]" placeholder="Insira os Participantes!" class="inputAdicionar">
<br><br>
<button type="submit" name="botao" class='botaoAdicionar'>Adicionar</button>
<br><hr>
<h4 class='participantesListTitle'>Lista De Participantes: </h4>
<?php

session_start();
$participantes = [];
$participantes = $_POST['lista'] ?? [];
$_SESSION['lista'] = $participantes;

$tamanhoLista = count($participantes);
for($indice = 0; $indice < $tamanhoLista; $indice++){
        echo "<input type='text' name='lista[]' class='lista' value='{$participantes[$indice]}' readonly='readonly'>";
    echo "<br>";
}

?>

</form>
<hr>


<a href="resultado.php" ><button class="botaoSortear">Sortear</button></a>
<hr>

</main>

</body>
</html>


