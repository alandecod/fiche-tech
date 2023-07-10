<?php
    $dbname = "voiture_terminer";
    $host = "127.0.0.1";
    $user = "root";
    $passw = "";
    
    $basededonne= new PDO("mysql:host=$host;dbname=$dbname","$user","$passw");

    $marque=$_POST["marque"];
    $modele=$_POST["modele"];
    $immatriculation=$_POST["immatriculation"];
    $kilometre=$_POST["kilometre"];
    $mecanicien=$_POST["mecanicien"];
    $travaux=$_POST["travaux"];


$maj->query ('UPDATE voitures SET marque ="$marque",modele="$modele",immatriculation= "$immatriculation",kilometre= "$kilometre",
mecanicien="$mecanicien",travaux= "$travaux" WHERE immatricualtion=$immatriculation');
?>
!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-sclale=1.0">
        <title>fiche de travaux de vhicule</title>
        <link rel ="stylesheet" href = "style.css">
    </head>
    <body>        
        </div>
        <form action="modif.php" method="POST">
            <div>
            <label for="date">date:</label>
            </div>
            <br>
            <div>
            <label for="marque">marque:</label>
            <input id="marque" name="marque" type="text" value="<?php echo $marque;?>">
            </div>
            <br>
            <div>
            <label for="modele">modele:</label>
            <input id="modele" name="modele" type="text" value="<?php echo $modele;?>">
            </div>
            <br>
            <div>
            <label for="immatriculation">immatriculation:</label>
            <input id="immat" name="immatriculation" type="text" required value="<?php echo $immatriculation;?>">
            </div>
            <br>
            <div>
            <label for="kilometre">kilometrage:</label>
            <input id="kilometre" name="kilometre" type="number" value="<?php echo $kilometre;?>">
            </div>
            <br>
            <div>
            <label for="nom">nom du mecanicien:</label>
            <input id="nom" name="nom" type="text" value="<?php echo $nom;?>">
            </div>
            <br>
            <div>
            <label for="trav">traveaux efectuer:</label>
            <textarea id="trav" name="trav" value= "<?php echo $trav ;?>"></textarea>
            </div>
            <br>
            <input type="submit" value="valider" class="boutton-env" name="validee">
            <button type="reset" class="boutton-reset">effacer</button>
        </form>
        <?php
        if(isset($_POST["validee"])){
            $insertion = $basededonne->prepare("INSERT INTO voitures(date,marque,modele,immatriculation,kilometre,mecanicien,traveaux)
            VALUES(?,?,?,?,?,?,?)");
        $insertion->execute(array($date,$marque,$modele,$immatriculation,
        $kilometre,$nom,$trav));}
        ?>
    </body>
</html>