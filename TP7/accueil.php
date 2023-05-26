<?php

// start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Exercice 2 TD7</title>
    <meta charset="utf-8" />
</head>

<body>
    <h2>Paiement par carte de crédit</h2>
    <form action="traitementPaiement.php" method="post">
        <table>
            <tr>
                <td>Nom du client:</td>
                <td><input type="text" name="client" /></td>
            </tr>
            <tr>
                <td>Montant à payer:</td>
                <td><input type="number" step="0.01" name="amount"> </td>
            </tr>
            <tr>
                <td>Payer par:</td>
                <td>
                    <input type="radio" name="creditCard" value="MasterCard">Mastercard<br>
                    <input type="radio" name="creditCard" value="Visa" checked>Visa<br>
                    <input type="radio" name="creditCard" value="Amex">American Express<br>
                    <input type="radio" name="creditCard" value="Paypal">Paypal<br>
                </td>
            </tr>
            <tr>
                <td>Numéro de carte de crédit:</td>
                <td><input type="number" name="numero"></td>
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