<?php
    class Nota{
        private $n1;
        private $n2;
        private $n3;
        private $n4;
        public function __construct($argN1=0,$argN2=0,$argN3=0,$argN4=0){
            $this->n1=$argN1;
            $this->n2=$argN2;
            $this->n3=$argN3;
            $this->n4=$argN4;
        }
        public function getN1(){
            return $this->n1;
        }
        public function getN2(){
            return $this->n2;
        }
        public function getN3(){
            return $this->n3;
        }
        public function getN4(){
            return $this->n4;
        }
        public function setN1($num1){
            $this->n1=$num1;
        }
        public function setN2($num2){
            $this->n2=$num2;
        }
        public function setN3($num3){
            $this->n3=$num3;
        }
        public function setN4($num4){
            $this->n4=$num4;
        }
        public function media(){
            $media = (($this->n1)+($this->n2)+($this->n3)+($this->n4))/4;
            return $media;
        }
        public function imprime(){
            $m = $this->media();
            $mencao="";
            if($m>=9 && $m<=10){
                $mencao = "MB";
            }else if($m<9 && $m>=7){
                $mencao = "B";
            }else if($m<7 && $m>=5){
                $mencao = "R";
            }else if($m<5){
                $mencao = "I";
            }
            echo "Para a média $m a menção é: ".$mencao;
        }
    }
?>
