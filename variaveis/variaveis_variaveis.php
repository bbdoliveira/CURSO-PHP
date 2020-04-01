<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA'; //Cria uma variavel com conteudo 'valorA'
$$a = 'valorAA'; // Usa o conteudo da variável e cria uma nova recebendo outro valor,
echo "$a {$$a} ${$a} $valorA"; //As três ultimas formas vão imprimir o valor da segunda variável

echo '<br>';
$epa = 'opa!';
$opa = 'vish!';
$vish = 'eita!!!!';
//echo "$epa {$$opa} {$$$epa}"; //Aninhando as variáveis.
echo "Teste {$epa} {$$epa} {$$$epa}";

echo '<br>';
$a = b;
$b = c;
$c = d;

echo "$a {$$a} {$$$a}";

