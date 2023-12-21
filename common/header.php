


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Wizard</title>
    <!-- gestion du style -->
    <link rel="stylesheet" href="style.css">
    <!-- style -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- <script src="../App.jsx"></script> -->

    <!-- <script src="/commonjs/function.js"></script> -->

    <script>
    window.addEventListener("load", function() {
        console.log(
            "Cette fonction est exécutée une fois quand la page est chargée.",
        );
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
    $(function() {
        $(".widget button").button();
        $("button").on("click", function(event) {
            event.preventDefault();
        });
    });
    </script>


    <script src="../commonjs/main.js"></script>


    <script src="../commonjs/function.js"></script>
</head>

<body>

    <section class="header">
        <div class="content">
            <h1> Nom du tiers (propect, client, fournisseur)
            </h1>

            <!-- <script>
            window.location.href = function() {
                etapes();
            }
            </script> -->

        </div>

    </section>