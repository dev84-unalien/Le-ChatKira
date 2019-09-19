 <?php

$host = "mysql-nectardedemo.alwaysdata.net";
$login = "170341_dev2019";
$mdp = "dev2019form"; 
$bddName = "nectardedemo_legroschaton";

$mess = $_POST['msg'];
$pseudo = $_POST['psd'];


$connection = new mysqli($host, $login, $mdp, $bddName);
$request = $connection->prepare ("INSERT INTO Message (message, pseudo) VALUES (?,?)");
$request->bind_param("ss", $mess, $pseudo);

$request->execute();

$request->close();
$connection->close();
?>