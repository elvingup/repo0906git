<?php 

    $alunos = [
        [
            "nome" => "Diego Bracellos",
            "turma" => "PHP 1",
            "periodo" => "Noturno",
            "modo" => "Online",
            "notas" => [
                10,
                7.5,
                8
            ]
        ] ,
        [
            "nome" => "Sergio Arrazao",
            "turma" => "PHP 2",
            "periodo" => "Vespertino",
            "modo" => "Online",
            "notas" => [10, 9, 7.8]
        ] ,
        [
            "nome" => "Bruno Lopes",
            "turma" => "PHP 3",
            "periodo" => "Matutino",
            "modo" => "Online",
            "notas" => [9, 10, 8.5]
        ]
    ] ;

    for($i=0; $i < count($alunos); $i++){
        $totalNotas = count($alunos[$i]["notas"]);
        $media = 0;
        $somaNotas = 0;

        for($a = 0; $a < $totalNotas; $a++){
            $somaNotas = $somaNotas + $alunos[$i]["notas"][$a];
        }

        $media = $somaNotas / $totalNotas;

        echo "Aluno: {$alunos[$i]['nome']} | Turma: 1alunos[1i]['turma']} | Periodo: {$alunos[$i]['periodo']} | Modo: {$alunos[$i]['modo']} | Media: {$media} \n" ;

    }

    $numero = readline("Digite um numero: ");
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;
    echo "O antecessor de {$numero} é {$antecessor} e o sucessor é {$sucessor}";

    $diasSemana = [
        "Domingo",
        "Segunda" ,
        "Terça",
        "Quarta",
        "Quinta",
        "Sexta",
        "Sábado"
    ] ;

    foreach($diasSemana as $chave => $dia){
        $chave = $chave + 1;
        echo "{$chave} => {$dia} \n";
    }

    for($i=0; $i<7; $i++){
        $chave = $i + 1;
        echo "{$chave} => {$diaSemana[$i]}";
    }

    $carros = [
        [
            "modelo" => "Gol",
            "marca" => "VW",
            "ano" => 2020,
            "informacoes" => [
                "placa" => "BCB-7255",
                "renavam" => "12345678901",
                "valor" => 50500
            ],
            "opcionais" => [
                "motorizacao" => [
                    "combustivel" => "flex",
                    "potencia" => [
                        "gasolina" => "75hp",
                        "alcool" => "78hp"
                    ]
                ] ,
                "seguranca" => [
                    "airbag" => true,
                    "abs" => true,
                    "blindado" => false,
                    "cinto" => "5 pontas"
                ] ,
                "transmissao" => "Manual",
                "conforto" => [
                    "somAmbiente" => true,
                    "arCondicionado" => false,
                    "couro" => true,
                    "piloto" => true
                ]
            ]
        ]
    ];

    echo "
    ESCOLHA UMA OPÇÃO
    + ADIÇÃO
    - SUBTRAÇÃO
    / DIVISÃO
    * MULTIPLICAÇÃO
    ";

    $n1 = readline("digite um numero: ");
    $operador = readline("escolha uma operação");
    $n2 = readline("digite um numero: ");

    switch($operador){
        case "+":
            echo $n1." ".$operador." ".$n2." = ".($n1 + $n2);
        break;
        case "-":
            echo $n1." ".$operador." ".$n2." = ".($n1 - $n2);
        break;
        case "/":
            echo $n1." ".$operador." ".$n2." = ".($n1 / $n2);
        break;
        case "*":
            echo $n1." ".$operador." ".$n2." = ".($n1 * $n2);
        break;
        default: 
            echo "Operador inválido";
        break;
    }

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

    // if ternario
    echo (4 % 2 ==0) ? 'par' : 'impar';

    //switch case
    $dia = date('w');// função date('w') retorna o dia da semana informado pelo calendário do sistema na forma de um número de 0 a 6

    echo $dia."\n";

    switch($dia){
        case 0: //domingo
        case 6: // sábado
            echo "Final de semana";
        break;
        case 1:
        case 2:
        case 3:
        case 4:
            echo "Dia útil";
        break;
        case 5:
            echo "Sextou";
        break;
        
    }

    // data
    $dia;
    $mes;
    switch(date('w')){
        case 0:
            $dia = "Domingo";
        break;
        case 1:
            $dia = "Segunda-Feira";
        break;
        case 2:
            $dia = "Terça-Feira";
        break;
        case 3:
            $dia = "Quarta-Feira";
        break;
        case 4:
            $dia = "Quinta-Feira";
        break;
        case 5:
            $dia = "Sexta-Feira";
        case 6:
            $dia = "Sábado";
        break;
    }

    switch(date('n')){
        case 1:
            $mes = "Janeiro";
        break;
        case 2:
            $mes = "Fevereiro";
        break;
        case 3:
            $mes = "Março";
        break;
        case 4:
            $mes = "Abril";
        break;
        case 5:
            $mes = "Maio";
        break;
        case 6:
            $mes = "Junho";
        break;
        case 7:
            $mes = "Julho";
        break;
        case 8:
            $mes = "Agosto";
        case 9:
            $mes = "Setembro";
        case 10:
            $mes = "Outubro";
        break;
        case 11:
            $mes = "Novembro";
        break;
        case 12:
            $mes = "Dezembro";
        break;
    }

    echo $dia.", ".date('d')." de {$mes} de ".date('Y');

    // do while
    $soma = 0;

    do{
        $parcela = readline("Informe um valor: ");
        $soma = $soma + $parcela;

        echo $soma."\n";
    }while($soma < 1111);

    $v1 = 0;
    $v2 = 0;
    $acao = 'S';

    do{
        $v1 = readline("1º num: ");
        $v2 = readline("2º num: ");
        echo "Resultado: ".($v1 + $v2)."\n";

        $acao = readline("Continuar: S = sim || N = não -> ");

    }while($acao == 'S' || $acao == 's');

    // vetores
    $sul = [
        ['Estado'=>'Paraná', 'Capital'=>'Curitiba'],
        [
            'Estado'=>'Santa Catarina',
            'Capital'=>'Florianópolis'
        ] ,
        [
            'Estado'=>'Rio Grande do Sul',
            'Capital'=>'Porto Alegre'
        ]
    ] ;

    foreach($sul as $estado){

        echo "Estado: {$estado['Estado']}";
        echo " | Capital: {$estado['Capital']} \n";
    }
?>