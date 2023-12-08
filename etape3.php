<link rel="stylesheet" href="style.css">
<script src="/commonjs/function.js"></script>

<div>
    <h1 class="Information">Etape 3</h1>

    <section class="etape3">

        <!--  -->
        <form action="#" method="POST">
            <fieldset class="display:inline">
                <legend> Etape 3 : Information du bâtiment</legend>

                <!-- Information du bâtiment -->
                <div class="fiscal">
                    <label class="fiscal" for="fiscal">Revenu fiscal :</label>
                    <input type="number" id="fiscal" name="fiscal" min="0" />
                </div>

                <!-- Nombre de personne dans le logement -->
                <div class="nb">
                    <label class="nb" for="facture">Nombre de personnes:</label>
                    <select name="nb" id="nb">
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

        </form>


        <button class="buttonSuivant" type="submit" onclick="prevent();">Précédent </button>
        <button class="buttonSuivant" type="submit" onclick="next(3);">Suivant </button>
        <button class="buttonSuivant" type="submit" onclick="reset();">Début </button>


    </section>

</div>