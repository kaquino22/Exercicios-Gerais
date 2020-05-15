<?php

$nota1 = 2;
$nota2 = 6;
$media = ($nota1 + $nota2)/2;
$conceito = "";
$decisaoaluno ="";
if($nota1 <0 || $nota1 > 10 || $nota2 <0 || $nota2 > 10){
    if($nota1 <0 || $nota1 > 10){
    echo "Erro, Nota 1 maior que 10, verifique as notas";

}elseif($nota2 <0 || $nota2 > 10){
    echo "Erro, Nota 2 maior que 10, verifique as notas";
}}

else{

    if($media > 9.0 && $media <= 10.0){
        $conceito = "A";
        $decisaoaluno = "Aprovado";
    }
    elseif($media > 7.5 && $media <= 9.0){
        $conceito = "B";
        $decisaoaluno = "Aprovado";
    }
    elseif($media > 6.0 && $media <= 7.5){
        $conceito = "C";
        $decisaoaluno = "Aprovado";
    }
    elseif($media > 4.0 && $media <= 6.0){
        $conceito = "D";
        $decisaoaluno = "Reprovado";
    }
    elseif($media > 0 && $media <= 4.0){
        $conceito = "E";
        $decisaoaluno = "Reprovado";
    }
        echo "A Primeira Nota do Aluno Foi: 
        $nota1, sua Segunda nota Foi: $nota2, Sua 
        Média foi de $media, o Conceito que essa 
        media corresponde é $conceito, e o Aluno foi $decisaoaluno";   
}


?>