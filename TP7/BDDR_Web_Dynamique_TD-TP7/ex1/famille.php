<!DOCTYPE html>
<html>

<head>
    <title>Exercice 1 - La Famille Dupond</title>
    <meta charset="utf-8">
    <style type="text/css">
        h1 {
            width: 650px;
            margin: auto;
            text-align: center;
            color: white;
            background-color: #336699;
            padding: 20px;

            margin: 0 auto 20px auto;
            border-radius: 5px;
        }

        #results {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        p {
            text-align: center;
            color: #336699;
            font-weight: 600;
        }

        table {
            width: 680px;
            margin: auto;
        }

        th {
            background-color: #6699CC;
        }

        td {
            background-color: #cccccc;
        }

        tr:hover {
            opacity: 0.5;
        }
    </style>
    <?php
        // Identifier le nom de base de données
        $database = "famille";

        // Connexion à la base de donnée
        // à adapter en fonction de votre ordinateur

        // Création de la connexion à la base de donnée

        // WAMP sur Windows avec MySQL
        $db_handle = mysqli_connect('localhost', 'root', '', $database);
        // WAMP sur Windows avec MySQL
        // $db_handle = mysqli_connect('db', 'root', '', $database, 3307);
        // Mac OS
        // $db_handle = mysqli_connect('localhost', 'root', 'root', $database, 8889);

        $db_found = mysqli_select_db($db_handle, $database);
    ?>
</head>

<body>
    <h1>La famille Dupond</h1>
    <div id="results">
        <?php

        // Si le BDD existe, faire le traitement
        if ($db_found) {
            // A compléter...
        }
        // Si le BDD n'existe pas
        else {
            echo "Database not found";
        }

        // On fermer la connexion à la fin
        mysqli_close($db_handle);
        ?>
    </div>
</body>

</html>