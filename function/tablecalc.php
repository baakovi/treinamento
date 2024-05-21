<?php 

    // Inutilizado

    // Tabela para consulta do sistema
    function calcularVO2Max($distancia, $idade, $genero) {
        $vo2max = ($distancia - 504.1) / 44.9;
        return $vo2max;
    }

    function classificarVO2Max($vo2max, $idade) {

        $tabela = [
            '13-14' => [],
            '15-16' => [],
            '17-19' => [],
            '20-29' => [], 
            '30-39' => [],
            '40-49' => [],
            '50+' => []
        ];

        // $a = "Texto";
        // if ($a === "Texto"):
        //     echo "{$a} está correto";
        // else:
        //     echo "{$a} está errado";
        // endif;
    
        if ($idade >= 13 && $idade <= 14) {
            $faixa = '13-14';
        }
        if ($idade >= 15 && $idade <= 16) {
            $faixa = '15-16';
        }
        if ($idade >= 17 && $idade <= 19) {
            $faixa = '17-19';
        }
        if ($idade >= 20 && $idade <= 29) {
            $faixa = '20-29';
        } 
        elseif ($idade >= 30 && $idade <= 39) {
            $faixa = '30-39';
        } 
        elseif ($idade >= 40 && $idade <= 49) {
            $faixa = '40-49';
        } 
        else {
            $faixa = '50+';
        }

        if ($vo2max >= $tabela[$faixa][1]) {
            return 'Ótimo';
        }
        elseif ($vo2max >= $tabela[$faixa][0]) {
            return 'Bom';
        }
        else {
            return 'Ruim';
        }
    }

    $usuarios = [
        ['genero' => 'M', 'idade' => 25, 'distancia' => 2000]
    ];

    foreach ($usuarios as $usuario) {
        $vo2max = calcularVO2Max($usuario['distancia'], $usuario['idade'], $usuario['genero']);
        $classificacao = classificarVO2Max($usuario['distancia'], $usuario['idade'], $usuario['genero']);

        echo "Usuário (Idade: {$usuario['idade']}, Gênero: {$usuario['genero']}, Distância: {$usuario['distancia']}m) <br>";

        echo "VO2 Máximo: " . number_format($vo2max, 2) . " ml/kg\min <br>";

        echo "Classificação: {$classificacao} <br>";
    }

?>