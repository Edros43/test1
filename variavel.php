<?php
$nome = "edros";
echo $nome;
echo '<br>';
echo '<br>';

#variavel obscura. A variavel deve se auto explicar.
$_13;

#(Usuario) é diferente de (usuario)

$Usuario = 'USER1';
$usuario = 'user1';

echo $Usuario;
echo '<br>';
echo '<br>';
echo $usuario;
echo '<br>';
echo '<br>';


# tipos de variaveis

// números inteiros - integer
$variavel = 13;
echo gettype($variavel);
echo '<br>';
echo is_integer($variavel);
echo '<br>';

//números de ponto flutuante - float
$variavel = 12.4564;

//strings (textos)
$variavel = 'Jonas Dias';
$variavel = "Jonas Dias1";
echo is_string($variavel);

//boleanos - bool
$variavel = true;
$variavel = false;
echo is_string($variavel);
echo '<br>';

// arrays
$variavel = array(1, 2, 3, 4, 10.245, 'Jonas', true);
echo is_array($variavel);
echo '<br>';

//objetos
//$variavel = new objeto();

// recursos
//$variavel = mysql_connect('localhost', 'root');

//nulo
$variavel = null;
echo is_null($variavel);
echo '<br>';


// identifica o tipo de variavel
echo gettype($variavel);

//retorna valor 1 ou 0 indicando se a variavel é do tipo indicado
echo is_integer($variavel);


