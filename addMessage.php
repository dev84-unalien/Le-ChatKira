 <?php

$host = "mysql-nectardedemo.alwaysdata.net";
$login = "170341_dev2019";
$mdp = "dev2019form"; 
$bddName = "nectardedemo_legroschaton";

$mess = $_POST['message'];
$pseudo = $_POST['pseudo'];


$connection = new mysqli($host, $login, $mdp, $bddName);
$request = $connection->prepare("INSERT INTO Message (id, message, pseudo)");
$request->bind_param("s, $mess");

$request->execute();

$request->close();
$connection->close();

header('Location : http://localhost/Lechat.html0')
?>