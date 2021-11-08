<?php

function calcule ($a, $operation, $b)
{
    if ($operation == "+")
    {
        return ($a + $b);
    }
    elseif ($operation == "-")
    {
        return ($a - $b);
    }
    elseif ($operation == "*")
    {
        return ($a * $b);
    }
    elseif ($operation == "/")
    {
        return ($a / $b);
    }
    
}
echo calcule (356852.5, "+", 356852.5);


?>