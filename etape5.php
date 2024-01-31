    <!-- démarrage de session -->
    <?php
session_start();

// sauvegarde les données du formulaire etape 4

$_SESSION["product"] = $_POST["product"];

?>

    <!-- gestion du style -->
    <link rel="stylesheet" href="style.css">
    <script src="./commonjs/function.js"></script>

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






                <input class="buttonPage" id="#btn-next" type="submit" name="validation" value="validation"
                    onclick="valider();">

                <button class="buttonPage" id="#btn-next" type="submit" name="validation" value="validation"
                    onclick="valider();"> valider </button>

            </form>

        </div>

        <input class="buttonPage" type="submit" value="prevent" onclick="prevent(5);">

        <button class="buttonPage" type="submit" value="home" onclick="home();">Retour à l'étape 1</button>


        <button class="buttonPage" type="submit" value="reset" onclick="reset();">Reset </button>
    </div>