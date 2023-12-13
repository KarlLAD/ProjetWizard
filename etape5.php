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

            recapitulatif();
            </script>



        </h1>



        <button class="buttonPage" type="submit" onclick="prevent(5);">Précédent </button>

        <button class="buttonPage" type="submit" onclick="reset();">Début </button>


    </div>