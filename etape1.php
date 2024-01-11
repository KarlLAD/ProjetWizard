<!-- formulaire de saisie -->

<script type="text/javascript" src="./commonjs/function.js"></script>
<!-- lien pour input phone et mobile -->
<script type="text/javascript" src="/commonjs/function.js"></script>



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
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}


if (isset($_POST["nameTier"]) && $_POST["suivant"] ) {

    try {

        // Récpérer les valeurs du formulaire

        $nameTier = TRIM($_POST['nameTier']);
        $address1 = $_POST['address1'];
        $zip = intval($_POST['zip']);
        $city = TRIM($_POST['city']);
        $phone = TRIM($_POST['phone']);
        $mobile = TRIM($_POST['mobile']);
        $Email = TRIM($_POST['Email']);
        $country = TRIM($_POST['country']);
        $dpt = TRIM($_POST['dpt']);
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
            header('Location: index.php' );
            exit;
    } catch (PDOException $e) {
        echo "<br> Erreur lors de l'insertion des données : " . $e->getMessage();
    }

    $conn = null; // Fermer la connexion PDO
                

// header('Location: /etape1.php' );
// exit;


}

$phone = $_POST['phone'];
?>

<section class="etape1">

    <!--  -->
    <form action="etape1.php" @csrf method="POST">
        <!-- submit_form.php -->

        <fieldset class="display:inline">
            <legend> Nom du tiers</legend>

            <div class="name-tiers">
                <label class="label-name" for="name">Nom du tiers :</label>
                <input type="text" id="nameTier" name="nameTier" size="150" placeholder="nom du tiers">
            </div>

            <!-- Saisie de l'adresse -->

            <div class="address1">
                <label class="label-address1" for="address1">Adresse :</label>

                <input type="text" id="address1" name="address1" size="10000" placeholder="Street address">
            </div>

            <!-- Saisie de code postal et de la ville -->
            <div class="zip-ville">

                <!-- Pour le code postal -->
                <div>
                    <label class="label-zip" for="zip">Code postal :</label>

                    <input type="text" id="zip" name="zip" placeholder="Code postal">
                </div>

                <!-- Pour la ville -->
                <div>
                    <label class="label-city" for="city">Ville :</label>

                    <input type="text" id="city" name="city" placeholder="City">

                </div>

            </div>

            <!-- Saisie des téléphones -->
            <div class="phones">
                <div class="phone">
                    <label class="label-phone" for="phone">Téléphone :</label>
                    <input type="text" id="phone" name="phone" placeholder="00-00-00-00-00"
                        onChange="isValidFrenchPhoneNumber(phone)">

                </div>

                <div class=" mobile">
                    <label class="label-mobile" for="mobile">Téléphone mobile :</label>

                    <input type="tel" id="mobile" name="mobile" placeholder="00-01-01-01-01">
                </div>

                <!-- Saisie Email -->

                <div class="Email">
                    <label class="label-Email" for="Email">EMail :
                    </label>
                    <input type="email" placeholder="name@exemple.com" id="Email" name="Email" size="150" minlength="3">

                </div>

                <!-- Saisie du pays -->

                <div class="country">
                    <label class="label-country" for="country">Pays :</label>

                    <select name="country" id="country">
                        <option value="France">France</option>
                        <option value="Espagne">Espagne</option>
                        <option value="Maroc">Maroc</option>
                        <option value="Australie">Australie</option>
                        <!-- Add more countries as needed -->
                    </select>



                </div>

                <!-- Saisie Département/Canton -->

                <div class="dpt">
                    <label class="label-dpt" for="dpt">Département/Canton
                        :</label>

                    <select name="dpt" id="dpt">

                        <option value>Entrez le département</option>
                        <option value="Martinique">972 - Martinique</option>
                        <option value="Ain">01 - Aion</option>
                        <option value="Isère">38 - Isère</option>
                        <option value="Réunion">974 -
                            Réunion</option>
                        <!-- Add more department as needed -->
                    </select>
                </div>

            </div>
        </fieldset>
        <!-- les boutons -->
        <button class="buttonPage" id="#btn-next" type="submit" name="suivant"
            onclick="getDatas1(); next(1);">Suivant</button>
        <button class="buttonPage" id="#btn-reset" type="submit" onclick="home();">Début </button>
        <input type="submit" value="reset" name="reset">
        <input type="submit" value="suivant input" name="suivant">

        <!-- <button class="buttonPage" id="#btn-reset" type="submit" name="suivant">suivant test
            </button> -->






    </form>









    <!-- <button
                            type="button"
                            id="etape1"
                            onclick="etape2.html"
                            class="px-4 py-2 rounded bg-purple-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                            Suivant
                        </button> -->






    <!-- getName();  -->

    <!-- <div class="widget">
    <button>A button element</button>

    <input type="submit" value="suivant jquery">

</div> -->


</section>