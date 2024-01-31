<script type="text/javascript" src="/commonjs/main.js"></script>

<?php
//  créer une variable de session pour mémoriser les différentes étapes du formulaire
session_start();
error_reporting(1);


// déclaration des variables 

$_SESSION['nameTier'] =  "Tatiana";
$_SESSION['address1'] =  "Jambette";
$_SESSION['zip'] =  "97200";
$_SESSION['city'] =  "LAMENTIN";
$_SESSION['phone'] =  "";
$_SESSION['mobile'] =  "";
$_SESSION['Email'] =  "test@test.com";
$_SESSION['country'] =  "Venus";
$_SESSION['dpt'] =  "canaries";
$_SESSION['passport'] =  "file1.pdf";
$_SESSION['facture'] =  "file2.pdf";
$_SESSION['rib'] =  "file3.pdf";
$_SESSION['fiscal'] =  "1362516";
$_SESSION['nbpersonnes'] =  1;
$_SESSION['loc'] =  "propriétaire";
$_SESSION['product'] =  "100L";


// Différentes étapes du formulaire
        include("./common/header.php");
        include("./common/menu.php");
        
        include("./etape.php");


        include("./common/footer.php");
        ?>