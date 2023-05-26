<?php
// Définition nom de base
$database = "tpnote2";

// Connexion à  MySQL
$db_handle = mysqli_connect("127.0.0.1:3306", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

// Récupère données formulaire
$ID = isset($_POST['ID']) ? $_POST["ID"] : "";
$Prenom = isset($_POST['Prenom']) ? $_POST["Prenom"] : "";
$Nom = isset($_POST['Nom']) ? $_POST["Nom"] : "";
$DateEmbauche = isset($_POST['DateEmbauche']) ? $_POST["DateEmbauche"] : "";
$ID_Travail = isset($_POST['ID_Travail']) ? $_POST["ID_Travail"] : "";
$Salaire = isset($_POST['Salaire']) ? $_POST["Salaire"] : "";
$ID_Patron = isset($_POST['ID_Patron']) ? $_POST["ID_Patron"] : "";
$ID_Dept = isset($_POST['ID_Dept']) ? $_POST["ID_Dept"] : "";
$Photo = isset($_POST['Photo']) ? $_POST["Photo"] : "";

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
    echo "</tr>";

    while ($data = mysqli_fetch_assoc($result)) {
        // Code a exécuter a chaque itération de boucle
        echo "<tr><td>" . $data["ID"] . "</td>";
        echo "<td>" . $data["Prenom"] . "</td>";
        echo "<td>" . $data["Nom"] . "</td>";
        echo "<td>" . $data["DateEmbauche"] . "</td>";
        echo "<td>" . $data["ID_Travail"] . "</td>";
        echo "<td>" . $data["Salaire"] . "</td>";
        echo "<td>" . $data["ID_Patron"] . "</td>";
        echo "<td>" . $data["ID_Dept"] . "</td></tr>";
        echo "Photo: " . $data["Photo"] . "<br>";
        $image = $data['Photo'];
        echo "<img src='$image' height='80' width='100' />";
    }
    echo "</table>";
} else {
    echo "Erreur : Impossible de se connecter à la base de données.";
}

mysqli_close($db_handle);
