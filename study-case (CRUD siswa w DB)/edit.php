<?php
require 'function.php';

$id = $_GET["id"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    update($_POST["name"], $_POST["nis"], $_POST["rombel"], $id);

    header('Location: index.php');
    exit;
}

$data = select($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD Data Siswa</title>

    <!-- Font Awesome Icon -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
</head>

<body style="background-color: #f1f1f1;">
    <form action="" method="POST">
        <div class="m-5 p-5 bg-white" style="border-radius: 10px;">
            <h1 class="title mb-4">Edit Data Siswa</h1>
            <label for="name" class="form-label">Nama :</label>
            <input value="<?= $data["name"] ?>" type="text" name="name" id="name" class="form-control" required>
            <br>
            <label for="nis" class="form-label">NIS :</label>
            <input value="<?= $data["nis"] ?>" type="text" name="nis" id="nis" class="form-control" required>
            <br>
            <label for="rombel" class="form-label">Rombel :</label>
            <input value="<?= $data["rombel"] ?>" type="text" name="rombel" id="rombel" class="form-control mb-5" required>

            <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
        </div>
    </form>
</body>
</body>

</html>