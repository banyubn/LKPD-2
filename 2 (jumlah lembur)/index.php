<?php
if (isset($_POST['submit'])) {
    $jam_kerja = $_POST['jam_kerja'];
    if ($_POST['jam_kerja'] > 8) {
        $jam_lembur = $_POST['jam_kerja'] - 8;
        $kompensasi = 50_000 + (25_000 * ($jam_lembur - 1));
    } else {
        $jam_lembur = 0;
        $kompensasi = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menghitung Jumlah Lembur</title>
</head>

<body>
    <h1 class="title text-center m-3">Menghitung Jumlah Lembur</h1>
    <form action="" method="POST" class="d-flex justify-content-center">
        <div class="m-3 w-50">
            <label for="jam_kerja">Lamanya Kerja (jam) : </label>
            <input type="number" name="jam_kerja" id="jam_kerja" class="form-control mb-3">
            <input type="submit" value="Kirim" name="submit" id="submit" class="form-control btn btn-primary">
        </div>
        <?php if (isset($_POST['submit'])) : ?>
            <div class="alert alert-secondary">
                <p>Jam Kerja : <b><?= @$jam_kerja; ?> jam</b></p>
                <p>Jam Lembur : <b><?= @$jam_lembur; ?> jam</b></p>
                <p>Kompensasi : <b>Rp. <?= number_format($kompensasi, 0, '', '.'); ?></b></p>
            </div>
        <?php endif; ?>
    </form>
</body>

</html>