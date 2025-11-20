<?php
$pokaz = isset($_GET['pokaz']); // sprawdza, czy kliknięto przycisk
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Jedna strona PHP</title>
</head>
<body>

<?php if (!$pokaz): ?>
    <!-- Widok startowy -->
    <h1>Kliknij, aby wyświetlić treść skryptu</h1>
    <a href="?pokaz=1">Pokaż wynik skryptu</a>

<?php else: ?>
    <!-- Wyświetlenie treści skryptu -->
    <h1>Wynik skryptu PHP</h1>

    <?php
    // Definicja zmiennych i wyświetlanie tekstu
    $zmienna = "Witaj, świecie!";
    echo "<p>$zmienna</p>";
    echo "<p>Hmmmm.... co tu jeszcze napisać?</p>";

    // Warunkowe wyświetlanie tekstu
    if (true) {
        echo "<p>To jest prawda!</p>";
    } else {
        echo "<p>To jest fałsz!</p>";
    }

    // Pętla for do wyświetlania liczb
    echo "<ul>";
    for ($i = 0; $i < 3; $i++) {
        echo "<li>Liczba: " . $i . "</li>";
    }
    echo "</ul>";
    echo "<p>Nowa linia dodana.</p>";

    // Tablica z danymi
    $macierz = [1, 4, 2, 7, 6, 8, 22, 10, 5, 3, 9, 12, 11, 15, 31, 14, 13, 18, 17, 16, 20, 19, 21, 25, 24, 23, 30, 28, 27, 26, 29, 32];
    
    echo "<h2>Elementy macierzy:</h2>";
    echo "<ul>";
    foreach ($macierz as $element) {
        echo "<li>Element macierzy: $element</li>";
    }
    echo "</ul>";

    // Wyświetlanie posortowanej tablicy
    sort($macierz);
    echo "<h2>Posortowane elementy macierzy:</h2>";
    echo "<ul>";
    for ($i = 0; $i < count($macierz); $i++) {
        echo "<li>Posortowany element macierzy: $macierz[$i]</li>";
    }
    echo "</ul>";

    echo "<p>Skrypt zakończony.</p>";
    ?>

    <p><a href="index.php">Powrót</a></p>

<?php endif; ?>

</body>
</html>
