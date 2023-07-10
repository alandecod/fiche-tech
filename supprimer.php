<?php
    $dbname = "voiture_terminer";
    $host = "127.0.0.1";
    $user = "root";
    $passw = "";

    $basededonne= new PDO("mysql:host=$host;dbname=$dbname","$user","$passw");
?> 
<?php
$supprimer = "DELETE FROM voitures WHERE immatriculation = immatriculation ";

$basededonne->query($supprimer);
?>

<a href="index.php">acceuil</a>;