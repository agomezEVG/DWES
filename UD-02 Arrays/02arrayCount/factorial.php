<?php
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