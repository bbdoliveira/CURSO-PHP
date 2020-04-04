<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // ! significa not / Negação Lógica.

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
//Verdadeiro apenas se todas as condições forem satisfeitas.
var_dump(true && true);
//echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
//echo '<br>';
var_dump(false && false);
echo '<br>';
// Segundo operador para (E)
var_dump(true and true);
//echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
//echo '<br>';
var_dump(false and false);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
//Se qualquer uma das condições forem verdadeiras a expressão será verdadeira.
var_dump(true || true);
//echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
//echo '<br>';
var_dump(false || false);
echo '<br>';
var_dump(true OR true);
//echo '<br>';
var_dump(true OR false);
echo '<br>';
var_dump(false OR true);
//echo '<br>';
var_dump(false OR false);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
//So será verdadeiro se apenas uma das condições for satisfeita.
var_dump(true XOR true);
//echo '<br>';
var_dump(true XOR false);
echo '<br>';
var_dump(false XOR true);
//echo '<br>';
var_dump(false XOR false);
echo '<br>';
var_dump(true != true);
//echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
//echo '<br>';
var_dump(false != false);
echo '<br>';

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 60;
$sexo = 'M';
$aposFem = 60;
$aposMas = 65;
$dif = 0;

if ($idade >= 60 && $sexo === 'F') {
    echo "Você tem {$idade} anos, já pode se aposentar!";
} else if ($idade >= 65 && $sexo === 'M') {
    echo "Você tem {$idade} anos, já pode se aposentar!";
} else if ($idade < 60 && $sexo === 'F') {
    $dif = $aposFem - $idade;
    echo "Você tem apenas {$idade}, vai precisar trabalhar mais {$dif} anos!";
} else {
    $dif = $aposMas - $idade;
    echo "Você tem apenas {$idade}, vai precisar trabalhar mais {$dif} anos!";
}

