<?php

$host = "mysql-nectardedemo.alwaysdata.net";
$login = "170341_dev2019";
$mdp = "dev2019form"; 
$bddName = "nectardedemo_legroschaton";

$conn = new mysqli($host, $login, $mdp, $bddName);

if ($conn->connect_error) {
    die("Echec de connexion: " . $conn->connect_error);
}
echo "Connecté avec succès";

?>