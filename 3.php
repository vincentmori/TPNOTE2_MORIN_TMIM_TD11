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
    <h1>Votre selection :</h1>
    <form action="3TraitementB.php" method="post">
        <table>
            <tr>
                <td>
                    <input type="radio" name="choix" value="1">Supprimer l'employe 102<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="button1" value="Soumettre" />
                </td>
            </tr>
        </table>
    </form>
    <form action="3TraitementC.php" method="post">
        <table>
            <tr>
                <td>
                    <input type="radio" name="choix" value="2">Afficher les employes par ordre croissant de salaire<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="button1" value="Soumettre" />
                </td>
            </tr>
        </table>
    </form>
    <form action="3TraitementE.php" method="post">
        <table>
            <tr>
                <td>
                    <input type="radio" name="choix" value="3">Afficher le salaire maximum et minimum<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="button1" value="Soumettre" />
                </td>
            </tr>
        </table>
    </form>
    <form action="3TraitementF.php" method="post">
        <table>
            <tr>
                <td>
                    <input type="radio" name="choix" value="4">Afficher le salaire moyen et le nombre d'employe<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="button1" value="Soumettre" />
                </td>
            </tr>
        </table>
    </form>
    <form action="3TraitementH.php" method="post">
        <table>
            <tr>
                <td>
                    <input type="radio" name="choix" value="5">Afficher les employes dont le patron a un ID de 100<br>
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