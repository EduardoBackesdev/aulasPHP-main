<?php


// inserir

$pdo = new PDO('mysql:host=localhost;dbname=aulasphp;', 'root', '');
$sql = $pdo->prepare("INSERT INTO `pessoas` VALUES (null, 'Eduardo', 'Backes', 172)");
// $sql->execute();

// inserir 


// atualizar

$pdo = new PDO('mysql:host=localhost;dbname=aulasphp', 'root', ''); // de novo para treinar
$sql = $pdo->prepare("UPDATE `pessoas` SET nome='Andriele', sobrenome='marcolin', altura='165' WHERE id=4");
// $sql->execute();

// atualizar


// deletar

$pdo = new PDO("mysql:host:localhost;dbname=aulasphp", 'root', '');
$sql = $pdo->prepare("DELETE FROM `pessoas`  ");
// $sql->execute();

// deletar




// selecionar

$pdo = new PDO("mysql:host=localhost;dbname=aulasphp", 'root','');
$sql = $pdo->prepare("SELECT * FROM `pessoas`");
// $sql->execute();
$info = $sql->fetchAll();

foreach ($info as $key => $value) {

    echo ' Nome: '.$value['nome'].' sobrenome: '.$value['sobrenome'].' altura: '.$value['altura'];
    
}

// selecionar



















?>