<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");// Verificar pq o É com acento esta sendo dois caracteres.
echo '<br>';

// Concatenação
echo "Nós tambem" . ' somos'; // O simbolo da concatençaõ é o ponto ( . )
echo '<br>', "Também aceito", " virgulas"; //O efeito é o mesmo mas virgula não concatena.

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\"; //Várias formas de concatenação.

print("<br>Também existe a função print"); //Com parênteses
print"<br>Também existe a função print"; // Sem parênteses

// Algumas funções

print('<br>' . strtoupper('maximizado')); // Tudo fica maiúsculo
print '<br>' . strtolower('MINIMIZADO');  // Tudo fica minúsculo
print '<br>' . ucfirst('só a primeira letra'); //Deixa apenas a primeira letra maiúscula.
print '<br>' . ucwords('todas as palavras'); // A primeira letra de cada palavra.
print '<br>' . strlen('Quantas letras?') . ' letras'; // Conta a quantidade de letras.
print '<br>' . mb_strlen("Eu também", "utf-8") . ' letras'; // Resolve o problema do acento.
print '<br>' . substr('Só uma parte mesmo', 7, 6); // Seleciona a parte entre os parâmetros, (parte).
print '<br>' . str_replace('isso', 'aquilo', 'Trocar isso é bom!'); // 1º procura por, 2º Troca por, 3º Texto a ser verificado. 

