<?php
    class Fecha{
        private array $mesesDias;

        private array $fechaSplit;
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
        public function comprobar($fecha){
            $this->fechaSplit=explode("-", $fecha);
            $bisiesto=$this->bisiesto();
            $this->mostrarFecha($bisiesto);
        }

        public function bisiesto(){
            if($this->fechaSplit[0]%4==0 && ($this->fechaSplit[0]%100!=0 || $this->fechaSplit[0]%400==0)){
                $this->mesesDias[2]["dias"]= 29;
                return true;
            }
            return false;
        }
        public function mostrarFecha($bisiesto){

            echo $this->fechaSplit[2]." de ".$this->mesesDias[(int)$this->fechaSplit[1]]["mes"]." de ".$this->fechaSplit[0]."<br>";
            if($bisiesto)
                echo 'El año '.$this->fechaSplit[0].' es bisiesto <br>';
            else
                echo 'El año '.$this->fechaSplit[0].' no es bisiesto <br>';
        }
    }
?>
