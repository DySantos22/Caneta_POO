<?php

    class Caneta{

        public string $modelo;
        public float $ponta;
        public string $cor;
        public  $tampado;
        public int $carga;

        public function __construct(){
            $this->setTampado(true);
            $this->setModelo("BIC CRISTALINA");
            $this->setPonta(0.6);
            $this->setCor("Rosa");
            $this->setCarga(100);
        }

        public function tampar(){
            $this->setTampado(true);
        }
        public function destampar(){
            $this->setTampado(false);
        }
        public function modelo($m){
            $this->setModelo($m);
        }
        public function ponta($p){
            $this->setPonta($p);
        }
        public function cor($c){
            $this->setCor($c);
        }
        public function carga($ca){
            $this->setCarga($ca);
        }

        public function status(){
            echo '----------------------------------<br>';
            echo 'Tampada: '.($this->getTampado()?"SIM":"NÃO").'<br>';
            echo 'Caneta de modelo: '.$this->getModelo().'<br>';
            echo 'Ponta: '.$this->getPonta().'<br>';
            echo 'Cor: '.$this->getCor().'<br>';
            echo 'Carga: '.$this->getCarga()."%.<br>";
        }
        /* getters e setters */

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
        public function getCor(){
            return $this->cor;
        }
        public function setCor($c){
            $this->cor = $c;
        }
        public function getTampado(){
            return $this->tampado;
        }
        public function setTampado($t){
            $this->tampado = $t;
        }
        public function getCarga(){
            return $this->carga;
        }
        public function setCarga($ca){
            $this->carga = $ca;
        }


    }
?>