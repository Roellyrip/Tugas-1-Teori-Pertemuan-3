<?php

$Bil = 1345;
    echo "Bilangan di pilih = $Bil" . PHP_EOL;

$hasilnya = ($Bil %2 == 0) ? "$Bil adalah Bilangan Genap" : "$Bil adalah Bilangan Ganjil";

echo $hasilnya;