// Link zur Aufgabe: https://www.eduvidual.at/mod/assign/view.php?id=6816060

<?php
// Teil 1: Kostenermittlung
$liter1 = 40.5; // Tankfüllung 1
$liter2 = 35.7; // Tankfüllung 2 
$preis = 1.499; // Preis pro Liter

// Kosten berechnen
$kosten = ($liter1 + $liter2) * $preis;

// Teil 2: Ergebnis
$ergebnis = "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter " . $kosten . " €";

// Ergebnis ausgeben
echo $ergebnis;
?>
