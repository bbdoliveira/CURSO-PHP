<div class="titulo">Desafio Op. Lógicos</div>

<!--
    Dois trabalhos -> Terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executados -> TV 32' e Sorvete
    - Se nenhum for executado -> Ficar em casa é mais saudável"
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST['t1'];
echo $_POST['t2'];
echo '<br>';

/*$trabalho1 = $_POST['t1']; //Joga o Post dentro da variavel
$trabalho2 = $_POST['t2']; //Joga o Post dentro da variavel

//echo "$trabalho1";
//echo "$trabalho2";
echo '<br>';

if ($trabalho1 == 1 && $trabalho2 == 1) {
    echo "Vamos ao Shopping comprar um Tv de 50', e tomar sorvete!";
} else if ($trabalho1 == 0 || $trabalho2 === 0) {
    echo "Vamos ao Shopping comprar um Tv de 32', e tomar Suco!";
} else if ($trabalho1 === 0 && $trabalho2 === 0) {
    echo "Vamos ficar em casa, que é mais saudável!";
}
*/

// Resolução professor