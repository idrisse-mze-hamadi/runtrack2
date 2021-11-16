<!doctype html>
<head>
    <title>
        
    </title>
</head>
<html>

<?php

$bdd = mysqli_connect ("localhost", "root", "", "jour08");

$req = SELECT * FROM "etudiant";

$q = mysqli_query ( $bdd, $req);

$rslt = mysqli_fetch_all ($q);

mysqli_close ($bdd);

?>

<table border="5" cellspacing="2" width="100%">
<thead>
    <tr>
        <th>
            Prénom
        </th>
        <th>
            Nom
        </th>
        <th>
            Naissance
        </th>
        <th>
            Sexe
        </th>
        <th>
            Email
        </th>
    </tr>
</thead>
<tbody>
    <?php
    for ($i= 0; isset($rslt[$i]); $i++)
    {
        echo "<tr></tr>";
        for ($d = 0; isset($rslt[$i][$d]); $d++)
        {
            echo "<td>"$rslt[$i][$d]"</td>";
        }
    }
    ?>
</tbody>
</table>
</html>