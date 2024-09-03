<?php
if (isset($_POST['submit'])) {
    $text = $_POST['input_txt'];
    $numbers = str_split((string)filter_var($text, FILTER_SANITIZE_NUMBER_INT));
    $result = implode(',', $numbers);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pendeteksi Teks & Angka</title>
</head>

<body>
    <h1 class="title text-center m-3">Pendekteksi Angka di Teks</h1>
    <form action="" method="POST">
        <div class="d-flex justify-content-center flex-row">
            <div class="m-3 w-50">
                <label for="input_txt">Masukkan Teks :</label>
                <input type="text" name="input_txt" id="input_txt" class="form-control mb-3">
                <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>
        <?php if (isset($_POST['submit'])) : ?>
            <div class="alert alert-secondary mx-5">
                <p class="fw-bold">Teks: <?= @$text; ?></p>
                <?php if ($result) : ?>
                    <p>Teks mengandung angka <b><?= @$result; ?></b></p>
                <?php else : ?>
                    <p>Teks tidak mengandung angka.</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </form>
    </form>
</body>

</html>