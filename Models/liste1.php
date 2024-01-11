<?php
//======================================
// Lister un name Tier


if ( isset($_POST['read']) && !empty($_POST['nameTier'] ) ) {
    echo "<br>Lister un tier <br>";
    
    
            try {
                $sql = "SELECT * FROM `addresstier` " ;

    // Préparation de la requête
                 $resultat = $conn->prepare($sql);


                $nameTier = htmlentities(addslashes($_POST['nameTier']));
                $address1 = htmlentities(addslashes($_POST['address1']));
                $zip = htmlentities(addslashes($_POST['zip']));
                $city = htmlentities(addslashes($_POST['city']));
                $phone = htmlentities(addslashes($_POST['phone']));
                $mobile = htmlentities(addslashes($_POST['mobile']));
                $Email = htmlentities(addslashes($_POST['Email']));
                $country = htmlentities(addslashes($_POST['country']));
                $dpt = htmlentities(addslashes($_POST['dpt']));

// 

        $resultat->bindValue(':nameTier', $nameTier);
        $resultat->bindParam(':address1', $address1);
        $resultat->bindValue(':zip', $zip);
        $resultat->bindValue(':city', $city);
        $resultat->bindValue(':phone', $phone);
        $resultat->bindValue(':mobile', $mobile);
        $resultat->bindValue(':Email', $Email);
        $resultat->bindValue(':country', $country);
        $resultat->bindValue(':dpt', $dpt);


                $resultat->execute(array());
        // nombre total de Tier dans la base de données
                $maxTier = $resultat->rowCount();

                echo "<br> max Tier : ".$maxTier."<br>" ;

        if ($maxTier != 0) {
            echo "<h2> nameTier correct !</h2>";
        } else {
            header("location:etape1.php?message=1") ;
        }

        $resultat->closeCursor();
        
//         $_GET['nameTier'] = "";

//       while ($line = $resultat->fetch()) {

//    if ($_POST['nameTier'] == $line['nameTier']) {

//            echo "<br> id :".$line['id']." nameTier : " .$line['nameTier']."<br>" ;

           
//     $_GET['address1'] =  $line['address1'] ;
//     $_POST['address1'] = $_GET['address1'];

    
//         echo " <br> GET : ".$_GET['address1'] ;



//    } else {

//     echo "<br> Ce tier n'existe pas : ".$_POST['nameTier'] ;
//    }
    //   }
     

    } catch (PDOException $e) {
       echo "<br> Pas de données enregistrer : " . $e->getMessage();
    }

        $conn = null; // Fermer la connexion PDO

}

?>