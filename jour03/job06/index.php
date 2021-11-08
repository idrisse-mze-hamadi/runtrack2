<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$v = 0;
$r = 0;

while (isset($str[$v]) == true)
{
    while (isset($str[$r]) == isset($str[$v]))
    {
        $r--;
        echo ($str[$r]);
    }
    $v++;
    $r = 0;
}
?>