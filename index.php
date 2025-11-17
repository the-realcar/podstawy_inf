<?php
$zmienna = "Witaj, świecie!";
echo $zmienna;
echo "\n Hmmmm....  co tu jeszcze napisać?";
if (true) {
    echo "\n To jest prawda!";
} else {
    echo "\n To jest fałsz!";
}
for ($i = 0; $i < 3; $i++) {
    echo "\n Liczba: " . $i;
}
echo "\n Nowa linia dodana.";

$macierz = [1, 4, 2, 7, 6, 8, 22, 10, 5, 3, 9, 12, 11, 15, 31, 14, 13, 18, 17, 16, 20, 19, 21, 25, 24, 23, 30, 28, 27, 26, 29, 32];
foreach ($macierz as $element) {
    echo "\n Element macierzy: " . $element;
}
    
for ($i = 0; $i < 32; $i++) {
    echo "\n Posortowany element macierzy: " . $macierz[$i];
}

echo "\n Skrypt zakończony.";
?>