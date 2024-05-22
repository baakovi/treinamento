<?php

    $output = "Resultado aqui!";

    if (isset($_GET) && $_SERVER["REQUEST_METHOD"] == "GET") {
        $genderValue = $_GET['gender'];
        $ageValue = (int)$_GET['age'];
        $distanceMeter = isset($_GET['meters']) ? (float)$_GET['meters'] : null;

        if ($distanceMeter) {
            $vo2max = ($distanceMeter - 504.1) / 44.9;
            $result = number_format($vo2max, 2);
        }
        else {
            echo "Por favor, insira uma distância";
            exit;
        }

        $output = "{$result}, distância: {$distanceMeter}m";

        function classify($ageValue, $distanceMeter, $genderValue) {

            // Variáveis de resposta
            $great = "Ótimo rendimento, parabéns!";
            $good = "Bom rendimento, continue assim!";
            $regular = "Rendimento regular, dá para melhorar!";
            $bad = "Rendimento ruim, algo está errado.";
            $terrible = "Rendimento péssimo, revise suas rotinas!";
            $errorAge = "Idade muito abaixo do mínimo";

            if ($genderValue == 'male') {
                if ($ageValue >= 13 && $ageValue <= 14) {
                    // Ótimo
                    if ($distanceMeter >= 2100) return $great;

                    // Bom
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 2099) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1699) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1599) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1500) return $terrible;
                }

                elseif ($ageValue >= 15 && $ageValue <= 16) {
                    // Ótimo
                    if ($distanceMeter > 2800) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2500 && $distanceMeter <= 2800) return $good;

                    // Regular
                    elseif ($distanceMeter >= 2300 && $distanceMeter <= 2499) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 2200 && $distanceMeter <= 2299) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 2200) return $terrible;
                }

                elseif ($ageValue >= 17 && $ageValue <= 20) {
                    // Ótimo
                    if ($distanceMeter > 3000) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2700 && $distanceMeter <= 3000) return $good;

                    // Regular
                    elseif ($distanceMeter >= 2500 && $distanceMeter <= 2699) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 2300 && $distanceMeter <= 2499) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 2300) return $terrible;
                }

                elseif ($ageValue > 20 && $ageValue <= 29) {
                    // Ótimo
                    if ($distanceMeter > 2800) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2400 && $distanceMeter <= 2800) return $good;

                    // Regular
                    elseif ($distanceMeter >= 2200 && $distanceMeter <= 2399) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 2199) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1600) return $terrible;
                }

                elseif ($ageValue >= 30 && $ageValue <= 39) {
                    // Ótimo
                    if ($distanceMeter > 2700) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2300 && $distanceMeter < 2700) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1900 && $distanceMeter <= 2299) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1899) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1500) return $terrible;
                }

                elseif ($ageValue >= 40 && $ageValue <= 49) {
                    // Ótimo
                    if ($distanceMeter > 2500) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2100 && $distanceMeter <= 2500) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1700 && $distanceMeter < 2099) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1400 && $distanceMeter <= 1699) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1400) return $terrible;
                }

                elseif ($ageValue >= 50) {
                    // Ótimo
                    if ($distanceMeter > 2400) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2000 && $distanceMeter <= 2400) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1999) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1300 && $distanceMeter <= 1599) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1300) return $terrible;
                }

                else {
                    return $errorAge;
                }
            }

            elseif ($genderValue == 'female') {
                if ($ageValue >= 13 && $ageValue <= 14) {
                    // Ótimo
                    if ($distanceMeter > 2000) return $great;

                    // Bom
                    elseif ($distanceMeter >= 1900 && $distanceMeter <= 2000) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1899) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1599) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1500) return $terrible;
                }

                elseif ($ageValue >= 15 && $ageValue <= 16) {
                    // Ótimo
                    if ($distanceMeter > 2100) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2000 && $distanceMeter <= 2100) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 1999) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1699) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1600) return $terrible;
                }

                elseif ($ageValue >= 17 && $ageValue <= 20) {
                    // Ótimo
                    if ($distanceMeter > 2300) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2100 && $distanceMeter <= 2300) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1800 && $distanceMeter <= 2099) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 1799) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1700) return $terrible;
                }

                elseif ($ageValue > 20 && $ageValue <= 29) {
                    // Ótimo
                    if ($distanceMeter > 2700) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2200 && $distanceMeter <= 2700) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1800 && $distanceMeter <= 2199) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1799) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1500) return $terrible;
                }

                elseif ($ageValue >= 30 && $ageValue <= 39) {
                    // Ótimo
                    if ($distanceMeter > 2500) return $great;

                    // Bom
                    elseif ($distanceMeter >= 2000 && $distanceMeter <= 2500) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 1999) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1400 && $distanceMeter <= 1699) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1400) return $terrible;
                }

                elseif ($ageValue >= 40 && $ageValue <= 49) {
                    // Ótimo
                    if ($distanceMeter > 2300) return $great;

                    // Bom
                    elseif ($distanceMeter >= 1900 && $distanceMeter <= 2300) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1899) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1200 && $distanceMeter <= 1499) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1200) return $terrible;
                }

                elseif ($ageValue >= 50) {
                    // Ótimo
                    if ($distanceMeter > 2200) return $great;

                    // Bom
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 2200) return $good;

                    // Regular
                    elseif ($distanceMeter >= 1400 && $distanceMeter <= 1699) return $regular;

                    // Ruim
                    elseif ($distanceMeter >= 1100 && $distanceMeter <= 1399) return $bad;

                    // Péssimo
                    elseif ($distanceMeter < 1100) return $terrible;
                }

                else {
                    return $errorAge;
                }
            }

            else {
                return "Por favor, escolha um gênero";
            }

        }

        $category = classify($ageValue, $distanceMeter, $genderValue);

        $resultOutput = [
            'resultVO2' => $output,
            'resultRend' => $category
        ];

        echo json_encode($resultOutput);
    }

?>