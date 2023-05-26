<?php
// Définition du nom de la base de données
$database = "tpnote2";

// Connexion à la base de données MySQL
$db_handle = mysqli_connect("127.0.0.1:3306", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

// Récupérer les données du formulaire

$ID = isset($_POST['ID']) ? $_POST["ID"] : "";
$Prenom = isset($_POST['Prenom']) ? $_POST["Prenom"] : "";
$Nom = isset($_POST['Nom']) ? $_POST["Nom"] : "";
$DateEmbauche = isset($_POST['DateEmbauche']) ? $_POST["DateEmbauche"] : "";
$ID_Travail = isset($_POST['ID_Travail']) ? $_POST["ID_Travail"] : "";
$Salaire = isset($_POST['Salaire']) ? $_POST["Salaire"] : "";
$ID_Patron = isset($_POST['ID_Patron']) ? $_POST["ID_Patron"] : "";
$ID_Dept = isset($_POST['ID_Dept']) ? $_POST["ID_Dept"] : "";
// Requête d'insertion des données
$sql = "INSERT INTO employes (ID, Prenom, Nom, DateEmbauche, ID_Travail, Salaire, ID_Patron, ID_Dept)
        VALUES ('$ID', '$prenom', '$nom', '$DateEmbauche', '$ID_travail', '$salaire', '$ID_patron', '$ID_dept')";

if ($db_found) {}

// Vérifier la connexion
else {
    echo "Erreur : Impossible de se connecter à la base de données.";
}
mysqli_close($db_handle);


