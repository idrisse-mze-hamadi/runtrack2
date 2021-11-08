<!doctype html>
<head>
    <title>
        VoyCons
    </title>
</head>
<html>

<?php
$str = "on n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["voyelles" => ["a", "e", "i", "o", "u", "y"], "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "v", "w", "x", "z"]];
$iv = 0;
$ic = 0;
$i = 0;
$co = 0;
$vo = 0;

while (isset($str[$i]) == true)
{
    while (isset($dic["voyelles"][$vo]) == true)
    {
        if ($str[$i] == $dic["voyelles"][$vo])
        $iv++;
        $vo++;
    }
    while (isset($dic["consonnes"][$co]) == true)
    {
        if ($str[$i] == $dic["consonnes"][$co])
        $ic++;
        $co++;
    }
    $i++;
    $vo = 0;
    $co = 0;
}
?>

<table border="5" cellspacing="2" width = "100%">
<thead>
    <tr>
        <th>
            Voyelles
        </th>
        <th>
            Consonnes
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
            <?php
            echo $iv;
            ?>
        </td>
        <td>
            <?php
            echo $ic;
            ?>
        </td>
    </tr>
</tbody>
</table>
</html>
