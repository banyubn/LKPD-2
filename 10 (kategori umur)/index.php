<?php

$data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

$dewasa = 0;
$anak_anak = 0;

foreach ($data as $item) {
    $item >= 17 ? $dewasa += 1 : $anak_anak += 1;
}
echo "Kategori Dewasa : $dewasa <br>";
echo "Kategori Anak - anak : $anak_anak <br>";