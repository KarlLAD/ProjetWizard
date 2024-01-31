<script type="text/javascript" src="/commonjs/function.js"></script>

<?php

include("accessDB.php");
include("addressTier.php");
include("crud.php");
$datas = [];



// Lister les données de la base de données s'il y a des données

    echo "<br>Lister les données. <br>";
    
    try {
        $sql = "SELECT * FROM `addresstier` ORDER BY nameTier ASC" ;

    // Préparation de la requête
        $resultat = $conn->prepare($sql);

        //récupère tous sous forme de tableau
       $resultat->execute(array());

       $datas = $resultat->fetchAll() ;
        



    //   while ($line = $resultat->fetch()) {
    //     echo "id :".$line['id']." nameTier : " .$line['nameTier']."<br>" ;
        
    //         }

    }   catch (PDOException $e) {
       echo "<br> Pas de données enregistrer : " . $e->getMessage();
    }

   
$conn = null; // Fermer la connexion PDO

echo "<br>type of datas : ".gettype($datas);

foreach ($datas as $data ) {
    
    $id = $data['id'];
    $nameTier = $data['nameTier'] ;
    $create_time = $data['create_time'] ;
    $update_time = $data['update_time'] ;
    



    echo "<br> id :".$id."  nameTier :".$nameTier."  " ;

    echo '<span>'.$create_time.' </span>' ;
?>
<tr>
    <a href="/Models/editionTier/etape1.php" class="edit" onclick="editData($data);">edit</a>

</tr>
<tr>
    <a href="#" class="delete">Supprimer</a>
</tr>


<?php }   ?>