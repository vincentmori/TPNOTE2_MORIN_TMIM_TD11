<?php

// start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Traitement des employees</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Que souhaitez vous faire</h1>
    <form action="familleDupond2.php" method="post">
        <table>
            <tr>
                <td>
                    Votre sélection :
                </td>
                <td>
                    <input type="radio" name="choix" value="1">Afficher tous les membres de la famille<br>
                    <input type="radio" name="choix" value="2">Afficher les membres, classer par prénom<br>
                    <input type="radio" name="choix" value="3">Afficher les membres, classer par prenom décroissant<br>
                    <input type="radio" name="choix" value="4">Afficher les membres nés avant 1960<br>
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