 <?php
//// la connexion à la base de données
//$servername = "localhost";
//$username = "root" ;
//$password = "" ;
//$dbname = "projetwizard";


//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "la connexion a ete bien etablie" ;
//
//} catch (PDOException $e) {
//    //message d'erreur
//    echo "la connexion a echoué : " . $e->getMessage();
//}

// la connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetwizard";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "La connexion a été bien établie";
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}


if (isset($_POST['suivant'])) {

    
    try {

        // Récpérer les valeurs du formulaire
        $nameTier = $_POST['nameTier'];
        $address1 = $_POST['address1'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $mobile = $_POST['mobile'];
        $Email = $_POST['Email'];
        $country = $_POST['country'];
        $dpt = $_POST['dpt'];
        $create_time = date('d-m-y h:i:s');
        $update_time = $create_time ;

        // Requête SQL d'insertion
        $sql = "INSERT INTO `addresstier` ( `id`, `create_time`, `update_time`, `nameTier`, `address1`, `zip`, `city`, `phone`, `mobile`, `Email`, `country`, `dpt`)
                VALUES (:id, :create_time, :update_time, :nameTier, :address1, :zip, :city, :phone, :mobile, :Email, :country, :dpt)";

        // Préparation de la requête
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres

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

        // Exécution de la requête
        $stmt->execute();

        echo "<br> Données insérées avec succès";
    } catch (PDOException $e) {
        echo "<br> Erreur lors de l'insertion des données : " . $e->getMessage();
    }

    $conn = null; // Fermer la connexion PDO

}


// Lister les données s'il y a










//if (isset( $_POST['suivant'] )) {
//
//    $id= $_POST['id'];
//    $create_time= $_POST['create_time'];
//    $update_time= $_POST['update_time'];
//    $nameTier = $_POST['nameTier'];
//    $address1 = $_POST['address1'];
//    $zip = $_POST['zip'];
//    $city = $_POST['city'];
//    $phone = $_POST['phone'];
//    $mobile = $_POST['mobile'];
//    $country = $_POST['country'];
//    $dpt = $_POST['dpt'];
//    $Email = $_POST['Email'];
//
//    $sql = ("INSERT INTO `addresstier`( ` id` , `create_time`, `update_time`,  `nameTier`, `address1`, `zip`, `city`, `phone`, `mobile`,
//           `country`, `dpt`, `Email`)
//                        VALUES( :id, :create_time, :update_time,  :nameTier, :address1, : zip, :city, :phone, :mobile, :country, :dpt, :Email )");
//    $stmt = $conn->prepare($sql);
//
//
//    $stmt->bindParam(':id', $id);
//    $stmt->bindParam(':create_time', $create_time);
//    $stmt->bindParam(':update_time', $update_time);
//    $stmt->bindParam(':nameTier', $nameTier);
//    $stmt->bindParam(':address1', $address1);
//    $stmt->bindParam(':zip', $zip);
//    $stmt->bindParam(':city', $city);
//    $stmt->bindParam(':phone', $phone);
//    $stmt->bindParam(':mobile', $mobile);
//    $stmt->bindParam(':country', $country);
//    $stmt->bindParam(':dpt', $dpt);
//    $stmt->bindParam(':Email', $Email);
//    $stmt->execute();
//    $stmt->close();
//
//    // pour changer deux ou plus dans une seul fois clique sur ctrl + d
//}



?>