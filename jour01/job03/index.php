<!doctype html>
<head>
    <title>
        tableau
    </title>
</head>
<html>

<?php
$valent = 1;
$valvir = 0.5;
$myBool = true;
$text = "Type";
?>

<table border="5" cellspacing="2" width="100%">
<thead>
    <tr>
        <th>
            Nom
        </th>
        <th>
            Type
        </th>
        <th>
            Valeur
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
            chaînes de caractères
        </td>
        <td>
            string
        </td>
        <td>
            <?php
            echo $text;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            nombre entier
        </td>
        <td>
            int
        </td>
        <td>
            <?php
            echo $valent;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            nombre décimale
        </td>
        <td>
            float
        </td>
        <td>
            <?php
            echo $valvir;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            booléen
        </td>
        <td>
            bool
        </td>
        <td>
            <?php
            echo $myBool;
            ?>
        </td>
    </tr>
</tbody>
</table>
</html>