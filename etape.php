<!-- style -->
<link rel="stylesheet" href="style.css">
<!-- formulaire de saisie -->

<script type="text/javascript" src="/commonjs/function.js"></script>

<?php
session_start();
include("./hero.php");

?>

<div id="wizard">
    <!-- formualire de l'étape 1 -->
    <div id="step1" class="step">
        <form action="#" @csrf method="POST" name="form1">

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
            <div class="button-form">
                <input class="buttonPage" type="submit" name="suivant" value="Suivant" onclick="nextPage(1);">

                <input type="submit" value="reset" name="reset">

            </div>




        </form>

    </div>


    <!-- formualire de l'étape  2 -->

    <div id="step2" class="step" style="display:none;">
        <section class="etape2">

            <!--  -->
            <form action="#" @csrf method="POST" name="form2">
                <fieldset class="display:inline">
                    <legend> Etape 2 : Entrez les documents</legend>

                    <!-- Upload la pièce d'identité -->
                    <div class="passport">
                        <label class for="passport">Pièce d'identité/Passeport :</label>
                        <input type="file" id="passport" name="passport" placeholder="file1.pdt"
                            accept="application/pdf, image/*" capture="environment" />
                    </div>

                    <!-- Justificatif de facture d'électricité  -->
                    <div class="facture">
                        <label class for="facture">Facture de EDF :</label>
                        <input type="file" id="facture" name="facture" accept="application/pdf, image/*"
                            capture="environment" />
                    </div>

                    <!-- RIB / RIP  -->
                    <div class="rib">
                        <label class="rib" for="rib">RIB/RIP :</label>
                        <input type="file" id="rib" name="rib" accept="application/pdf, image/*"
                            capture="environment" />
                    </div>

                </fieldset>
                <br />



                <input class="buttonPage" type="submit" value="prevent" onclick="previousPage(2);">

                <input class="buttonPage" type="submit" value="suivant" name="suivant" onclick="nextPage(2);">

                <input class="buttonPage" type="submit" value="reset" onclick="reset();">

            </form>

        </section>
    </div>

    <!-- formualire de l'étape  3 -->
    <div id="step3" class="step">

    </div>

    <!-- formualire de l'étape 4 -->
    <div id="step4" class="step">


    </div>


    <!-- formualire de l'étape  5 -->
    <div id="step5" class="step">


    </div>



</div>