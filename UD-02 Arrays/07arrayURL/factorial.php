<?php

    function factorial($num)
    {   
        $total=1;
        for($i=1;$i<=$num;$i++)
        {
            $total*=$i;
        }
        return $total;
    }
?>