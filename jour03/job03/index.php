<?php
$str = "i'm sorry Dave i'm afraid i can't do that";
$voy = "aeiouy";
$s = 0;
$v = 0;

while (isset($str[$s]) == true)
{
    while (isset($voy[$v]) == true)
    {
        if ($str[$s] == $voy[$v])
        echo $str[$s];
        $v++;
    }
    $s++;
    $v = 0;
}
?>