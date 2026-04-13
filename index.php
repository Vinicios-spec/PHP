<?php
//Função para converter para Maiúsculo
function maiusculo($texto){
    return strtoupper($texto);
}

echo maiusculo("Programando com Php");
echo '<br>';


//Função para converter para Minusculo
function minusculo($texto){
    return strtolower($texto);
}

echo minusculo("Programando com Php");