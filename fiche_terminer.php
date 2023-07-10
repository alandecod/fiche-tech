<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <a href="index.php">acceuil</a>
    </body>
</html>


<?php
    $dbname = "voiture_terminer";
    $host = "127.0.0.1";
    $user = "root";
    $passw = "";
?> 
<DOCTYPE html>
    <html>
        <head>
        <link rel ="stylesheet" href = "style.css">
        </head>
        <body>

        
        <?php
        $basededonne= new PDO("mysql:host=$host;dbname=$dbname","$user","$passw");

        $rech = $basededonne->query("SELECT * FROM voitures");
        ?>
        
           <?php while($table = $rech->fetch()){?>
            <table border="2">
                <tr>
                    <th>date</th>
                    <th>marque</th>
                    <th>modele</th>
                    <th>immatriculation</th>
                    <th>kilometre</th>
                    <th>mecanicien</th>
                    <th>travaux effectuer</th>
                </tr>
                <tr>
                    <td><?php echo $table["date"];?></td>
                    <td><?php echo $table["marque"];?></td>
                    <td><?php echo $table["modele"];?></td>
                    <td><?php echo $table["immatriculation"];?></td>
                    <td><?php echo $table["kilometre"];?></td>
                    <td><?php echo $table["mecanicien"];?></td>
                    <td><?php echo $table["traveaux"];?></td>
                </tr>
            
            </table>
            <?php } ?>
            

        </body>
    </html>