<?php

$cursos = [
    "php" => [
         "nome_curso" => "curso de fundamentos de PHP",
          "versao_ferramenta" => 8.1,
          "carga_horario" => 40,
          "status" => true
    ],
    "Java"=>[
         "nome_curso"=> "curso de fundamento de Java",
         "versão_ferramenta"=> 11.4,
         "carga_horario"=> 30,
         "status"=> true
    ],
    
    "C#"=>[
         "nome_curso"=> "curso de fundamento de C#",
         "versão_ferramenta"=> 5,
         "carga_horario"=> 60,
         "status"=> true
    ], 

    "Java script"=>[
         "nome_curso"=> "curso de fundamento de Java",
         "versão_ferramenta"=> 11.4,
         "carga_horario"=> 30,
         "status"=> false
    ], 
       
 ];


foreach ($curso as $curso)
{
    if($curso['status'] == false){
        continue;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "versao_ferramenta" . $curso['versao_ferramenta'];
    echo "<br>";
    echo "carga_horaria" . $curso['carga_horaria'];
    echo "<br>";
    echo "status" . $curso['status'];
}
