<?php

$escola = "Nilo";
$curso = ["PHP", "C#", "java"];

$frase = "Faça o curso de " . $currso . " na escola " . $escola;
$string1 = " Faça o curso de {$curso[1]} na escola {$escola}";
$string2 = 'Faça o curso de $curso na escola $escola';

echo $frase;
echo $string1;
echo $string2;