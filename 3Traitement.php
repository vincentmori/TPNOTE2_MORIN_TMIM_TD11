<?php
echo "<meta charset='utf-8'";
echo "<link rel='stylesheet' type='text/css' href='dupondStyle.css'";

$database = 'tpnote2';

$db_handle = mysqli_connect("localhost", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

$choice = isset($_POST["choix"]) ? $_POST["choix"] : "";

echo "<p>";

if (empty($choice)) {
    $choice = 0;
}
$choice = (int)$choice;
$sql = "";

if ($db_found) {
    switch ($choice) {
        case 1:
            echo 1;
            break;
        case 2:
            $sql = "SELECT * FROM membres ORDER BY prenom";
            echo 2;
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
        default:
            $sql = "SELECT * FROM membre";
            break;
    }
} else {
    echo "<br> Database not found";
}

mysqli_close($db_handle);

?>