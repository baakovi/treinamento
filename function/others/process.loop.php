<?php

    if (isset($_GET) && $_SERVER["REQUEST_METHOD"] == "GET") {
        $genderValue = $_GET['gender'];
        $ageValue = (int)$_GET['age'];
        $distanceMeter = (float)$_GET['meters'];

        if ($distanceMeter) {
            $vo2max = ($distanceMeter - 504.1) / 44.9;
            $result = number_format($vo2max, 2);
        }
        else {
            echo "Por favor, insira uma distância";
            exit;
        }

        $output = $result;

        function classifyLoop($ageValue, $distanceMeter, $genderValue) {
            $categories = [
                "male" => [
                    [13, 14, [2100, 1700, 1600, 1500]],
                    [15, 16, [2800, 2500, 2300, 2200]],
                    [17, 19, [3000, 2700, 2500, 2300]],
                    [20, 29, [2800, 2400, 2200, 1600]],
                    [30, 39, [2700, 2300, 1900, 1500]],
                    [40, 49, [2500, 2100, 1700, 1400]],
                    [50, PHP_INT_MAX, [2400, 2000, 1600, 1300]]
                ],

                "female" => [
                    [13, 14, [2000, 1900, 1600, 1500]],
                    [15, 16, [2100, 2000, 1700, 1600]],
                    [17, 19, [2300, 2100, 1800, 1700]],
                    [20, 29, [2700, 2200, 1800, 1500]],
                    [30, 39, [2500, 2000, 1700, 1400]],
                    [40, 49, [2300, 1900, 1500, 1200]],
                    [50, PHP_INT_MAX, [2200, 1700, 1400, 1100]]
                ]
            ];

            if (!isset($categories[$genderValue])) {
                return "Por favor, escolha um gênero.";
            }

            foreach ($categories[$genderValue] as $genderAge) {

                if ($ageValue >= $genderAge[0] && $ageValue <= $genderAge[1]) {
                    if ($distanceMeter >= $genderAge[2][0]) return "Ótimo rendimento, parabéns!";

                    elseif ($distanceMeter >= $genderAge[2][1]) return "Bom rendimento, continue assim!";

                    elseif ($distanceMeter >= $genderAge[2][2]) return "Rendimento regular, dá para melhorar!";

                    elseif ($distanceMeter >= $genderAge[2][3]) return "Rendimento ruim, algo está errado.";

                    else return "Rendimento péssimo, revise suas rotinas!";
                }

            }

            return "Idade muito abaixo do mínimo!";
        }

        $category = 
            classifyLoop($ageValue, 
                    $distanceMeter, 
                    $genderValue);

        $resultOutput = [
            'resultVO2' => $output,
            'resultRend' => $category
        ];

        echo json_encode($resultOutput);

    }

?>