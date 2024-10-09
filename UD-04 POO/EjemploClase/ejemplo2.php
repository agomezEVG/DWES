<?php
    Class Ejemplo{
        private int $dato;
        function metodo1(){
            $this->dato = 14;
        }

        public function getDato()
        {
                return $this->dato;
        }
        
        public function setDato($dato)
        {
                $this->dato = $dato;

                return $this;
        }
    }
?>