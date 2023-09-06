<?php

$Carros = [

    [
        "modelo" => "Gol",
        "cor" => "Preto",
        "registro" => [
            "placa" => "ABC123",
            "renavam" => "12345678901",
            "proprietario" => [
                [

                "nome" => "Sasha Grey",
                "cpf" => "69241234567"
            ] ,
            [
                "nome" => "Mia Khalifa",
                "cpf" => "69247654321"
            ]
            ]
        ]
    ],
    [
        "modelo" => "Fiesta",
        "cor" => "Verde",
        "registro" => [
            "placa" => "BCA3210",
            "renavam" => "987654321",
            "proprietario" => [
                [

                "nome" => "Audrey Hollander",
                "cpf" => "69245879203"
            ] ,
            [
                "nome" => "Riley Reid",
                "cpf" => "69247208519"
            ]
            ]
        ]
    ] ,
    [
        "modelo" => "Megane",
        "cor" => "Bege",
        "registro" => [
            "placa" => "BGF5874",
            "renavam" => "987523648701",
            "proprietario" => [
                [
                    "nome" => "Gail Bates",
                "cpf" => "692473610059"
                ]
            ]
        ]
    ]
];

$primeiroContador = 0;
$QuantPrimeiroArray = count($Carros);

while($primeiroContador < $QuantPrimeiroArray){
    
    echo "Modelo: {$Carros[$primeiroContador]["modelo"]} | ";
    echo "Cor: {$Carros[$primeiroContador]["cor"]} | ";
    echo "Placa: {$Carros[$primeiroContador]["registro"]["placa"]} | ";
    echo "RENAVAM: {$Carros[$primeiroContador]["registro"]["renavam"]} | ";
    
        $segundoContador = 0;
        $quantSegundoArray = count($Carros[$primeiroContador]["registro"]["proprietario"]);
        while($segundoContador < $quantSegundoArray){
            echo "Proprietario: {$Carros[$primeiroContador]["registro"]["proprietario"][$segundoContador]["nome"]}"." - "."{$Carros[$primeiroContador]["registro"]["proprietario"][$segundoContador]["cpf"]} | ";
            
            $segundoContador++;
        }
        echo "\n";
        $primeiroContador++;
}

?>