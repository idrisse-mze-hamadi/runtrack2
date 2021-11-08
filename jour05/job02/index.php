<?php

function bonjour ($jour = 1)
{
    if ($jour == true)
    {
        echo "bonjour";
    }
    elseif ($jour == false)
    {
        echo "bonsoir";
    }
}
bonjour (true);
bonjour (false);
?>