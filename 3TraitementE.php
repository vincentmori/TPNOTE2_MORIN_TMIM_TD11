<?php
// Définition nom de base 
$database = "tpnote2";

// Connexion à MySQL
$db_handle = mysqli_connect("127.0.0.1:3306", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = "SELECT MIN(Salaire) AS SalaireMin, MAX(Salaire) AS SalaireMax FROM employes"; // Requête pour salaire min et salaire max
    $result = mysqli_query($db_handle, $sql); // Exécute requête

    // Affichage résultats
    if ($row = mysqli_fetch_assoc($result)) {
        echo "Salaire minimum : " . $row['SalaireMin'] . "<br>";
        echo "Salaire maximum : " . $row['SalaireMax'];
    } else {
        echo "Aucun résultat trouvé.";
    }
} else {
    echo "Erreur : Impossible de se connecter à la base de données.";
}

mysqli_close($db_handle);
?>
