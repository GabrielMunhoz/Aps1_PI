<?php
        include 'Internauta.php';
        
	$nome = $_GET['nome'];
        $sexo= $_GET['sexo'];
        $data= $_GET['data'];
        $peso= $_GET['peso'];
        $altura= $_GET['altura'];
        $intern[$i] = new Internauta($nome,$sexo,$data,$peso,$altura);
        echo "[$i] Objetos instaciados";
        print '<a href="Index.php"><input type="button"value="Voltar"></a>';
         Header("Location: Index.php");
        
		
                
        /*$nome = $_GET['nome'];
        $sexo= $_GET['sexo'];
        $data= $_GET['data'];
        $peso= $_GET['peso'];
        $altura= $_GET['altura'];
        $imc=calculaImc($peso,$altura);
        
        function calculaImc($p,$a){
            $imc = $p/($a^2);
         return $imc;   
        }
        echo "Nome: $nome Sexo: $sexo Data de nascimento: $data \n"
                . "seu Imc: $imc e voce esta na categoria: ".getCategoria($imc);         
        
        function getCategoria($i){
            if($i<18.5){
                return "Abaixo do peso";
            }else if($i>=18.5 && $i<=24.9){
                return "Voce esta no Peso";
                }else if($i>=25.0 && $i<=29.9){
                    return "Voce esta acima do Peso";
                }else if($i>=30.0 && $i<=34.9){
                    return "Obesidade Grau I";
                    }else if($i>=35.0 && $i<=39.9){
                        return "Obesidade Grau II";
                    }   
                    return "Obesidade Grau III";
        }*/
          
?>
<a href="Index.php"><input type="button"value="Voltar"></a>
         

    
       
         
