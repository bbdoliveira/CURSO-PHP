<div class="titulo">Conversões estranhas</div>

<?php
//echo 'teste';
echo is_int(PHP_INT_MAX), ' - (1 = Sim / 0 = Não)';

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3); //Conversão explícita.
echo '<br>';

//Float para int
echo 'Float para int (Pode ter "casting")!';
echo '<br>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(6.8)); //float para int com arredondamento.
echo '<br>';

//Operações com strings
echo '<p>Strings</p>';
var_dump(3 + "2"); //O + não e concatenação em PHP
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "cinco 5");
echo '<br>';
var_dump(1 + "2+5");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");