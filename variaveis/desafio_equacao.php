<div class="titulo">Desafio Equação</div>

<?php

//Minha resolução

$num1 = ((6 * (3 + 2)) ** 2) / (3 * 2); //Primeira conta.
$num2 = ((1 - 5) * (2 - 7) / 2) ** 2; // Segunda conta.

$res = (($num1 - $num2) ** 3) / (10 ** 3); //Resultado.

echo "$num1"; //Mostra na tela o resultado da primeira conta.

echo '<br>'; //Serve pra pular uma linha
echo "$num2"; //Mostra na tela o resultado da segunda conta.

echo '<br>'; //Serve pra pular uma linha
echo "$res"; //Mostra na tela o resultado Final.

//Resolução do Professor
echo '<br>';
$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado final é " . $final . ".";