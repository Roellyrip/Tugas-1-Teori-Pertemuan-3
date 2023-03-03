<?php

$NamaMenu ="Kwetiau Goreng";
    echo "Menu dibeli = $NamaMenu" . PHP_EOL;

switch ($NamaMenu){
    case 'Nasi Goreng';
        echo "Harga barang tersebut adalah Rp25.000" . PHP_EOL;
    break;
    case 'Nasi Goreng Merah';
        echo "Harga barang tersebut adalah Rp35.000" . PHP_EOL;
    case 'Kwetiau Goreng';
        echo "Harga barang tersebut adalah Rp40.000" . PHP_EOL;
        break;
    case 'Ikan 2 Rasa';
        echo "Harga barang tersebut adalah Rp55.000" . PHP_EOL;
        break;
    case 'Cumi Telor Asin';
        echo "Harga barang tersebut adalah Rp70.000" . PHP_EOL;
        break;    
    
    default:
        echo "Menu tidak tersedia" . PHP_EOL;
        break;
    }