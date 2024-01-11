<?php

include("accessDB.php");
include("addressTier.php");

// Lister les données de la base de données s'il y a des données

    echo "<br>Lister les données. <br>";
    
    try {
        $sql = "SELECT * FROM `addresstier` ORDER BY nameTier ASC" ;

    // Préparation de la requête
        $resultat = $conn->prepare($sql);

       $datas= $resultat->execute(array());
        



    //   while ($line = $resultat->fetch()) {
    //     echo "id :".$line['id']." nameTier : " .$line['nameTier']."<br>" ;
        
    //         }

    }   catch (PDOException $e) {
       echo "<br> Pas de données enregistrer : " . $e->getMessage();
    }

   
$conn = null; // Fermer la connexion PDO


?>


<div>




</div>