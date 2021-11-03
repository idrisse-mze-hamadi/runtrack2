<?php
$val = 2;
$vall = 2;
$q = 0;
while ($val <= 1000)
{
    while ($vall <= $val)
    {
        if ($val%$vall == 0)
        $q++;
        $vall++; 
    }
    if ($q == 1)
    {
        echo "$val<br>";
    }
    $vall = 2;
    $q = 0;
    $val++;
}
?>