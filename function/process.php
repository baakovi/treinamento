<?php

    if (isset($_POST) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $genderValue = $_POST['gender'];
        $ageValue = (int)$_POST['age'];
        $distanceMeter = isset($_POST['meters']) ? (float)$_POST['meters'] : null;

        if ($distanceMeter) {
            $vo2max = ($distanceMeter - 504.1) / 44.9;
            $result = number_format($vo2max, 2);
        }
        else {
            echo "Por favor, insira uma distância";
            exit;
        }

        $beforeOutput = "Resultado aqui!";
        $output = "{$result}, distância: {$distanceMeter}m";

        function classify($ageValue, $distanceMeter, $genderValue) {

            if ($genderValue == 'male') {
                if ($ageValue >= 13 && $ageValue <= 14) {
                    // Ótimo
                    if ($distanceMeter >= 2100) return "Resultado ótimo!";

                    // Bom
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 2099) return "Resultado bom!";

                    // Regular
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1699) return "Resultado regular!";

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1599) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1500) return "Resultado péssimo";
                }

                elseif ($ageValue >= 15 && $ageValue <= 16) {
                    // Ótimo
                    if ($distanceMeter > 2800) return "Resultado ótimo!";

                    // Bom
                    elseif ($distanceMeter >= 2500 && $distanceMeter <= 2800) return "Resultado bom!";

                    // Regular
                    elseif ($distanceMeter >= 2300 && $distanceMeter <= 2499) return "Resultado regular!";

                    // Ruim
                    elseif ($distanceMeter >= 2200 && $distanceMeter <= 2299) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 2200) return "Resultado péssimo";
                }

                elseif ($ageValue >= 17 && $ageValue <= 20) {
                    // Ótimo
                    if ($distanceMeter > 3000) return "Resultado ótimo!";

                    // Bom
                    elseif ($distanceMeter >= 2700 && $distanceMeter <= 3000) return "Resultado bom!";

                    // Regular
                    elseif ($distanceMeter >= 2500 && $distanceMeter <= 2699) return "Resultado regular!";

                    // Ruim
                    elseif ($distanceMeter >= 2300 && $distanceMeter <= 2499) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 2300) return "Resultado péssimo";
                }

                elseif ($ageValue > 20 && $ageValue <= 29) {
                    // Ótimo
                    if ($distanceMeter > 2800) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2400 && $distanceMeter <= 2800) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 2200 && $distanceMeter <= 2399) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 2199) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1600) return "Resultado péssimo";
                }

                elseif ($ageValue >= 30 && $ageValue <= 39) {
                    // Ótimo
                    if ($distanceMeter > 2700) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2300 && $distanceMeter < 2700) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1900 && $distanceMeter <= 2299) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1899) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1500) return "Resultado péssimo";
                }

                elseif ($ageValue >= 40 && $ageValue <= 49) {
                    // Ótimo
                    if ($distanceMeter > 2500) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2100 && $distanceMeter <= 2500) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1700 && $distanceMeter < 2099) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1400 && $distanceMeter <= 1699) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1400) return "Resultado péssimo";
                }

                elseif ($ageValue >= 50) {
                    // Ótimo
                    if ($distanceMeter > 2400) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2000 && $distanceMeter <= 2400) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1999) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1300 && $distanceMeter <= 1599) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1300) return "Resultado péssimo";
                }

                else {
                    return "Idade muito abaixo do mínimo";
                }
            }

            elseif ($genderValue == 'female') {
                if ($ageValue >= 13 && $ageValue <= 14) {
                    // Ótimo
                    if ($distanceMeter > 2000) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 1900 && $distanceMeter <= 2000) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1899) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1599) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1500) return "Resultado péssimo";
                }

                elseif ($ageValue >= 15 && $ageValue <= 16) {
                    // Ótimo
                    if ($distanceMeter > 2100) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2000 && $distanceMeter <= 2100) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 1999) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1600 && $distanceMeter <= 1699) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1600) return "Resultado péssimo";
                }

                elseif ($ageValue >= 17 && $ageValue <= 20) {
                    // Ótimo
                    if ($distanceMeter > 2300) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2100 && $distanceMeter <= 2300) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1800 && $distanceMeter <= 2099) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 1799) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1700) return "Resultado péssimo";
                }

                elseif ($ageValue > 20 && $ageValue <= 29) {
                    // Ótimo
                    if ($distanceMeter > 2700) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2200 && $distanceMeter <= 2700) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1800 && $distanceMeter <= 2199) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1799) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1500) return "Resultado péssimo";
                }

                elseif ($ageValue >= 30 && $ageValue <= 39) {
                    // Ótimo
                    if ($distanceMeter > 2500) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 2000 && $distanceMeter <= 2500) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 1999) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1400 && $distanceMeter <= 1699) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1400) return "Resultado péssimo";
                }

                elseif ($ageValue >= 40 && $ageValue <= 49) {
                    // Ótimo
                    if ($distanceMeter > 2300) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 1900 && $distanceMeter <= 2300) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1500 && $distanceMeter <= 1899) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1200 && $distanceMeter <= 1499) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1200) return "Resultado péssimo";
                }

                elseif ($ageValue >= 50) {
                    // Ótimo
                    if ($distanceMeter > 2200) return "Resultado ótimo";

                    // Bom
                    elseif ($distanceMeter >= 1700 && $distanceMeter <= 2200) return "Resultado bom";

                    // Regular
                    elseif ($distanceMeter >= 1400 && $distanceMeter <= 1699) return "Resultado regular";

                    // Ruim
                    elseif ($distanceMeter >= 1100 && $distanceMeter <= 1399) return "Resultado ruim";

                    // Péssimo
                    elseif ($distanceMeter < 1100) return "Resultado péssimo";
                }

                else {
                    return "Idade muito abaixo do mínimo";
                }
            }

            else {
                return "Por favor, escolha um gênero";
            }

        }

        $category = classify($ageValue, $distanceMeter, $genderValue);
        $resultOutput = $category;
    }

?>