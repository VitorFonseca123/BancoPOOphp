<?php
    class conta{

        private $saldo;
        private $data;
        public function _construct($argSaldo=0, $argData=0){
            $this->saldo = $argSaldo;
            $this->data = $argData;
        }
        public function setData($argDT){
            $this->data=$argDT;
        }
        public function getData(){
            return $this->data;
        }
        public function getSaldo(){
            return $this->saldo;

        }
        public function setSaldo($s){
            $this->saldo=$s;

        }
        public function saque($argS){
            if($argS>0){
                echo "Você sacou: R$".$argS;
            }

            $s2 = ($this->getSaldo())-($argS);
            $this->setSaldo($s2);

        }
        public function deposito($argD){
            if($argD>0){
                echo "</br>Você Depositou: R$".$argD;
            }

            $d2 = ($this->getSaldo()+$argD);
            $this->setSaldo($d2);
        }
         public function transferir($argT){
            if($argT>0){
                echo "Você transferiu: R$".$argT;
            }
            $t2 =($this->getSaldo())-($argT);
            $this->setSaldo($t2);
         }

}
?>
