<?php

// la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetwizard";




// connexion sur serveur avec PDO 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "La connexion a été bien établie";
    return $conn;
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}




?>