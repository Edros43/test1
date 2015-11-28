<?php
header('Content-Type: text/html; charset=UTF-8');


echo "Olá mundo";
echo ('Olá mundo');
echo ("Olá mundo");

print 'Olá mundo!!!';

echo '<br>';
echo '<br>';
echo '<hr>';



// usando o ponto como concatenador
$operador = '!!!!';
$numero = 234456575757;

echo 'Olá mundo' . '    '  . $numero  .  $operador;

echo '<br>';
echo '<hr>';


// utilizando aspas duplas, pode-se utilizar $variaveis em meio as strings, elas seram interpretadas pelo php!

echo 'Olá mundo $numero$operador';
echo '<br>';

echo "Olá mundo  $numero$operador";
echo '<br>';
echo '<hr>';

/*  (\n) faz o quebra de linha quando não esta se fazendo uso do html e funciona somente entre aspas duplas""
*/
echo "Olá mundo \n$numero\n$operador";
echo '<br>';
echo "\n" . 'Olá mundo' . "\n" . $numero . "\n" . "$operador";
echo '<br>';


// usando o concatenador, pode-se permanecer com aspas simples.

echo 'Olá mundo' .$numero .$operador;

echo '<br>';
echo '<hr>';

echo '<a href="http://www.gmail.com">gmail<a/>';
echo '<br>';

echo "<a href=\"http://www.gmail.com\">gmail<a/>";
echo '<br>';


echo 'E ele falou: "use \'aspas\' simples"';






