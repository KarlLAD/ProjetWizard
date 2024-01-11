<?php

 try {
        $sql = "DELETE  FROM `addresstier` WHERE `nameTier` = $nameTier, id = $id" ;

    // Préparation de la requête
        $resultat = $conn->prepare($sql);

        $resultat->execute(array('nameTier'=> $nameTier, 'id' => $id ));
    
    echo "<br> nameTier supprimé avec succès ! <br>" ;
    } catch (PDOException $e) {
       echo "<br> Erreur : " . $e->getMessage();
    }

        $conn = null; // Fermer la connexion PDO





?>