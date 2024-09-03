<?php
require 'function.php';
require 'vendor/autoload.php'; //domPDF library
use Dompdf\Dompdf;
use Dompdf\Options;

$data = table();

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$content = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD Data Siswa</title>
</head>';

$content .= '
            <table id="myTable" class="display border-black" border="2" cellpadding="8" cellspacing="0" width="100%">    
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Rombel</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td>' . $key+1 . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['nis'] . '</td>
                        <td>' . $item['rombel'] . '</td>
                    </tr>
                <?php endforeach;?>
            </tbody>
            </table>
            ';

require_once 'dompdf/autoload.inc.php';

$dompdf->loadHtml($content, "UTF-8");
$dompdf->setPaper('A4');
$dompdf->render();
$dompdf->stream("data_siswa.pdf", array("Attachment" => 0));
