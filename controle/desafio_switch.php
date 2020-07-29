<div class="titulo">Desafio Switch</div>

<form action="#" method="post">

    <input type="text" name="param"> <!--Entrada do valor a ser convertido*-->

    <select name="conversao" id="conversao">
        <option value="metro-km">Metro - > KM</option>
        <option value="km-metro">KM - > Metro</option>
        <option value="km-milha">KM -> Milha</option>
        <option value="milha-km">Milha - > KM</option>
    </select>
    <button>Calcula</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
//Minha resposta

$valor = $_POST['param'];
$parametro = $_POST['conversao'];

switch ($parametro) {
    case 'metro-km':
        $res = $valor / 1000;
        echo '<br>';
        echo "$valor Metros equivalem a $res quilômetros!<br>";
        break;
    case 'km-metro':
        $res = $valor * 1000;
        echo '<br>';
        echo "$valor Quilômetros equivalem a $res metros!";
        break;
    case 'km-milha':
        $res = $valor * 0.62137;
        echo '<br>';
        echo "$valor Quilômetros equivalem a $res milhas!";
        break;
    case 'milha-km':
        $res = $valor / 0.62137;
        echo '<br>';
        echo "$valor Milhas equivalem a $res quilômetros!";
        break;
    
    default:
        echo 'Digite um valor para converter!<br>';
}

//Correção do professor


