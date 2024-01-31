<!-- démarrage de session -->
<?php
session_start();

// sauvegarde les données du formulaire etape 2
    var_dump("<br> ".$_POST["passport"]);
if (empty($_POST["prevent"])) {
    var_dump("<br> ".$_POST["passport"]);
        var_dump("<br> sauvegarde etape 2");

    $_SESSION["passport"] = $_POST["passport"] ;
    $_SESSION["facture"] = $_POST["facture"] ;
    $_SESSION["rib"] = $_POST["rib"] ;

}


?>

<!--  -->
<link rel="stylesheet" href="style.css">
<script src="/commonjs/function.js"></script>

<div>

    <section class="etape3">

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


            <!-- <button class="buttonPage" id="#btn-next" type="submit" name="submit" value="submit"
            onclick="next(3);">Suivant</button> -->
            <!-- <button class="buttonSuivant" type="submit" onclick="next(3);">Suivant </button> -->
            <button class="buttonSuivant" type="submit" onclick="reset();">Début </button>

            <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="next(3);">


        </form>


        <button class="buttonSuivant" type="submit" value="prevent" onclick="prevent(3);">Précédent </button>


    </section>

</div>