<?php

$sal = 700;
$porcentagem = 0;

if($sal <= 280){
    $porcentagem= 0.2;
}
if($sal > 280 && $sal <= 700){
    $porcentagem = 0.15;
}
if($sal >700 && $sal <= 1500){
    $porcentagem = 0.10;
}
if($sal > 1500){
   $porcentagem = 0.05;
}
$aumento = $sal* $porcentagem;
$salfinal = $sal + $aumento;
$porcentagemAumento = $porcentagem * 100;

echo "o salário antes do reajuste era de : R$ $sal";
echo "<br /> Você tera um aumento de $porcentagemAumento %";
echo "<br /> o Valor de aumento será de R$ $aumento";
echo "<br /> o novo salário, após o aumento sera de R$ $salfinal";

?>