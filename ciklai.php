<link rel="stylesheet" href="index.css">
<?php
// 3. Ciklai

// Naršyklėje nupieškite linija iš 400 “*”. 
// Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
?>

<div class="line">
  ****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************
</div>

<?php

echo '<br>';
echo '---------------------';
echo '<br>';


$stars = str_repeat('*', 400); // sugeneruojame 400 žvaigždžių eilutę
$lines = str_split($stars, 50); // suskaidome eilutę į eilutes, kurios telpa 50 žvaigždžių

foreach ($lines as $line) {
  echo $line . "<br>"; // išspausdiname kiekvieną eilutę atskirai
}

echo '<br>';
echo '---------------------';
echo '<br>';

// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

$count = 0; // kintamasis, skirtas suskaičiuoti skaičius didesnius nei 150

for ($i = 1; $i <= 300; $i++) {
  $number = rand(0, 300); // sugeneruojame atsitiktinį skaičių nuo 0 iki 300
  if ($number > 275) {
    echo "<span style='color:red'>$number</span> "; // spalviname skaičių, jei jis didesnis nei 275
  } else {
    echo "$number ";
  }
  if ($number > 150) {
    $count++; // jei skaičius didesnis nei 150, padidiname kintamąjį $count
  }
}

echo '<br>Didesnių nei 150 skaičių yra: $count';

echo '<br>';
echo '---------------------';
echo '<br>';

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

$random_number = rand(3000, 4000); // sugeneruojame atsitiktinį skaičių nuo 3000 iki 4000

$numbers = []; // sukuriame masyvą, kuriame saugosime rastus skaičius

for ($i = 1; $i <= $random_number; $i++) {
  if ($i % 77 == 0) { // jei skaičius dalijasi iš 77 be liekanos
    $numbers[] = $i; // įtraukiame jį į masyvą
  }
}

echo implode(", ", $numbers); // atspausdiname masyvą, skirtą iš kablelių atskirtų skaičių
