<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primzahlenberechnung</title>
</head>
<body>
    <h1>Primzahlenberechnung - ITL12 Aufgabe 3 - Florian Pongritz</h1>
    <form method="post">
        <!-- Input für die Zahl -->
        <label for="zahl">Geben Sie eine Zahl ein:</label>
        <input type="number" name="zahl" id="zahl" required>
        <button type="submit">Berechnen</button>
    </form> 
    <!-- ANFANG ITL12 AUFGABE -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Die eingegebene Zahl aus dem <form> abrufen und in $grenze speichern
        $grenze = (int)$_POST["zahl"];

        // Check, ob die Zahl größer als 1 ist
        if ($grenze >= 2) {
            echo "<h2>Primzahlen von 1 bis $grenze:</h2>";
            echo "<p>";

            // Schleife für alle Zahlen von 2 bis zur eingegebenen Grenze
            for ($zahl = 2; $zahl <= $grenze; $zahl++) {
                // Variable zur Info, ob die aktuelle Zahl eine Primzahl ist
                $istPrimzahl = true;

                // Check, ob die Zahl durch irgendeine Zahl von 2 bis n/2 teilbar ist
                for ($teiler = 2; $teiler <= $zahl / 2; $teiler++) {
                    // Wenn die Zahl ohne Rest teilbar ist, ist sie keine Primzahl
                    if ($zahl % $teiler === 0) {
                        $istPrimzahl = false;
                        break; // Schleife beenden, da weitere durchgänge für nix sind
                    }
                }

                // Wenn die Zahl eine Primzahl ist, wird sie ausgegeben
                if ($istPrimzahl) {
                    echo $zahl . " ";
                }
            }

            echo "</p>";
        } else {
            // Meldung, wenn die eingegebene Zahl kleiner als 2 ist
            echo "<p>Bitte geben Sie eine Zahl die größer als 2 ist ein!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>";
        }
    }
    ?>
    <!-- ENDE ITL12 AUFGABE -->
</body>
</html>
