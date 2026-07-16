<?php
function converteArray(array $arr){

    $arrJson = json_encode($arr);
    return $arrJson;
}

$dados = [
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ],
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ],
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ],
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ],
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ],
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ],
    [
        "id" =>1,
        "nome" => "João",
        "cidade" => "CG"
    ],
    [
        "id" =>2,
        "nome" => "Isabela",
        "cidade" => "CG"
    ],
    [
        
        "id" =>3,
        "nome" => "Caio",
        "cidade" => "CG"
    ]  

];

echo '<pre>';
print_r($dados);
echo '</pre>';

// echo converteArray($dados);
echo json_encode($dados);
?>