    <!-- gestion du style -->
    <link rel="stylesheet" href="style.css">
    <script src="/commonjs/function.js"></script>

    <div>

        <section class="etape4">

            <form action="#" method="POST">
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

            </form>

            <button class="buttonPage" type="submit" onclick="prevent(4);">Précédent </button>
            <button class="buttonPage" type="submit" onclick="next(4);">Récapitulatif </button>
            <button class="buttonPage" type="submit" onclick="reset();">Début </button>
        </section>

    </div>