<?php

$way = 'local';

if($way == 'local'){
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbase = "login";
}

if($way == 'producao'){
    $server = "";
    $user = "";
    $password = "";
    $dbase = "";
}

try{
    $pdo = new PDO("mysql:host=$server;dbname=$dbase", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error){
    echo "Falha ao conectar";

}

?>