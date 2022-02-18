<?php

################# Função #####################
#Objetivo: Arquivo funçõesrepetidor
#Autor: lais matos
#Data: 16.02.22
# Versão: 1.0
##############################################


//função de calculo
function operacaoMatematica($valor1,$valor2){

    //declaração de variveis
    $num1= (double) $valor1 ; //multiplicando
    $num2=(double) $valor2 ; //multiplicador
    $total=(double)0;        //resultado
    $varAcumulador=(string)null; //acumulador

     //calculo
    for($cont=0;$cont<=$num2; $cont++) { 
                        
        $total=($num1*$cont);

        //acumulador + saída
        $varAcumulador=$varAcumulador.$num1.'<span> x </span>'.$cont.'<span> = </span>'.$total.'<br>' ;
   
    } 
    //o return é da função  
     return $varAcumulador;
}



?>