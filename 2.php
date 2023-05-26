<?php

// start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulaire</title><!--Titre du formulaire-->
    <meta charset="utf-8" />
</head>

<body>
    <h2>Achat Ticket d'avion</h2><!--Formulaire ainsi que les différents questions du formulaire-->
    <form action="2traitement.php" method="post">
        <table>
            <tr>
                <td>Numero du client</td>
                <td><input type="number" name="numclient"> </td>
            </tr>
            <tr>
                <td>Nom du client</td>
                <td><input type="text" name="nom" /></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age" /></td>
            </tr>
            <tr>
                <td>Classe de siège</td>
                <td>
                    <input type="radio" name="siege" value="Economie">Economie<br>
                    <input type="radio" name="siege" value="Affaire">Affaire<br>
                    <input type="radio" name="siege" value="Premiere">Premiere<br>
                </td>
            </tr>
            <tr>
                <td>Statut du client</td>
                <td>
                    <input type="radio" name="statut" value="Regulier">Regulier<br>
                    <input type="radio" name="statut" value="Fidelite">Fidelite<br>
                    <input type="radio" name="statut" value="VIP">VIP<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="button1" value="Soumettre" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>