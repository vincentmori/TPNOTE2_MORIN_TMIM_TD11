<?php
// Définition nom de base
$database = "tpnote2";

// Connexion à  MySQL
$db_handle = mysqli_connect("127.0.0.1:3306", "root", "");
$db_found = mysqli_select_db($db_handle, $database);


if ($db_found) {
    $sql = "SELECT * FROM employes ORDER BY Salaire ASC"; // Requête employés ordre croissant salaire
    $result = mysqli_query($db_handle, $sql); // Exécute requête

    // Affiche résultats
    echo "<table><tr>";
    echo "<th>ID</th>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date d'embauche</th>";
    echo "<th>ID_Travail</th>";
    echo "<th>Salaire</th>";
    echo "<th>ID_Patron</th>";
    echo "<th>ID_Dept</th>";
    echo "<th>Photo</th>";
    echo "</tr>";

    while ($data = mysqli_fetch_assoc($result)) {
        // Code a exécuter a chaque itération de boucle
        if ($data["ID"] != "102") {
            echo "<tr><td>" . $data["ID"] . "</td>";
            echo "<td>" . $data["Prenom"] . "</td>";
            echo "<td>" . $data["Nom"] . "</td>";
            echo "<td>" . $data["DateEmbauche"] . "</td>";
            echo "<td>" . $data["ID_Travail"] . "</td>";
            echo "<td>" . $data["Salaire"] . "</td>";
            echo "<td>" . $data["ID_Patron"] . "</td>";
            echo "<td>" . $data["ID_Dept"] . "</td>";
            $image = $data['Photo'];
            echo "<td><img src='$image' height='80' width='100' /></td>
            </tr>";
        }
    }
    echo "</table>";
} else {
    echo "Erreur : Impossible de se connecter à la base de données.";
}

mysqli_close($db_handle);
