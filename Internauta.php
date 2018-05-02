<?php
class Internauta {
   Private $nome="";
   private $sexo;
   private $data;
   Private $peso=0.0;
   Private $altura=0.0;
   private $imc;
   function Internauta($n,$s,$d, $p, $a) {
       $this->nome = $n;
       $this ->sexo = $s;
       $this ->data = $d;
       $this->peso = $p;
       $this->altura = $a;
      
   }
   function setImc(){
       $imc1=($this->peso/($this->altura*$this->altura));
       $this->imc = $imc1;
   }
   function getImc() {
       return $this->imc;
   }
   function getNome() {
       return $this->nome;
   }
   function getPeso() {
       return $this->peso;
   }
   function getAltura() {
       return $this->altura;
   }
   function setNome($nome) {
       $this->nome = $nome;
   }
   function setPeso($peso) {
       $this->peso = $peso;
   }
   function setAltura($altura) {
       $this->altura = $altura;
   }
   

}
