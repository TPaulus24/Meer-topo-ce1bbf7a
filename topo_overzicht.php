<?php
 echo "Hoeveel landen wil je toevoegen??" . PHP_EOL;
 $ary = array();
$nummer = readline();
for ($u = 1; $u <= $nummer; $u++){
    echo "Welk land wil je toevoegen??" . PHP_EOL;
    $land =readline();
    echo "Wat is de hoofdstad van " . $land . "??" . PHP_EOL;
    $hoofdstad = readline();
    $ary[$land] = $hoofdstad;
}
echo "De volgenden landen bevinden zich in de database." . PHP_EOL;
foreach ($ary as $land => $hoofdstad){
    echo "$land - $hoofdstad" . PHP_EOL;
}