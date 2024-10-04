<?php
    $num=$_GET['numero'];
    
    /*La funcion parImpar mediante un numero calcula si es par o impar y retorna un booleano*/
    function parImpar($num, &$cuadrado){
        $cuadrado=$num*$num;
        if($num%2==0){
            return true;
        }
        return false;
    }
    
    if(parImpar($num, $cuadrado)){
        header("Location:par.php?numero=$num&cuadrado=$cuadrado");
    }
    else{
        header("Location:impar.php?numero=$num&cuadrado=$cuadrado");
    }
?>