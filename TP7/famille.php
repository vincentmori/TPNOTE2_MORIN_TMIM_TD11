<?php

$database = "famille";

$db_handle = mysqli_connect("localhost", "root", "");
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = "SELECT * FROM membres"; // Question 4
    $sql = "SELECT * FROM membres ORDER BY Prenom ASC"; // Question 5
    $sql = "SELECT * FROM membres ORDER BY Prenom DESC"; // Question 5
    $sql = "SELECT * FROM membres WHERE DateNaissance < '1960-01-01'"; // Question 6
    $sql = "SELECT * FROM membres WHERE Prenom LIKE 'G%'"; // Question 7
    $sql = "SELECT * FROM membres WHERE Prenom LIKE '%MA%'"; // Question 8
    $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        echo "ID: " . $data["ID"] . "<br>";
        echo "Nom: " . $data["Nom"] . "<br>";
        echo "Prenom: " . $data["Prenom"] . "<br>";
        echo "Statut: " . $data["Statut"] . "<br>";
        echo "DateNaisssance: " . $data["DateNaissance"] . "<br>";
        echo "Photo: " . $data["Photo"] . "<br>";
        $image = $data['Photo'];
        echo "<img src='$image' height='80' width='100' />";
    }

} // end if
else {
    echo "database not found";
}

mysqli_close($db_handle);

?>
