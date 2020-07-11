<?php 
    class triangulo{
        private $base;
        private $altura;
        public function _construct($argBase=0, $argAlt=0){
            $this->base = $argBase;
            $this->altura = $argAlt;
        }
        public function getBase(){
            return $this->base;
        }
        public function setBase($ba){
            $this->base=$ba;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($al){
            $this->altura=$al;
        }
        public function area(){
            $area = ($this->base)*($this->altura);
            return $area;
        }
        public function imprime(){
            
            echo "Base: ".$this->base." </br>Altura: ".$this->altura;
            echo "</br>Area: ".$this-> area();
        }
    }
    
?>