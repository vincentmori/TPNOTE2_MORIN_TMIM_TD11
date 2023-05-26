<?php
// Définition base de données
$database = "tpnote2";

// Connexion à MySQL
$db_handle = mysqli_connect("127.0.0.1:3306", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = "SELECT * FROM employes WHERE ID_Patron = 100"; // Requête obtenir employés avec patron ID de 100
    $result = mysqli_query($db_handle, $sql); // Exécute requête

    // Affiche résultats
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['ID'] . "<br>";
            echo "Prénom: " . $row['Prenom'] . "<br>";
            echo "Nom: " . $row['Nom'] . "<br>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }
} else {
    echo "Erreur : Impossible de se connecter à la base de données.";
}

mysqli_close($db_handle);
?>
