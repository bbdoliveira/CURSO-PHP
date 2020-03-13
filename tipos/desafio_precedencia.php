<div class="titulo">Desafio Precedência</div>

<?php
echo '<p>1. Qual o valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // Tende para o infinito

echo '<p>2 . Qual expressão imprime o valor 100?</p>';
echo 'a)', (1 + 2) * 20 - 15; //45
echo ' b)', 4 * 5 ** 2; // 100
echo ' c)', 2 ** 3 ** 4 / 1e25; // 
echo ' d)', 3 + (3 * 8) / 2 - 3; // 12 
echo '<br>';
echo '<br>';
echo 1e25;