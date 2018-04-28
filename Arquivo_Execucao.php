<?php
$altura=$_GET['altura'];
$peso=$_GET['peso'];
$nome=$_GET['nome'];
cadastraUsuario($altura,$peso,$nome);
soma($altura,$peso);
function soma($a,$p){
 $soma = ($a + $p);
  Print("Altura e peso: <font color='black'>$soma") ;
 
}
$id=0;
function cadastraUsuario($n,$a,$p){
    $pessoa[$id++] = "Nome: $n\nAltura: $a\nPeso:$p " ;
    while(idP<10){
        if($pessoa[$idP] == null){break;}
        else{
        Print("Altura e peso: <font color='black'>");
        }
        $idP++;
    }    
}

