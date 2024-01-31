<!-- démarrage de session -->
<?php
include("./hero.php");
// sauvegarde les données du formulaire etape 1
$var = empty($_POST["prevent"]) ;
echo "<br> prevent : ".$var ;

if (empty($_POST["prevent"])) {
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
<!-- gestion du style -->
<link rel="stylesheet" href="style.css">
<script src="/commonjs/function.js"></script>

<script>
window.addEventListener("load", function() {
    console.log(
        "etape 2"
    );

});
</script>


<div>

    <section class="etape2">

        <!--  -->
        <form action="etape3.php" @csrf method="POST" name="form2">
            <fieldset class="display:inline">
                <legend> Etape 2 : Entrez les documents</legend>

                <!-- Upload la pièce d'identité -->
                <div class="passport">
                    <label class for="passport">Pièce d'identité/Passeport :</label>
                    <input type="file" id="passport" name="passport" placeholder="file1.pdt" accept=".pdf, image/*" />
                </div>

                <!-- Justificatif de facture d'électricité  -->
                <div class="facture">
                    <label class for="facture">Facture de EDF :</label>
                    <input type="file" id="facture" name="facture" accept=".pdf, image/*" />
                </div>

                <!-- RIB / RIP  -->
                <div class="rib">
                    <label class="rib" for="rib">RIB/RIP :</label>
                    <input type="file" id="rib" name="rib" accept=".pdf, image/*" />
                </div>

            </fieldset>
            <br />




            <input class="buttonPage" type="submit" value="reset" onclick="reset();">

            <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="next(2);">

            <input class="buttonPage" type="submit" value="prevent" onclick="prevent(2);">


            <a href="<?php echo $_SERVER['HTTP_REFERER']      ?>">precedent</a>
        </form>

        <?php echo $_SERVER['HTTP_REFERER']  ?>
        <h1>hors de form</h1>
        <input class="buttonPage" type="submit" value="reset" onclick="reset();">

        <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="next(2);">

        <input class="buttonPage" type="submit" value="prevent" onclick="prevent(2);">

        <!-- <button class="buttonPage" type="submit" onclick="prevent(2);">Précédent </button> -->
        <!-- <button class="buttonPage" id="#btn-next" type="submit" name="submit" value="submit"
            onclick="next(2);">Suivant</button> -->

    </section>

</div>