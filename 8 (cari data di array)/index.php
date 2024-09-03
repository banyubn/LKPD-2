<?php
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

$hasil = 0;
foreach ($data as $item) {
    $item == $cari ? $hasil += 1 : $hasil += 0;
}
echo $hasil;