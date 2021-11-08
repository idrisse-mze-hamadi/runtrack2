<?php
$pi = array(200, 204, 173, 98, 171, 404, 459);
$i = 0;

while (isset($pi[$i]) == true)
{
    if ($pi[$i]%2 == 0)
    {
    echo "$pi[$i] est paire<br>";
    }
    else
    {
    echo "$pi[$i] est impaire<br>";
    }
    $i++;
}
?>