<?php
    class Fecha{
        private array $mesesDias; //Array que establece los meses y los dias.

        private array $fechaSplit; //Array que divide la fecha que el usuario envia.

        private $bisiesto;

        //La funcion constructor estable el array de los meses con los dias de cada mes.
        public function __construct(){
            
            $this->mesesDias = array(
                1 => array("mes" => "Enero","dias" => 31),
                2 => array("mes" => "Febrero","dias" => 28), // o 29 en año bisiesto),
                3 => array("mes" => "Marzo","dias" => 31),
                4 => array("mes" => "Abril","dias" => 30),
                5 => array("mes" => "Mayo","dias" => 31),
                6 => array("mes" => "Junio","dias" => 30),
                7 => array("mes" => "Julio","dias" => 31),
                8 => array("mes" => "Agosto","dias" => 31),
                9 => array("mes" => "Septiembre","dias" => 30),
                10 => array("mes" => "Octubre","dias" => 31),
                11 => array("mes" => "Noviembre","dias" => 30),
                12 => array("mes" => "Diciembre","dias" => 31)
            );
        }

        //Funcion que realiza todas la comprobaciones del programa.
        public function comprobar($fecha){
            $this->fechaSplit=explode("-", $fecha);
            $this->bisiesto=$this->nobisiesto($this->fechaSplit[0]);
        }

        //La funcion bisiesto se establece en "private" porque solo se va a usar en esta clase.
        private function nobisiesto($anio){
            if($anio%4==0 && ($anio%100!=0 || $anio%400==0)){
                $this->mesesDias[2]["dias"]= 29;
                return true;
            }
            return false;
        }

        //Función que muestra la fecha cambiada a formato "dd de mes de aaaa" y especifica si el año es bisiesto.
        public function mostrarFecha(){
            //Hay que forzar el mes como un entero porque al comparar busca una cadena.
            return $this->fechaSplit[2]." de ".$this->mesesDias[(int)$this->fechaSplit[1]]["mes"]." de ".$this->fechaSplit[0]."<br><br>"; 
        }
        
        public function mostrarBisiesto()
        {
            if($this->bisiesto)
            {
                return 'El mes tiene '.$this->mesesDias[$this->fechaSplit[1]]["dias"].' <br><br> El año '.$this->fechaSplit[0].' es bisiesto <br>';
            }
            else
            {
                return 'El mes tiene '.$this->mesesDias[$this->fechaSplit[1]]["dias"].' <br><br> El año '.$this->fechaSplit[0].' no es bisiesto <br>';
            }
        }
    }
?>
