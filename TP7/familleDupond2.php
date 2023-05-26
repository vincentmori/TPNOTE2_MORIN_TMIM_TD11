<?php
echo "<meta charset='utf-8'";
echo "<link rel='stylesheet' type='text/css' href='dupondStyle.css'";

$database = 'famille';

$db_handle = mysqli_connect("localhost", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

$choice = isset($_POST["choix"]) ? $_POST["choix"] : "";

if (empty($choice)) {
    $choice = 0;
}
$choice = (int)$choice;
$sql = "";

if ($db_found) {
    switch ($choice) {
        case 1:
            $sql = "SELECT * FROM membres";
            break;
        case 2:
            $sql = "SELECT * FROM membres ORDER BY prenom";
            break;
        case 3:
            $sql = "SELECT * FROM membres ORDER BY prenom DESC";
            break;
        case 4:
            $sql = "SELECT * FROM membres WHERE DateNaissance < '1960-01-01'";
            break;
        case 5:
            $sql = "SELECT * FROM membres WHERE Prenom LIKE 'G%'";
            break;
        case 6:
            $sql = "SELECT * FROM membres WHERE Prenom LIKE '%MA%'";
            break;
        default:
            $sql = "SELECT * FROM membre";
            break;
    }
    echo "<h1>La famille Dupond</h1>";
    echo "<p> Requête: " . $sql . "<br>";
    echo "Résultat: <p>";

    $result = mysqli_query($db_handle, $sql);
    echo "<table>";
    echo "<tr>";
    echo "<th>" . "ID" . "</th>";
    echo "<th>" . "Nom" . "</th>";
    echo "<th>" . "Prenom" . "</th>";
    echo "<th>" . "Statut" . "</th>";
    echo "<th>" . "Date de naissance" . "</th>";
    echo "<th>" . "Photo" . "</th>";
    echo "</tr>";

    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $data["ID"] . "</td>";
        echo "<td>" . $data["Nom"] . "</td>";
        echo "<td>" . $data["Prenom"] . "</td>";
        echo "<td>" . $data["Statut"] . "</td>";
        echo "<td>" . $data["DateNaissance"] . "</td>";
        $image = $data["Photo"];
        echo "<td>" . "<img src='$image' height='60' width='80'>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<br> Database not found";
}

mysqli_close($db_handle);

?>