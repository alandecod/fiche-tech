<?php
    $dbname = "voiture_terminer";
    $host = "127.0.0.1";
    $user = "root";
    $passw = "";

    $basededonne= new PDO("mysql:host=$host;dbname=$dbname","$user","$passw");

    $date = $marque = $modele = $immatriculation = $kilometre = $nom = $trav = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $date = $_POST["date"];$marque = $_POST["marque"];$modele = $_POST["modele"];$immatriculation = $_POST["immatriculation"];
        $kilometre = $_POST["kilometre"];
        $nom = $_POST["nom"];$trav = $_POST["trav"]; }
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-sclale=1.0">
        <title>fiche de travaux de vhicule</title>
        <link rel ="stylesheet" href = "style.css">
    </head>
    <body>
        <a href="index.php">acceuil</a>

        <?php $recherche = $basededonne->prepare("SELECT * FROM voitures WHERE marque = ?"); 
        $recherche->execute(array($marque));
    
        while($recuprecherche = $recherche->fetch()){?>
        <table>
            <tr>
                <td>
                    <?php echo $recuprecherche["data"];?>
                    <?php echo $recuprecherche["immatriculation"];}?>
                </td>
            </tr>
        </table>
    </body>
</html>