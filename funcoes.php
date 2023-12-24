<?php 

$nome1 = 'Marcio';
$nome2 = 'Paulo';
$nome3 = 'Marcos';

$salario1 = 3000;

$imposto1 = 0;
$imposto2= 7.5;
$imposto3=15;
$imposto4= 23;
$imposto5= 27;



if($salario1 <= 1903){
    
    $imposto1 = 'Seu imposto é '.$imposto1;

}else if($salario1 >= 1904 and $salario1 <= 2800){

    $imposto1 = 'seu imposto e' .$imposto2;

}else if($salario1 >= 2801 and $salario1 <= 3751){

    $imposto1 = 'seu imposto e '.$imposto3;

}else if($salario1 >= 37201 and $salario1 <= 4664){

    $imposto = 'seu imposto e '.$imposto4;

}else if($salario1 >= 4665){

    $imposto1 = 'seu imposto e '.$imposto5;

}


function calcularImposto($salario, $imposto){

    $porcentagemSalario = ($imposto / 100) * $salario;

    $total = $salario + $porcentagemSalario;

    echo $total;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Calculo de Imposto de renda</h2>


    <h2><?= $nome1 ?></h2>
    <h4>Salario = <p><?= $salario1 ?></p></h4>
    <h4>Quanto de imposto paga? <?= $imposto1 ?>% </h4>
    <h4>Total a ser pago <p> <?= calcularImposto(3000, 15) ?> </p></h4>

    
    <h2><?= $nome2 ?>o</h2>
    <h4>Salario = <p><?= $salario1 ?></p></h4>
    <h4>Quanto de imposto paga?<?= $imposto1 ?>%  </h4>
    <h4>Total a ser pago <p> <?= calcularImposto(3000, 15) ?></p></h4>

    



    <h2><?= $nome3 ?></h2>
    <h4>Salario = <p><?= $salario1 ?></p></h4>
    <h4>Quanto de imposto paga?<?= $imposto1 ?>%  </h4>
    <h4>Total a ser pago <p> <?= calcularImposto(3000, 15) ?></p></h4>






    <h2>Claudio</h2>
    <h4>Salario = <p><?= $salario1 ?></p></h4>
    <h4>Quanto de imposto paga?<?= $imposto1 ?>%  <p></p> </h4>
    <h4>Total a ser pago <p> <?= calcularImposto(3000, 15) ?></p></h4>
    


    
</body>
</html>