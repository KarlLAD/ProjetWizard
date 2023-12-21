<!-- formulaire de saisie -->

<body>


    <script type="text/javascript" src="./commonjs/function.js"></script>

    <?php
    // la connexion à la base de données
        $servername = "localhost";
        $username = "root" ;
        $password = "" ;
        $dbname = "projetwizard";


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             echo "la connexion a ete bien etablie" ;

        } catch (PDOException $e) {
           //message d'erreur
           echo "la connexion a echoué : " . $e->getMessage();
        }


        if (isset( $_POST['suivant'] )) {

           $id= $_POST['id'];
           $create_time= $_POST['create_time'];
           $update_time= $_POST['update_time'];
           $nameTier = $_POST['nameTier'];
           $address1 = $_POST['address1'];
           $zip = $_POST['zip'];
           $city = $_POST['city'];
           $phone = $_POST['phone'];
           $mobile = $_POST['mobile'];
           $country = $_POST['country'];
           $dpt = $_POST['dpt'];
           $Email = $_POST['Email'];

           $sql = ("INSERT INTO `addresstier`( ` id` , `create_time`, `update_time`,  `nameTier`, `address1`, `zip`, `city`, `phone`, `mobile`, 
           `country`, `dpt`, `Email`) 
                        VALUES( :id, :create_time, :update_time,  :nameTier, :address1, : zip, :city, :phone, :mobile, :country, :dpt, :Email )");
            $stmt = $conn->prepare($sql);


            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':create_time', $create_time);
            $stmt->bindParam(':update_time', $update_time);
            $stmt->bindParam(':nameTier', $nameTier);
            $stmt->bindParam(':address1', $address1);
            $stmt->bindParam(':zip', $zip);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':mobile', $mobile);
            $stmt->bindParam(':country', $country); 
            $stmt->bindParam(':dpt', $dpt);
            $stmt->bindParam(':Email', $Email);
                $stmt->execute();
                $stmt->close();
                        
            // pour changer deux ou plus dans une seul fois clique sur ctrl + d
        }

        

?>

    <section class="etape1">

        <!--  -->
        <form action="#" @csrf method="POST">


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

                        <input type="number" id="zip" name="zip" min="0" placeholder="Code postal">
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
                        <input type="tel" id="phone" name="phone" placeholder="00-00-00-00-00">
                    </div>

                    <div class="mobile">
                        <label class="label-mobile" for="mobile">Téléphone mobile :</label>

                        <input type="tel" id="mobile" name="mobile" placeholder="00-01-01-01-01">
                    </div>

                    <!-- Saisie Email -->

                    <div class="Email">
                        <label class="label-Email" for="Email">EMail :
                        </label>
                        <input type="email" placeholder="name@exemple.com" id="Email" name="Email" size="150"
                            minlength="3">

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
            <input type="submit" value="suivant input" name="suivant input">

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