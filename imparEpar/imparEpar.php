<?php

   /* //declaração de variavel
    $multiplicando=(double)0;
    $multiplicador=(double)0;
    $resultado=(double)0;
    $acumulador=(String)null;

    // botão Calcular
    if(isset($_POST['btncalc'])){      
        
        //atribuição de dados
        $multiplicando=$_POST['txtn1'];
        $multiplicador=$_POST['txtn2'];

        
        if ($_POST['txtn1']=="" || $_POST['txtn2']=="") {
            echo(ERRO_MSG_CAMPO_VAZIO);
        }else{
            
            if (!is_numeric($multiplicando)|| !is_numeric($multiplicador)) {
                echo(ERRO_MSG_CARACTER_INVALIDO);
            }else{
    
                if ($multiplicando==0) {
                    echo(ERRO_MSG_MULTIPLICACAO_ZERO);
                }else{

                    
                   $acumulador= operacaoMatematica($multiplicando,$multiplicador); 
                    
                                       
                }
            }
        } 
   
    }   */


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Impar e Par</title>
    
</head>
<body>
    
<header id="header">
        <label class="logo">SENAI + $PHP</label>
       
        <div id="divMenu">
            <nav id="navMenu">

                <ul id="menuBurguer">
                    <li id="imgMenu">
                        <img src="img/Group 1.png" alt="Menu">

                        <ul id="navUl">
                            <li><a href="../media/media.php">Média</a></li>
                            <li><a href="../calculadora/calculadora_simples.php">Calculadora</a></li>
                            <li><a href="../tabuada/tabuada.php">Tabuada</a></li>
                            <li><a href="imparEpar.php">Pares e Impares</a></li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>        
    </header>

<main>
        <div id="conteudo">
            <div id="titulo">
                Tabuada Impar e Par
            </div>
            
            <div id="form">
                <form name="imparEpar" method="post" action="imparEpar.php">
                        <div id="txtview">
                            <!--TEXT MULTIPLICANDO + SELECT-->
                            <span class="spanText">MultipliCANDO:</span>  
                            <select name="txtn1" id="select_multiplicando"><option value="valor02">valor02</option></select>
                            
                            <!--TEXT MULTIPLICADOR + SELECT-->
                            <span class="spanText">MultipliCADOR:</span>  
                            <select name="txtn2" id="select_multiplicador"><option value="valor 01">valor 01</option></select>
                        </div>

                        <!--BOTÃO-->
                        <div id="container_opcoes">
                         <input id="botao" type="submit" name="btncalc" value ="Calcular" >
                        </div>	
                        
                        <!--DIV RESULTADO IMPAR-->  <!--PASSAR ALTURA - LARGURA - POSICIONAMENTO-->
                        <div id="divImpar">
                            <h3>Impar</h3>
                            <div id="resultadoImpar"> Impares </div>
                            <div id="qtdImpar">Qantidade de n° pares é:</div>
                        </div>

                        <!--DIV RESULTADO PAR-->  <!--PASSAR ALTURA - LARGURA - POSICIONAMENTO-->
                        <div id="divPar"> 
                            <h3>Par</h3>
                            <div id="resultadoPar"> Pares </div>
                            <div id="qtdPar">Qantidade de n° pares é: </div>
                        </div>
                        
                        
                        
                </form>
            </div>
        </div>
</main>    

</body>
</html>