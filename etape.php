<!-- style -->
<link rel="stylesheet" href="style.css">
<!-- formulaire de saisie -->

<script type="text/javascript" src="/commonjs/function.js"></script>

<?php
session_start();
include("./hero.php");

?>

<div id="wizard">
    <!-- formualire de l'étape 1 -->
    <div id="step1" class="step">
        <form action="" @csrf method="POST" name="form1">

            <fieldset class="display:inline">
                <legend> Nom du tiers</legend>

                <div class="name-tiers">
                    <label class="label-name" for="nameTier">Nom du tiers :</label>
                    <input type="text" id="nameTier" name="nameTier" size="150" placeholder="nom du tiers"
                        value="<?php if(isset($_SESSION['nameTier'])) echo $_SESSION['nameTier']; ?>">
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
                        <input type="tel" id="phone" name="phone" placeholder="00-00-00-00-00" autocomplete="off"
                            onChange="isValidFrenchPhoneNumber(value)">

                    </div>

                    <div class="mobile">
                        <label class="label-mobile" for="mobile">Téléphone mobile :</label>

                        <input type="tel" id="mobile" name="mobile" placeholder="00-01-01-01-01" autocomplete="off"
                            onChange="isValidFrenchPhoneNumber(value)">
                    </div>

                    <!-- Saisie Email -->

                    <div class="Email">
                        <label class="label-Email" for="Email">EMail :
                        </label>
                        <input type="email" placeholder="name@exemple.com" id="Email" name="Email" size="150"
                            minlength="3" autocomplete="off">

                    </div>

                    <!-- Saisie du pays -->

                    <div class="country">
                        <label class="label-country" for="country">Pays :</label>

                        <select name="country" id="country" autocomplete="off">
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
                            <option value="Aion">01 - Aion</option>
                            <option value="Isère">38 - Isère</option>
                            <option value="Réunion">974 -
                                Réunion</option>
                            <!-- Add more department as needed -->
                        </select>
                    </div>

                </div>
            </fieldset>
            <br />
            <!-- les boutons -->
            <div class="button-form">

                <button type="submit" onclick="nextPage(2)" value="suivant" name="suivant">Suivant</button>

                <button onclick="resetPage(1)">Reset</button>

            </div>


        </form>

    </div>


    <!-- formualire de l'étape  2 -->

    <div id="step2" class="step" style="display:none;">
        <section class="etape2" id="etape2">

            <!-- sauvegarde les données du formulaire etape 1 -->

            <?php

    if ((isset($_POST["previous"])) || !empty($_POST["submit"]) ) {
    var_dump("<br> sauvegarde etape 1");
    $_SESSION["nameTier"] = $_POST["nameTier"] ;
    $_SESSION["address1"] = $_POST["address1"] ;
    $_SESSION["zip"] = $_POST["zip"] ;
    $_SESSION["city"] = $_POST["city"] ;
    $_SESSION["phone"] = $_POST["phone"] ;
    $_SESSION["mobile"] = $_POST["mobile"] ;
    $_SESSION["Email"] = $_POST["Email"] ;
    $_SESSION["country"] = $_POST["country"] ;
    $_SESSION["dpt"] = $_POST["dpt"] ;
} 

?>

            <!--  -->
            <form action="#" @csrf method="POST" name="form2">
                <fieldset class="display:inline">
                    <legend> Etape 2 : Entrez les documents</legend>

                    <!-- Upload la pièce d'identité -->
                    <div class="passport">
                        <label class for="passport">Pièce d'identité/Passeport :</label>
                        <input type="file" id="passport" name="passport" placeholder="file1.pdt"
                            accept="application/pdf, image/*" capture="environment" />
                    </div>

                    <!-- Justificatif de facture d'électricité  -->
                    <div class="facture">
                        <label class for="facture">Facture de EDF :</label>
                        <input type="file" id="facture" name="facture" accept="application/pdf, image/*"
                            capture="environment" />
                    </div>

                    <!-- RIB / RIP  -->
                    <div class="rib">
                        <label class="rib" for="rib">RIB/RIP :</label>
                        <input type="file" id="rib" name="rib" accept="application/pdf, image/*"
                            capture="environment" />
                    </div>

                </fieldset>
                <br />
                <!-- les boutons -->
                <div class="button-form">

                    <button onclick="previousPage(1)" value="previous">Précédent</button>
                    <button onclick="nextPage(3)">Suivant</button>
                    <button onclick="home(2)">Revenir à l'étape 1</button>

                    <button onclick="resetPage(2)">Reset</button>

                </div>

            </form>

        </section>
    </div>

    <!-- formualire de l'étape  3 -->
    <div id="step3" class="step" style="display:none;">

        <section class="etape3">


            <?php

// sauvegarde les données du formulaire etape 2
    var_dump("<br> ".$_POST["passport"]);
if (empty($_POST["previous"])) {
    var_dump("<br> ".$_POST["passport"]);
        var_dump("<br> sauvegarde etape 2");

    $_SESSION["passport"] = $_POST["passport"] ;
    $_SESSION["facture"] = $_POST["facture"] ;
    $_SESSION["rib"] = $_POST["rib"] ;

}


?>

            <!--  -->
            <form action="etape4.php" @csrf method="POST" name="form3">
                <fieldset class="display:inline">
                    <legend> Etape 3 : Information du bâtiment</legend>

                    <!-- Information du bâtiment -->
                    <div class="fiscal">
                        <label class="fiscal" for="fiscal">Revenu fiscal :</label>
                        <input type="number" id="fiscal" name="fiscal" min="0" />
                    </div>

                    <!-- Nombre de personne dans le logement -->
                    <div class="nbpersonnes">
                        <label class="nb" for="nbpersonnes">Nombre de personnes:</label>
                        <select name="nbpersonnes" id="nbpersonnes">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <!-- Proprtiétaire ou locataire -->
                    <div class="loc">
                        <label class="loc" for="loc">Statut du résident :</label>
                        <select name="loc" id="loc">
                            <option value="Propriétaire">Propriétaire</option>
                            <option value="Locataire">Locataire</option>

                        </select>
                    </div>

                </fieldset>
                <br />

                <!--  les boutons -->
                <div class="button-form">

                    <button onclick="previousPage(2)" value="previous">Précédent</button>
                    <button onclick="nextPage(4)">Suivant</button>
                    <button onclick="home(3)">Revenir à l'étape 1</button>

                    <button onclick="resetPage(3)">Reset</button>

                </div>

            </form>

        </section>

    </div>

    <!-- formualire de l'étape 4 -->
    <div id="step4" class="step" style="display:none;">
        <section class="etape4">


            <?php

// sauvegarde les données du formulaire etape 3
if (empty($_POST["previous"])) {
        var_dump("<br> sauvegarde etape 3");

    $_SESSION["fiscal"] = $_POST["fiscal"] ;
    $_SESSION["nbpersonnes"] = $_POST["nbpersonnes"] ;
    $_SESSION["loc"] = $_POST["loc"] ;

}


?>

            <form action="etape5.php" @csrf method="POST" namespace="form4">
                <fieldset class="display:inline">
                    <legend> Etape 4 : Choix du chauffe-eau solaire</legend>

                    <!--Produits  -->
                    <div class="product">
                        <label class="product" for="product">Produits Chauffe-eau solaire</label>
                        <select name="product" id="product">

                            <option value>Type de chauffe-eau solaire</option>
                            <option value="200L">200L</option>
                            <option value="300L">300L</option>

                        </select>
                    </div>

                </fieldset>
                <br />
                <!-- les boutons -->
                <div class="button-form">

                    <button onclick="previousPage(3)" value="previous">Précédent</button>
                    <button onclick="nextPage(5)">Suivant</button>
                    <button onclick="home(4)">Revenir à l'étape 1</button>

                    <button onclick="resetPage(4)">Reset</button>

                </div>
            </form>



        </section>

    </div>


    <!-- formualire de l'étape  5 -->
    <div id="step5" class="step" style="display:none;">
        <div>
            <h1 class="recap">
                Etape 5 : Récapitulatif

                <script>
                window.addEventListener("load", function() {
                    console.log(
                        "Cette fonction est exécutée une fois quand la page est chargée.",
                    );
                });
                </script>


            </h1>
            <div>

                <?php
// sauvegarde les données du formulaire etape 4

$_SESSION["product"] = $_POST["product"];

?>

                <form action="validation.php" @csrf methode="POST" name="validation">

                    <h2> Les données saisies</h2>
                    <?php 

/*  affiche les informations du  Tier
 * saisie des différentes
 * étapes précédentes
 * 
*/
            
        echo "<br> Nom du tier :  ".$_SESSION["nameTier"];        
        echo "<br> Addresse :  ".$_SESSION['address1'] ;
        echo "<br> Code postal :  ".$_SESSION['zip'];
        echo "<br> Ville :  ".$_SESSION['city'] ;
        echo "<br> Telephone :  ".$_SESSION['phone'];
        echo "<br> Mobile :  ".$_SESSION['mobile'] ;
        echo "<br> EMail :  ".$_SESSION['Email'] ;
        echo "<br> Pays :  ".$_SESSION['country'] ;
        echo "<br> Departement/Canton :  ".$_SESSION['dpt'] ;
        echo "<br> Pièce d'identité / Passeport :  ".$_SESSION['passport'] ;
        echo "<br> Facture :  ".$_SESSION['facture'] ;
        echo "<br> Rib/Rip :  ".$_SESSION['rib'] ;
        echo "<br> Revenu fiscal :  ".$_SESSION['fiscal'] ;
        echo "<br> Nombre de personnes :  ".$_SESSION['nbpersonnes'] ;
        echo "<br> Locataire/Propriétaire :  ".$_SESSION['loc'] ;
        echo "<br> Produit selectionné :  ".$_SESSION['product'] ;

        
        
        ?>
                    <br />
                    <br />
                    <!-- les boutons -->
                    <div class="button-form">

                        <button onclick="previousPage(4)" value="previous">Précédent</button>
                        <button onclick="home(5)">Revenir à l'étape 1</button>

                        <button onclick="resetPage(5)">Reset</button>
                        <button onclick="validerForm()">Reset</button>


                    </div>
                </form>


            </div>



        </div>