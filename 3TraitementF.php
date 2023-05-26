<?php
// Définition du nom de la base de données
$database = "tpnote2";

// Connexion à la base de données MySQL
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
    $sql = "SELECT AVG(Salaire) AS SalaireMoyen, COUNT(*) AS NombreTotal FROM employes"; // Requête obtenir salaire moy et nombre total employés
    $result = mysqli_query($db_handle, $sql); // Exécute requête

    // Affiche résultats
    if ($row = mysqli_fetch_assoc($result)) {
        echo "Salaire moyen : " . $row['SalaireMoyen'] . "<br>";
        echo "Nombre total d'employés : " . $row['NombreTotal'];
    } else {
        echo "Aucun résultat trouvé.";
    }
} else {
    echo "Erreur : Impossible de se connecter à la base de données.";
}

mysqli_close($db_handle);
?>
