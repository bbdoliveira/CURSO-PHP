<div class="titulo">Operadores Relacionais</div>

<?php
echo ' 1 = 1: ';
var_dump(1 == 1); //true

echo '<br> 1 > 1: ';
var_dump(1 > 1); //false

echo '<br> 1 >= 1: ';
var_dump(1 >= 1); //true

echo '<br> 4 < 23:  ';
var_dump(4 < 23); //true

echo '<br> 1 <= 7: ';
var_dump(1 <= 7); //true

echo '<br> 1 != 1: ';
var_dump(1 != 1); //false

echo '<br> 1 <> 1: ';
var_dump(1 <> 1); //false

echo '<br> 111 == "111": ';
var_dump(111 == '111'); //true

echo '<br> 111 === "111": ';
var_dump(111 === '111'); //false

echo '<br> 111 != "111": ';
var_dump(111 != '111'); //false

echo '<br> 111 !== "111": ';
var_dump(111 !== '111'); //true

echo "<p> Relacionais no If/Else</p><hr>";
$idade = 15;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceria idade = $idade anos!";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3); // 1 positivo
var_dump(50 <=> 50); // 0
var_dump(5 <=> 50); // -1 negativo

echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>

p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>