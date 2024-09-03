<?php
$uang = 140500;

$pecahan = [100000, 20000, 500];
$hasil = [];

foreach ($pecahan as $p) {
    $hasil[$p] = intdiv($uang, $p);
    $uang %= $p;                     
}

foreach ($hasil as $p => $lembar) {
    echo "Rp $p: $lembar lembar <br>";
}
