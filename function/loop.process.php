<?php

    if (isset($_GET) && $_SERVER["REQUEST_METHOD"] == "GET") {
        $genderValue = filter_input(INPUT_GET, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
        $ageValue = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
        $distanceMeter = filter_input(INPUT_GET, 'meters', FILTER_VALIDATE_FLOAT);

        if ($distanceMeter) {
            $vo2max = ($distanceMeter - 504.1) / 44.9;
            $result = number_format($vo2max, 2);
        }
        else {
            echo "Por favor, insira uma distância";
            exit;
        }

        $output = $result;

        function getResultLoop($ageValue, $distanceMeter, $genderValue) {
            $params = [
                "male" => [
                    [13, 14, [2100, 1700, 1600, 1500]],
                    [15, 16, [2800, 2500, 2300, 2200]],
                    [17, 19, [3000, 2700, 2500, 2300]],
                    [20, 29, [2800, 2400, 2200, 1600]],
                    [30, 39, [2700, 2300, 1900, 1500]],
                    [40, 49, [2500, 2100, 1700, 1400]],
                    [50, PHP_INT_MAX, [2400, 2000, 1600, 1300]],
                ],
                "female" => [
                    [13, 14, [2000, 1900, 1600, 1500]],
                    [15, 16, [2100, 2000, 1700, 1600]],
                    [17, 19, [2300, 2100, 1800, 1700]],
                    [20, 29, [2700, 2200, 1800, 1500]],
                    [30, 39, [2500, 2000, 1700, 1400]],
                    [40, 49, [2300, 1900, 1500, 1200]],
                    [50, PHP_INT_MAX, [2200, 1700, 1400, 1100]],
                ]
            ];

            $resultInput = [
                "Ótimo rendimento, parabéns!",
                "Bom rendimento, continue assim!",
                "Rendimento regular, dá para melhorar!",
                "Seu rendimento está ruim, algo está errado.",
                "Rendimento péssimo, revise suas rotinas!"
            ];

            $colorsInput = [
                "#0cca81",
                "#4A90E2",
                "#ECE26D",
                "#F5A623",
                "#e92034"
            ];

            /*
                Cores dos resultados
                ÓTIMO - #0cca81
                BOM - #4A90E2
                REGULAR - #ECE26D
                RUIM - #F5A623
                PÉSSIMO - #e92034
            */
            
            if (!isset($params[$genderValue])) {
                echo "Escolha um gênero.";
            }
            
            foreach ($params[$genderValue] as $grupo) {
                $minAge = $grupo[0];
                $maxAge = $grupo[1];
                $distances = $grupo[2];

                if ($ageValue >= $minAge && $ageValue <= $maxAge) {
                    if ($distanceMeter >= $distances[0]) { 
                        return $resultInput[0];
                        return $colorsInput[0];
                    }

                    elseif ($distanceMeter >= $distances[1]) {
                        return $resultInput[1];
                        return $colorsInput[1];
                    }

                    elseif ($distanceMeter >= $distances[2]) {
                        return $resultInput[2];
                        return $colorsInput[2];
                    }

                    elseif ($distanceMeter >= $distances[3]) {
                        return $resultInput[3];
                        return $colorsInput[3];
                    }

                    else {
                        return $resultInput[4];
                        return $colorsInput[4];
                    }
                }
            }

            echo "Idade muito abaixo do mínimo!";
        }

        $category =
            getResultLoop($ageValue,
                    $distanceMeter,
                    $genderValue);

        $resultOutput = [
            'resultVO2' => $output,
            'resultRend' => $category
        ];

        echo json_encode($resultOutput);

    }
