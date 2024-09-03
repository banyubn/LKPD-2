<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama1_len = strlen($nama1);
    $nama2_len = strlen($nama2);
    $selisih = abs($nama1_len - $nama2_len);

    if ($nama1_len > $nama2_len) {
        $result = "<b>$nama1</b> memiliki jumlah karakter lebih banyak dari <b>$nama2</b> : selisih <b>$selisih</b> karakter";
    } else if ($nama1_len < $nama2_len) {
        $result = "<b>$nama2</b> memiliki jumlah karakter lebih banyak dari <b>$nama1</b> : selisih <b>$selisih</b> karakter";
    } else {
        $result = "Jumlah karakter kedua nama sama : <b>$nama1_len</b> karakter";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Perbandingan Jumlah Nama</title>
</head>

<body>
    <div class="m-3">
        <h1>Perbandingan Jumlah Nama</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama1" class="form-label">Nama 1</label>
                <input type="text" class="form-control" id="nama1" name="nama1" required>
            </div>
            <div class="mb-3">
                <label for="nama2" class="form-label">Nama 2</label>
                <input type="text" class="form-control" id="nama2" name="nama2" required>
            </div>
            <button type="submit" class="btn btn-primary">Bandingkan</button>
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <div class="alert alert-secondary">
                <p class="mb-0">Hasil Perbandingan:</p>
                <p class="mb-0"><?php echo $result;?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>