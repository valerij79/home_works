<?php
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.


// Sukuriame kintamuosius su aktoriaus vardu ir pavardėmis

$vardas='Jonas';
$pavarde = 'Jonaitis';

// Nustatome, kuri iš stringų yra trumpesnė

if (strlen($vardas) < strlen($pavarde)) {
    $trumpesnis = $vardas;
} else {
    $trumpesnis = $pavarde;
}
// Atspausdiname trumpesnį stringą

echo 'Trumpesnis stringas: ' . $trumpesnis;

echo '<br>';
echo '---------------------';
echo '<br>';


// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

//   Sukuriame kintamuosius su aktoriaus vardu ir pavardėmis

 
$vardas2='Jonas';
$pavarde2 = 'Jonaitis';

// Atspausdiname vardą didžiosiomis ir pavardę mažosiomis raidėmis

echo strtoupper($vardas2) . ' ' . strtolower($pavarde2);

echo '<br>';
echo '---------------------';
echo '<br>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.


// Sukuriame kintamuosius su aktoriaus vardu ir pavardėmis
$vardas3 = 'Leonardo';
$pavarde3 = 'DiCaprio';

// Sukuriame kintamąjį, sudarytą iš pirmųjų vardo ir pavardės raidžių
$pirmos_raides = substr($vardas3, 0, 1) . substr($pavarde3, 0, 1);

// Atspausdiname kintamąjį su pirmosiomis vardo ir pavardės raidėmis
echo $pirmos_raides;

echo '<br>';
echo '---------------------';
echo '<br>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.


// Sukuriame kintamuosius su aktoriaus vardu ir pavardėmis
$vardas4 = 'Tom';
$pavarde4 = 'Hanks';

// Sukuriame kintamąjį, sudarytą iš trijų paskutinių vardo ir pavardės raidžių
$paskutines_raides = substr($vardas4, -3) . substr($pavarde4, -3);

// Atspausdiname kintamąjį su trijų paskutinių vardo ir pavardės raidžių
echo $paskutines_raides;

echo '<br>';
echo '---------------------';
echo '<br>';

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

// Sukuriame kintamąjį su tekstu
$tekstas = 'An American in Paris';

// Pakeičiame visas 'a' raidės didžiąsias ir mažąsias į žvaigždutes "*"
$tekstas_su_zvaigzdutemis = str_ireplace('a', '*', $tekstas);

// Atspausdiname kintamąjį su pakeistomis raidėmis
echo $tekstas_su_zvaigzdutemis;

echo '<br>';
echo '---------------------';
echo '<br>';

// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.


// Sukuriame kintamąjį su tekstu
$tekstas2 = 'An American in Paris';

// Suskaičiuojame visas 'a' raidės didžiąsias ir mažąsias
$viso_a = substr_count(strtolower($tekstas2), 'a');

// Atspausdiname rezultatą
echo 'Raidžių "a" skaičius tekste yra: ' . $viso_a;

echo '<br>';
echo '---------------------';
echo '<br>';

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

// Sukuriame kintamąjį su tekstu
$tekstas = "An American in Paris";

// Funkcijos apibrėžimas, kuris ištrina visas balses
function be_balsiu($tekstas) {
    return str_replace(array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'), '', $tekstas);
}
// Atspausdiname rezultatą
echo be_balsiu($tekstas) . "<br>";

// Sukuriame likusius kintamuosius
$tekstas1 = "Breakfast at Tiffany's";
$tekstas2 = "2001: A Space Odyssey";
$tekstas3 = "It's a Wonderful Life";

// Pritaikome funkciją visiems kintamiems ir atspausdiname rezultatus
echo be_balsiu($tekstas1) . "<br>";
echo be_balsiu($tekstas2) . "<br>";
echo be_balsiu($tekstas3);

echo '<br>';
echo '---------------------';
echo '<br>';

// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $string;
preg_match('/\d/', $string, $result);// ieškome epizodo numerį
echo '<pre>';
print_r($result[0]);// spausdiname epizodo numerį

echo '<br>';
echo '---------------------';
echo '<br>';

// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$p1 = "Don`t Be a Menace to South Central While Drinking Your Juice in the Hood";
$p2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$rez = str_word_count($p1, 1);

print_r($rez);
$count = 0;

foreach($rez as $word) {
    if (strlen($word) <= 5) {
        $count++;
    }
}

echo "<h2>$count</h2>";

$rez2 = str_word_count($p2, 1, 'ąų');

print_r($rez2);
$count2 = 0;

foreach($rez2 as $word) {
    if (strlen($word) <= 5) {
        $count2++;
    }
}

echo "<h2>$count2</h2>";

echo '<br>';
echo '---------------------';
echo '<br>';

// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

function generate_random_string() {
    $string = '';
    for ($i = 0; $i < 3; $i++) {
      $random_number = rand(97, 122); // sugeneruojame atsitiktinį skaičių nuo 97 (a) iki 122 (z) ASCII lentelėje
      $string .= chr($random_number); // pridedame atsitiktinę raidę prie stringo
    }
    return $string;
  }
  
  echo generate_random_string(); // išspausdiname atsitiktinį stringą
  
  echo '<br>';
  echo '---------------------';
  echo '<br>';

//   Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)

$p1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$p2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$words1 = explode(' ', $p1); // išskaidome pirmą stringą į žodžius
$words2 = explode(' ', $p2); // išskaidome antrą stringą į žodžius
$words = array_merge($words1, $words2); // sujungiame žodžius į vieną masyvą
$random_words = array_unique($words); // ištriname pasikartojančius žodžius ir paliekame tik unikalius
$random_words = array_slice($random_words, 0, 10); // paimame pirmus 10 žodžių iš masyvo
$random_string = implode(' ', $random_words); // sujungiame žodžius į stringą

echo $random_string; // išspausdiname atsitiktinį stringą su 10 žodžių

