<?php

$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 100],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach($students as $key => $student) {
    $jumlah_data = array_sum($student['nilai']);
    $banyak_data = count($student['nilai']);
    $rata_rata = $jumlah_data / $banyak_data;
    echo $key + 1 . ". " . $student['nama'] . " = $rata_rata <br>";
}