<?php

echo "Hoe veel activiteiten wil je toevoegen?";
$a = readline(">");
$Bucket = array(">");

if (!is_numeric($a)) {
    exit ($a . " is geen getal");
}
for ($i = 0; $i < $a; $i++) {
    echo "Wat wil je toevoegen aan jouw bucket list?";
    $b = readline(">");
    $Bucket[] = $b;
}
foreach ($Bucket as $key => $value) {
    echo(" Op jouw bucket list staat:");
    echo "$v"
    echo " $value";
}

