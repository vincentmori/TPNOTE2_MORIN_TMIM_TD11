<?php

session_start()

?>

<!DOCTYPE HTML>
<html>

<head>
    <title> Traitement </title>
</head>

<body>
    <?php
    $database = "client";
    $db_handle = mysqli_connect("localhost", "root", "");
    $db_found = mysqli_select_db($db_handle, $database);
    $client = isset($_POST["client"]) ? $_POST["client"] : "";

    // montant à pauer
    $montant = isset($_POST["amount"]) ? $_POST["amount"] : "";
    if (empty($montant)) {
        $montant = 0.0;
    }

    // si une carte est sélectionnée
    $card = isset($_POST["creditCard"]) ? $_POST["creditCard"] : "";
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : "";

    $_SESSION["client"] = $client;

    // si le bouton est cliqué
    if (isset($_POST['button1'])) {
        if ($db_found) {
            // rechercher ce client dans la BDD
            $sql = "SELECT * FROM client WHERE Nom LIKE '$client' AND CarteCredit = '$card' AND Numero LIKE '$numero'";
            $result = mysqli_query($db_handle, $sql);
            while ($data = mysqli_fetch_assoc($result)) {
                echo "ID: " . $data["ID"] . "<br>";
                echo "Nom: " . $data["Nom"] . "<br>";
                echo "Carte de crédit: " . $data["CarteCredit"] . "<br>";
                echo "Numéro de carte: " . $data["Numero"] . "<br>";
                echo "Solde: " . $data["Solde"] . "<br>";
                $solde = $data["Solde"];
                if ($solde >= $montant) {
                    $_SESSION["statutPaiement"] = "Paiement accepté";
                } else {
                    $_SESSION["statutPaiement"] = "Paiement refusé";
                }
            }
            // echo session (global) variables
            echo "<br> Notre client: " . $_SESSION["client"];
            echo "<br> Statut du paiement: " . $_SESSION["statutPaiement"];
        } else {
            echo "<br> Database not found";
        }
    }
    mysqli_close($db_handle);
    ?>
</body>

</html>