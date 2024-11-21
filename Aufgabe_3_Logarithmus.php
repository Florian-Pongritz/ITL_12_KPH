<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logarithmus-Ausgabe</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Schönere Überschrift, etc*/ 
        }
        .row {
            margin-bottom: 5px; 
        }
    </style>
</head>
<body>
    <h1>Logarithmische Funktion: Log(n) - ITL12 Aufgabe 3 - Florian Pongritz</h1>
    <p>Die logarithmischen Werte von 1 bis 100 werden als Sterne dargestellt:</p>
    <!-- ANFANG ITL12 AUFGABE -->
    <?php
    // Loop für alle Zahlen von 1 bis 100
    for ($n = 1; $n <= 100; $n++) {
        // Berechnung des Logarithmus
        $logWert = log($n);

        // Verwandlung in eine ganze Zahl für die Anzahl der Sterne
        $sterneAnzahl = (int)($logWert * 10); // Multiplikation für eine bessere und verständlochere Ausgabe

        // Output der Zahl und der Sterne
        echo "<div class='row'>"; // Optional; Für eine bessere Ausgabe
        echo "<strong>$n:</strong> "; // Die aktuelle Zahl anzeigen

        // Loop zur Ausgabe der Sterne
        for ($i = 0; $i < $sterneAnzahl; $i++) {
            echo "*";
        }

        echo "</div>"; 
    }
    ?>
    <!-- ENDE ITL12 AUFGABE -->
</body>
</html>
