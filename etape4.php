    <!-- gestion du style -->
    <link rel="stylesheet" href="style.css">
    <script src="/commonjs/function.js"></script>

    <div>
        <h1 class="produits">Etape 4</h1>

        <section class="etape4">

            <form action="#" method="POST">
                <fieldset class="display:inline">
                    <legend> Etape 3 : Information du bâtiment</legend>

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

            </form>

            <button class="buttonSuivant" type="submit" onclick="prevent();">Précédent </button>
            <button class="buttonSuivant" type="submit" onclick="getName();next(4);">Récapitulatif </button>
            <button class="buttonSuivant" type="submit" onclick="reset();">Début </button>
        </section>

    </div>