<?php
    class Numero {
        // private int $max;
        // private int $min;
        // public function __construct($numero1, $numero2) {
        //     if($numero1 > $numero2) {
        //         $this->max = $numero1;
        //         $this->min = $numero2;
        //     } else {
        //         $this->max = $numero2;
        //         $this->min = $numero1;
        //     }
        // }

        private function ordenar(&$numero1, &$numero2) {
            if($numero1 < $numero2) {
                $aux = $numero1;
                $numero1 = $numero2;
                $numero2 = $aux;   
            }else {
                $numero1;
                $numero2;
            }
        }

        public function sumar($numero1, $numero2){
            $this->ordenar($numero1, $numero2);
            return $numero1+$numero2;    
        }
        public function restar($numero1, $numero2){
            $this->ordenar($numero1, $numero2);
            return $numero1-$numero2;
        }
        public function multiplicar($numero1, $numero2){
            $this->ordenar($numero1, $numero2);
            return $numero1*$numero2;
        }
        public function dividir($numero1, $numero2){
            $this->ordenar($numero1, $numero2);
            return $numero1/$numero2;
        }

        public function visualizar($resultado, $operacion){
            echo $operacion.' es '.$resultado;
        }
    }
?>