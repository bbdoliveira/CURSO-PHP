<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1); //Não pode usar o '<br>' depois do var_dump
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), ' - Resultado inteiro sem arredondamento!', '<br>'; // Função que fornece um resultado Inteiro sem arredondamentos.
echo round(7 / 4), ' - Resultado Arredondado!', '<br>'; // Funão que arrendonda o resultado.
echo $num = 1.30 * 4, ' Dividendo', '<br>';
echo round($num / 4), '<br>';
echo 7 % 4, ' - Resto da divisão!', '<br>'; // Resto da divisão (Pode ser usado para saber se o numero é Par ou Ímpar)
echo $imp = 7 % 2, ' - Resultado ', $imp, ' é Ímpar!', '<br>'; // Resultado 1 (Ímpar)
echo $par = 8 % 2, ' - Resultado ', $par, ' é Par!', '<br>'; // Resultado 0 (Par)
echo 7 / 0, '<br>'; // Resultado tendendo ao Infinito.
// echo intdiv(7, 0); # erro!
echo 4 ** 2, '<br>'; // Exponenciação 4*4.

// Precedência de Operadors:
// () => ** => / * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4,'<br>';
echo 2 + 3 * 4 ** 2,'<br>';
echo ((2 + 3) * 4) ** 2;