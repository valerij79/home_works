<?php

// 1. Kintamieji ir sąlygos

$vardas='Valerij';
$pavarde = 'Tumkevic';
$bornYear = 1979;
$year = 2023;
echo "Aš esu $vardas $pavarde. Man yra " .$year-$bornYear. " metai (ų).";

echo '<br>';
echo '---------------------';
echo '<br>';

$num = rand(0, 4);
$num2 = rand(0, 4);

if ($num > $num2) {
    echo "<h2>$num:$num2</h2>";
    $sum = $num / $num2;
}
elseif ($num < $num2) {
    echo "<h2>$num2:$num</h2>";
    $sum = $num2 / $num;
}
else {
    echo "<h1>$num:$num2</h1>";
    $sum = $num / $num2;
}

echo round($sum, 2);

echo '<br>';
echo '---------------------';
echo '<br>';

$num = rand(0, 25);
$num2 = rand(0, 25);
$num3 = rand(0, 25);

if ($num > $num2 && $num > $num3) {
    echo "Didžiausias skaičius yra: " . $num;
} elseif ($num2 > $num && $num2 > $num3) {
    echo "Didžiausias skaičius yra: " . $num2;
} else {
  echo "Didžiausias skaičius yra: " . $num3;
}

echo '<br>';
echo '---------------------';
echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ($a + $b > $c) {
    echo 'Trikampį sudaryti galima.';
} elseif ($a + $c > $b) {
    echo 'Trikampį sudaryti galima.';
} elseif ($b + $c > $a) {
    echo 'Trikampį sudaryti galima.';
} else {
    echo 'Trikampio sudaryti negalima.';
}

echo '<br>';
echo '---------------------';
echo '<br>';



$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);

$zeroCount = 0;
$oneCount = 0;
$twoCount = 0;

switch ($a) {
    case 0:
        $zeroCount++;
        break;
    case 1:
        $oneCount++;
        break;
    case 2:
        $twoCount++;
        break;
}

switch ($b) {
    case 0:
        $zeroCount++;
        break;
    case 1:
        $oneCount++;
        break;
    case 2:
        $twoCount++;
        break;
}

switch ($c) {
    case 0:
        $zeroCount++;
        break;
    case 1:
        $oneCount++;
        break;
    case 2:
        $twoCount++;
        break;
}

switch ($d) {
    case 0:
        $zeroCount++;
        break;
    case 1:
        $oneCount++;
        break;
    case 2:
        $twoCount++;
        break;
}

echo 'Nulių kiekis: ' . $zeroCount . '<br>';
echo 'Vienetų kiekis: ' . $oneCount . '<br>';
echo 'Dvejetų kiekis: ' . $twoCount . '<br>';


echo '<br>';
echo '---------------------';
echo '<br>';

$rand_num = rand(1, 6);
echo "<h$rand_num>$rand_num</h$rand_num>";

echo '<br>';
echo '---------------------';
echo '<br>';

$num1 = rand(-10, 10);
$num2 = rand(-10, 10);
$num3 = rand(-10, 10);

echo "<span style='color: " . ($num1 < 0 ? 'green' : ($num1 == 0 ? 'red' : 'blue')) . ";'>$num1</span>". '<br>';
echo "<span style='color: " . ($num2 < 0 ? 'green' : ($num2 == 0 ? 'red' : 'blue')) . ";'>$num2</span>" .'<br>';
echo "<span style='color: " . ($num3 < 0 ? 'green' : ($num3 == 0 ? 'red' : 'blue')) . ";'>$num3</span>" .'<br>';

echo '<br>';
echo '---------------------';
echo '<br>';

$zvakes = rand(5, 3000);
$kaina = $zvakes * 1;
if ($zvakes > 1000 && $zvakes <= 2000) {
    $nuolaida = 0.03;
} elseif ($zvakes > 2000) {
    $nuolaida = 0.04;
} else {
    $nuolaida = 0;
}

if ($nuolaida > 0) {
    $nuolaidaSum = $kaina * $nuolaida;
    $kainaSuNuolaida = $kaina - $nuolaidaSum;
} else {
    $kainaSuNuolaida = $kaina;
}

echo "Pirkta žvakių: $zvakes vnt." . '<br>';
echo "Kaina be nuolaidos: $kaina EUR." . '<br>';
echo "Taikoma nuolaida: " . ($nuolaida * 100) . "%." . '<br>';
echo "Kaina su nuolaida: $kainaSuNuolaida EUR." . '<br>'; 

echo '<br>';
echo '---------------------';
echo '<br>';

$num1 = rand(0, 100);
$num2 = rand(0, 100);
$num3 = rand(0, 100);

// suskaičiuojame vidurkį
$vidurkis = round(($num1 + $num2 + $num3) / 3);

// suskaičiuojame vidurkį atmetus reikšmes mažesnes nei 10 arba didesnes nei 90
$kiekis = 0;
$suma = 0;
foreach ([$num1, $num2, $num3] as $num) {
    if ($num >= 10 && $num <= 90) {
        $suma += $num;
        $kiekis++;
    }
}
if ($kiekis == 0) {
    $galutinisVidurkis = 0;
} else {
    $galutinisVidurkis = round($suma / $kiekis);
}

// spausdiname rezultatus
echo "Vidurkis: $vidurkis" . '<br>';
echo "Vidurkis atmetus netinkamas reikšmes: $galutinisVidurkis";

echo '<br>';
echo '---------------------';
echo '<br>';


// Sugeneruojame laiką
$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

// Spausdiname pradinį laiką
echo 'Pradinis laikas: ' . $valandos . ':' . $minutes . ':' . $sekundes . '<br>';

// Sugeneruojame papildomas sekundes
$papild_sek = rand(0, 300);

// Pridedame papildomas sekundes
$sekundes += $papild_sek;

// Jei sekundžių skaičius viršija 59, turime pridėti papildomas minutes
if ($sekundes > 59) {
    $minutes += floor($sekundes / 60);
    $sekundes %= 60;
}

// Jei minučių skaičius viršija 59, turime pridėti papildomas valandas
if ($minutes > 59) {
    $valandos += floor($minutes / 60);
    $minutes %= 60;
}

// Jei valandų skaičius viršija 23, turime nustatyti naują dieną
if ($valandos > 23) {
    $valandos %= 24;
    echo 'Nauja diena! ';
}

// Spausdiname laiką po papildomų sekundžių
echo 'Laikas su papildomom ' . $papild_sek . ' sekundžių: ' . $valandos . ':' . $minutes . ':' . $sekundes;

echo '<br>';
echo '---------------------';
echo '<br>';

$num1 = rand(1000, 9999);
$num2 = rand(1000, 9999);
$num3 = rand(1000, 9999);
$num4 = rand(1000, 9999);
$num5 = rand(1000, 9999);
$num6 = rand(1000, 9999);

$max_num = $num1;
if ($num2 > $max_num) {
    $max_num = $num2;
}
if ($num3 > $max_num) {
    $max_num = $num3;
}
if ($num4 > $max_num) {
    $max_num = $num4;
}
if ($num5 > $max_num) {
    $max_num = $num5;
}
if ($num6 > $max_num) {
    $max_num = $num6;
}

// echo $max_num . ' ';

if ($num1 != $max_num) {
    echo $num1 . ' ';
}
if ($num2 != $max_num && $num2 != $num1) {
    echo $num2 . ' ';
}
if ($num3 != $max_num && $num3 != $num1 && $num3 != $num2) {
    echo $num3 . ' ';
}
if ($num4 != $max_num && $num4 != $num1 && $num4 != $num2 && $num4 != $num3) {
    echo $num4 . ' ';
}
if ($num5 != $max_num && $num5 != $num1 && $num5 != $num2 && $num5 != $num3 && $num5 != $num4) {
    echo $num5 . ' ';
}
if ($num6 != $max_num && $num6 != $num1 && $num6 != $num2 && $num6 != $num3 && $num6 != $num4 && $num6 != $num5) {
    echo $num6 . ' ';
}

echo '<br>';
echo '---------------------';
echo '<br>';

$val = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);

echo 'Pradinis laikrodis: ' . $val . ' : ' . $min . ' : ' . $sek . '<br>';

$pS = rand(0, 300);                     //papildomos sekundes

echo $pS . '<br>';

$papM = (round(($pS / 60), 0));          //gaunasi papildomu minuciu pridejimui prie laikrodzio
$papS = ($pS - $papM * 60);              //gaunasi papildomu sekundziu pridejimui prie laikrodzio

$tikrosVal = $val;
$tikrosMin = $min;
$tikrosSek = $sek;

if ($sek + $papS <= 59) {
    $tikrosSek = ($sek += $papS);
} elseif ($sek + $papS >= 60) {
    $tikrosSek = ($sek + $papS - 60);
    $tikrosMin = ++$min;
}

if ($min + $papM <= 59) {
    $tikrosMin = ($min += $papM);
} elseif ($min + $papM >= 60) {
    $tikrosMin = ($min + $papM - 60);
    $tikrosVal = ++$val;
}

echo 'Laikrodis, pridejus papildomas sekundes: ' . $tikrosVal . ' : ' . $tikrosMin . ' : ' . $tikrosSek;


echo '<br>';
echo '---------------------';
echo '<br>';

$val = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);

echo 'Pradinis laikrodis: ' . $val . ' : ' . $min . ' : ' . $sek . '<br>';

$pS = rand(0, 300);                     //papildomos sekundes

echo $pS . '<br>';

$papM = (round(($pS / 60), 0));          //gaunasi papildomu minuciu pridejimui prie laikrodzio
$papS = ($pS - $papM * 60);              //gaunasi papildomu sekundziu pridejimui prie laikrodzio

$tikrosVal = &$val;
$tikrosMin = &$min;
$tikrosSek = &$sek;

if ($sek + $papS <= 59) {
    $tikrosSek = ($sek += $papS);
} elseif ($sek + $papS >= 60) {
    $tikrosSek = ($sek + $papS - 60);
    $tikrosMin = ++$min;
}

if ($min + $papM <= 59) {
    $tikrosMin = ($min += $papM);
} elseif ($min + $papM >= 60) {
    $tikrosMin = ($min + $papM - 60);
    $tikrosVal = ++$val;
}

echo 'Laikrodis, pridejus papildomas sekundes: ' . $tikrosVal . ' : ' . $tikrosMin . ' : ' . $tikrosSek;


