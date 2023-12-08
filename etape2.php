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

        <h1 class="upload">Etape 2</h1>

        <section class="etape2">

            <!--  -->
            <form action="#" method="POST">
                <fieldset class="display:inline">
                    <legend> Etape 2 : Entrez les documents</legend>

                    <!-- Upload la pièce d'identité -->
                    <div class="file-id">
                        <label class for="doc-id">Pièce d'identité:</label>
                        <input type="file" id="doc-id" name="doc-id" accept=".pdf, .png, .jpeg, .bmp" />
                    </div>

                    <!-- Justificatif de facture d'électricité  -->
                    <div class="facture">
                        <label class for="facture">Facture de EDF :</label>
                        <input type="file" id="facture" name="facture" accept=".pdf, .png, .jpeg, .bmp" />
                    </div>

                    <!-- RIB / RIP  -->
                    <div class="rib">
                        <label class="rib" for="rib">RIB/RIP :</label>
                        <input type="file" id="rib" name="rib" accept=".pdf, .png, .jpeg, .bmp" />
                    </div>

                </fieldset>

            </form>

            <button class="buttonSuivant" type="submit" onclick="prevent();">Précédent </button>
            <button class="buttonSuivant" type="submit" onclick="next(2);">Suivant </button>
            <button class="buttonSuivant" type="submit" onclick="reset();">Début </button>



        </section>

    </div>