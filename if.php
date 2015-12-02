<?php

header('Content-Type: text/html; charset=UTF-8');

$idade = 17;

if ($idade < 18){
	echo 'você é menor de idade';
}

/* 
O VALOR RETORNADO DE UM OPERADOR É SEMPRE (1 OU 0) VERDADEIRO OU FALSO
==  igualdade
!= desigualdade
> maior que
< memor que
<= menor ou igual a 
>= maior ou aigual a 
!  not  NÂO
*/

echo '<br><hr><br>';

$nacionalidade = 'brasileira';

if($nacionalidade >= 18 && $nacionalidade != 'brasiuleira'){
	echo "Seja bem vido";
} else{
	echo 'Você não tem acesso a isto';
	echo '<br>';
	}
	
	
	/*
	&& e 
	|| ou 
	*/
	
if($nacionalidade >= 18 && $nacionalidade != 'brasiuleira'){
	echo 'Seja bem vido';
}
elseif($idade < 18){
	echo 'Você precisa ter 18 anos ou mais';
	echo '<br>';
}
elseif($nacionalidade == 'brasileira'){
	echo 'Em breve estaremos chegando no Brasil';
	echo '<br>';
}
 else{
	echo 'Você não tem acesso a isto';
	echo '<br>';
	}
	
	echo '<br><hr><br>';
	
	$verdade = FALSE;
	if(!$verdade){
		echo 'Não é verdade';
	}
	
	
	