<!-- formulaire de saisie -->

<body>


    <script type="text/javascript" src="./commonjs/function.js"></script>

    <section class="etape1">

        <!--  -->
        <form action="#" @csrf method="POST">


            <fieldset class="display:inline">
                <legend> Nom du tiers</legend>

                <div class="name-tiers">
                    <label class="label-name" for="name">Nom du tiers :</label>
                    <input type="text" id="name" name="name" size="150" placeholder="nom du tiers">
                </div>

                <!-- Saisie de l'adresse -->

                <div class="adress">
                    <label class="label-adress" for="adress">Adresse :</label>

                    <input type="text" id="adress" name="adress" size="200" placeholder="Street address">
                </div>

                <!-- Saisie de code postal et de la ville -->
                <div class="zip-ville">

                    <!-- Pour le code postal -->
                    <div>
                        <label class="label-zip" for="zip">Code postal :</label>

                        <input type="number" id="zip" name="zip" min="0" placeholder="Code postal">
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
                        <input type="tel" id="phone" name="phone" placeholder="00-00-00-00-00">
                    </div>

                    <div class="mobile">
                        <label class="label-mobile" for="mobile">Téléphone mobile :</label>

                        <input type="tel" id="mobile" name="mobile" placeholder="00-01-01-01-01">
                    </div>

                    <!-- Saisie Email -->

                    <div class="email">
                        <label class="label-email" for="email">EMail :
                        </label>
                        <input type="email" placeholder="name@exemple.com" id="email" name="email" size="150"
                            minlength="3">

                    </div>

                    <!-- Saisie du pays -->

                    <div class="country">
                        <label class="label-country" for="country">Pays :</label>

                        <select name="country" id="country">
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
                            <option value="Ain">01 - Aion</option>
                            <option value="Isère">38 - Isère</option>
                            <option value="Réunion">974 -
                                Réunion</option>
                            <!-- Add more department as needed -->
                        </select>
                    </div>

                </div>
            </fieldset>


        </form>






        <button class="buttonPage" id="#btn-next" type="submit" onclick=" let datas = getDatas1();">Suivant
            test</button>
        <button class="buttonPage" id="#btn-next" type="submit"
            onclick=" let datas = getDatas1(); next(1);">Suivant</button>
        <button class="buttonPage" id="#btn-reset" type="submit" onclick="reset();">Début </button>

        <!-- <button
                                type="button"
                                id="etape1"
                                onclick="etape2.html"
                                class="px-4 py-2 rounded bg-purple-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                Suivant
                            </button> -->






        <!-- getName();  -->

        <!-- <div class="widget">
        <button>A button element</button>

        <input type="submit" value="suivant jquery">

    </div> -->


    </section>