<?php

    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];

    function factorial($j)
    {   
        $total=1;
        for($i=1;$i<=$j;$i++)
        {
            $total*=$i;
        }
        return $total;
    }
?>