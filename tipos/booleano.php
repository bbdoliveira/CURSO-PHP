<div class="titulo">Tipo Booleano</div>

<?php

print TRUE;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

echo '<p>Regras para convresão em Booleano:</p>';
echo '<br>' . var_dump((bool) 0); // Apenas o zero é false.
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) " "); // false.
echo '<br>' . var_dump((bool) "00"); // Todo o resto é true
echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump(!!"false");

