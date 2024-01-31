<!-- démarrage de session -->
<?php
session_start();

// sauvegarde les données du formulaire etape 3
if (empty($_POST["prevent"])) {
        var_dump("<br> sauvegarde etape 3");

    $_SESSION["fiscal"] = $_POST["fiscal"] ;
    $_SESSION["nbpersonnes"] = $_POST["nbpersonnes"] ;
    $_SESSION["loc"] = $_POST["loc"] ;

}


?>

<!-- gestion du style -->
<link rel="stylesheet" href="style.css">
<script src="/commonjs/function.js"></script>

<div>

    <section class="etape4">

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





            <button class="buttonPage" id="#btn-next" type="submit" name="submit" value="next"
                onclick="next(4);">Suivant</button>
            <!-- <button class="buttonPage" type="submit" onclick="next(4);">Récapitulatif </button> -->
            <!-- <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="next(4);"> -->
            <button class="buttonPage" type="submit" onclick="reset();">Début </button>
        </form>

        <input class="buttonPage" type="submit" value="prevent" onclick="prevent(4);">

    </section>

</div>