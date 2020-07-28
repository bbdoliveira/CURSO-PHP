<div class="titulo">Operdaor Ternário</div>

<?php
$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de Idade';
}

echo "$status<br>";

//Operador ternário

/*Faz uma atribuição a uma variável segundo a expressão seja veradeira ou falsa

variável = expressão ? Se for verdadeira 'faz isso' : 'Ou isso aqui';*/

$idade = 17;

$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de idade';
echo "$status<br>";

//Colocando vários operadores ternários dentro um do outro.
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de Idade' : 'Menor de idade';

