<?php 

$paciente = 'Eduardo';
$peso = 65;
$idade = 23;

if($idade >= 16 and $idade <= 69 and $peso >= 50){
    $Resultado = 'Pode doar';
} else {
    $Resultado = 'Não pode doar';
}



?>


<html>
    <body>
        
            <h2>Lista de pacientes que podem doar sangue</h2>

            <h2>Paciente:</h2>
            <p><?= $paciente ?> </p>
            <h2>Idade</h2>
            <p><?= $idade ?></p>
            <h2>Peso</h2>
            <p><?= $peso ?></p>

            <h2>Situação:</h2>
            <h2>---------</h2>
            <p><?= $Resultado ?></p>
            







    </body>
</html>