<div class="titulo">Básico Variáveis</div>

<?php

$numeroA = 50;
echo $numeroA;
echo '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);

echo '<br>';
var_dump($somaDosNumeros);

echo '<br>';
$variavel = 10;
echo ($variavel);

echo '<br>';
$variavel = 'Agora eu sou uma string';
echo ($variavel);

// Nomes de variáveis

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // Embora deva-se evitar usar.
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]); //Variáveis reservadas.

