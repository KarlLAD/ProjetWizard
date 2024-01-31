<?php

class deleteData extends Model 
{
    function deleteDB($id) {

        


    }   
}


class Model {

    public function model() : Returntype {
        
    }
}

if (isset($_POST["delete"])) {

    try {
          $sql = "DELETE `addresstier` WHERE id = $id";
          // Préparation de la requête
        $stmt = $conn->prepare($sql);


                // Exécution de la requête
        $stmt->execute();

        echo "<br> Données supprimées avec succès";
            // header('Location: /etape1.php' );
            // exit;
    } catch (PDOException $e) {
        echo "<br> Erreur lors de suppression des données : " . $e->getMessage();
    }

    $conn = null; // Fermer la connexion PDO
                

}


?>