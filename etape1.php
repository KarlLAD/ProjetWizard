<!-- style -->
<link rel="stylesheet" href="style.css">
<!-- formulaire de saisie -->

<script type="text/javascript" src="/commonjs/function.js"></script>





<?php

include("./hero.php");
// valeur par défaut pour $_SESSION

   // header('Location: /etape1.php' );
    // exit;


?>

<section>
    <div>

        <!--  -->
        <form action="etape2.php" @csrf method="POST" name="form1">

            <fieldset class="display:inline">
                <legend> Nom du tiers</legend>

                <div class="name-tiers">
                    <label class="label-name" for="nameTier">Nom du tiers :</label>
                    <input type="text" id="nameTier" name="nameTier" size="150" placeholder="nom du tiers"
                        value="<?php if(isset($_SESSION['nameTier'])) echo $_SESSION['nameTier']; ?>">
                </div>

                <!-- Saisie de l'adresse -->

                <div class="address1">
                    <label class="label-address1" for="address1">Adresse :</label>

                    <input type="text" id="address1" name="address1" size="10000" placeholder="Street address">
                </div>

                <!-- Saisie de code postal et de la ville -->
                <div class="zip-ville">

                    <!-- Pour le code postal -->
                    <div>
                        <label class="label-zip" for="zip">Code postal :</label>

                        <input type="text" id="zip" name="zip" placeholder="Code postal">
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
                        <input type="tel" id="phone" name="phone" placeholder="00-00-00-00-00" autocomplete="off"
                            onChange="isValidFrenchPhoneNumber(value)">

                    </div>

                    <div class="mobile">
                        <label class="label-mobile" for="mobile">Téléphone mobile :</label>

                        <input type="tel" id="mobile" name="mobile" placeholder="00-01-01-01-01" autocomplete="off"
                            onChange="isValidFrenchPhoneNumber(value)">
                    </div>

                    <!-- Saisie Email -->

                    <div class="Email">
                        <label class="label-Email" for="Email">EMail :
                        </label>
                        <input type="email" placeholder="name@exemple.com" id="Email" name="Email" size="150"
                            minlength="3" autocomplete="off">

                    </div>

                    <!-- Saisie du pays -->

                    <div class="country">
                        <label class="label-country" for="country">Pays :</label>

                        <select name="country" id="country" autocomplete="off">
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
                            <option value="Aion">01 - Aion</option>
                            <option value="Isère">38 - Isère</option>
                            <option value="Réunion">974 -
                                Réunion</option>
                            <!-- Add more department as needed -->
                        </select>
                    </div>

                </div>
            </fieldset>
            <br />
            <!-- les boutons -->
            <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="next(1);">

            <input class="buttonPage" id="#btn-reset" type="submit" name="debut" value="debut" onclick="home();">

            <input type="submit" value="reset" name="reset">



            <!-- <input type="submit" value="suivant input" name="suivant" onclick="next(1);"> -->


            <!-- <button class="buttonPage" id="#suivant" type="submit" name="suivant">suivant test
        </button> -->
            <?php echo"<br> avant /form ;". $_SERVER['HTTP_REFERER']  ?>

        </form>




        <?php echo "<br> après /form :".$_SERVER['HTTP_REFERER']  ?>

        <h1> hors form</h1>
        <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="next(1);">

        <input class="buttonPage" id="#btn-reset" type="submit" name="debut" value="debut" onclick="home();">

        <input type="submit" value="reset" name="reset">


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

    </div>
</section>