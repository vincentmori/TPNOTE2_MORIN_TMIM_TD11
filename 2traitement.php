<?php

session_start()

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Traitement</title>
</head>

<body>
    <?php
    $numclient = $_POST['numclient'];  
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $siege = $_POST['siege'];
    $statut = $_POST['statut'];

    // Vérification des champs vides
    if (empty($nom) || empty($numclient) || empty($age) || empty($siege) || empty($statut)) {
        if (empty($nom)){
            echo "Veuiller mettre le nom du client <br>";
        }
        if (empty($numclient)){
            echo "Veuiller mettre le numero du client <br>";
        }
        if (empty($age)){
            echo "Veuiller mettre l'age' du client <br>";
        }
        if (empty($siege)){
            echo "Veuiller choisir le siège du client<br>";
        }
        if (empty($statut)){
            echo "Veuiller remplir le statut du client <br>";
        }
    } 
    
    else {
        // Calcul du prix de base

        $rabais = "1";
        if ($age > 0 && $age < 3 ){
            $rabais = "0.5";
        }
        else if ($age > 4 && $age < 5 ){
            $rabais = "0.8";
        }
        else if ($age > 60){
            $rabais = "0.8";
        }


        $SiegePrix = "1";
        if ($siege == "Affaire"){            
            $SiegePrix = "2.2";
        }
        else if ($siege == "Premiere"){            
            $SiegePrix = "3";
        }  

        $prixBase = "550"*$SiegePrix; 
        
        $prixBase = $prixBase*$rabais;

        if ($statut == "Fidélité"){            
            $prixBase = $prixBase*0.975;
        }

        else if ($statut == "VIP"){            
            $prixBase = $prixBase*0.92;
        }

    }

    echo "Numéro de Client : ". $numclient."<br>";
    echo "Nom du Client : ". $nom."<br>";
    echo "Age du Client : ". $age."<br>";
    echo "Type de siège : ". $siege."<br>";
    echo "Statut du client : ". $statut."<br>";
    echo "<h4>Le prix pour le vol AIR France 123 de Paris à Dubai est de : ".$prixBase." Euros</h4>";

    ?>
</body>

</html>