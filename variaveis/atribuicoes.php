<div class="titulo">Atribuições</div>

<?php
$exemplos = 'Exemplos de ';
$atribuicoes = 'Atribuições';
echo "$exemplos" . "$atribuicoes";
//echo "$atribuicoes";
//echo '<br>';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--; // $numero = $numero - 1;
--$numero; // $numero = $numero - 1;
echo '<br>' . $numero;
$numero++; // $numero = $numero + 1;
++$numero; // $numero = $numero + 1;
echo '<br>' . $numero;
$numero = 20; // Atribuição normal
echo '<br>' . $numero . ' Atribuição Normal';
$numero -= 5; // Atribuição subtrativa
echo '<br>' . $numero . ' Atribuição Subrativa ';
$numero += 5; // Atribuição aditiva
echo '<br>' . $numero . ' Atribuição Aditiva';
$numero *= 10; // Atribuição multiplicativa
echo '<br>' . $numero . ' Atribuição Multiplicativa';
$numero /= 2; // Atribuição divisiva
echo '<br>' . $numero . ' Atribuição Divisiva';
$numero %= 6; // Atribuição módulo.
echo '<br>' . $numero . ' Atribuição de Módulo';
$numero **= 4; // Atribuição potência.
echo '<br>' . $numero . ' Atribuição de Potência';
$numero .= 4; // Atribuição concatenação.
echo '<br>' . $numero . ' Atribuição de Concatenação';

$texto = 'Este é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

// $variavelInexistente = 'valor inexistente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'Valor default'; //caso o valor não exista, seto um valor padrão para a requisição.
echo '<br>' . $valor;