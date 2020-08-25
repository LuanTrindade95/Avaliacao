<?php

//variáveis no escopo global
$aux_sequencia = 0;//variável auxiliar utilizada para guardar a sequência
$aux_elemento = 0;//variável auxiliar utilizada para guardar o elemento


function collatz($x,$e)
{	
	global $aux_sequencia;//por ser declarada no escopo global deve ser chamada no escopo local
	global $aux_elemento;

	if($x == 1)
	{
		return $x;
	}elseif($x % 2 == 0)
	{

			if ($x / 2 > $aux_sequencia) //verifica se o número "$x" dividido por dois é maior que o valor guardado na variavel auxiliar
			{
				$aux_sequencia = $x / 2;//variavel auxilar recebe o valor da divisão
				$aux_elemento = $e;
			}

		$resultado = $x / 2;	
		//echo $resultado."->";
		return collatz($resultado, $e);//utiliza recursividade para chamar a função novamente enquanto essa condição for verdadeira
	}else{
			if(($x * 3) + 1 > $aux_sequencia)
			{
				$aux_sequencia = ($x * 3) + 1;
			 	$aux_elemento = $e;
			}
		$resultado = ($x * 3) + 1;
		//echo $resultado."->";
		return collatz($resultado, $e);//utiliza recursividade para chamar a função novamente enquanto essa condição for verdadeira
	}
	
}

 


for ($i=1; $i <= 1000; $i++) 
{ 
	collatz($i, $i);//chama a função "collatz" e passa o valor inicial da sequencia
}

echo $aux_elemento;//imprime o elemneto que gera a maior sequencia dentro do intervalo de 1 -> 1 milhão