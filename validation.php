<script src="./commonjs/function.js"></script>

<?php
session_start();

var_dump("<br> base de donnée");


require_once("./Models/accessDB.php") ;


echo "<br>";
var_dump("<br> test validation début");



    var_dump("<br> ok validation") ;

    try {

        /* 
         *  Récpérer les valeurs du formulaire
         * sauvegarder dans la variable
         * $_SESSION et sécurisation contre injection
         * de code dans la base de données
         * 
        */
        //etape 1

        $nameTier = addslashes(TRIM($_SESSION['nameTier']));
        $address1 = TRIM($_SESSION['address1']);
        $zip = intval($_SESSION['zip']);
        $city = TRIM($_SESSION['city']);
        $phone = TRIM($_SESSION['phone']);
        $mobile = TRIM($_SESSION['mobile']);
        $Email = TRIM($_SESSION['Email']);
        $country = TRIM($_SESSION['country']);
        $dpt = TRIM($_SESSION['dpt']);
        $create_time = date('d-m-y h:i:s');
        $update_time = $create_time ;

        // etape 2
        $passport = TRIM($_SESSION['passport']);
        $facture = TRIM($_SESSION['facture']);
        $rib = TRIM($_SESSION['rib']);

        // etape 3

        $fiscal = TRIM($_SESSION['fiscal']);
        $nbpersonnes = TRIM($_SESSION['nbpersonnes']);
        $loc = TRIM($_SESSION['loc']);

        // etape 4
        $product = TRIM($_SESSION['product']);




        // Requête SQL d'insertion
        $sql = "INSERT INTO `addresstier` ( `id`, `create_time`, `update_time`, `nameTier`, `address1`, `zip`, `city`, `phone`, 
                        `mobile`, `Email`, `country`, `dpt`, `passport`, `facture`, `rib`,
                            `fiscal`, `nbpersonnes`, `loc`, `product` )
                VALUES (:id, :create_time, :update_time, :nameTier, :address1, :zip, :city, :phone, :mobile, :Email, :country, :dpt,
                    :passport, :facture, :rib, :fiscal, :nbpersonnes, :loc, :product
                )";

        // Préparation de la requête
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres

// Données de l'étape 1
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':create_time', $create_time);
        $stmt->bindParam(':update_time', $update_time);
        $stmt->bindParam(':nameTier', $nameTier);
        $stmt->bindParam(':address1', $address1);
        $stmt->bindParam(':zip', $zip);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':Email', $Email);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':dpt', $dpt);

// Données étape 2
        $stmt->bindParam(':passport', $passport);
        $stmt->bindParam(':facture', $facture);
        $stmt->bindParam(':rib', $rib);

// Données de l'étape 3
        $stmt->bindParam(':fiscal', $fiscal);
        $stmt->bindParam(':nbpersonnes', $nbpersonnes);
        $stmt->bindParam(':loc', $loc);

// Données de l'étape 4
        $stmt->bindParam(':product', $product); 



        // Exécution de la requête
        $stmt->execute();

        echo "<br> Données insérées avec succès";
            // header('Location: /etape1.php' );
            // exit;
    } catch (PDOException $e) {
        echo "<br> Erreur lors de l'insertion des données : " . $e->getMessage();
    }

    $conn = null; // Fermer la connexion PDO
                

// header('Location: /etape1.php' );
// exit;




?>