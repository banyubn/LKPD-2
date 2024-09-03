<?php
require 'function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    store($_POST["name"], $_POST["nis"], $_POST["rombel"]);
}

$data = table();
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
            <h1 class="title mb-4">Data Siswa CRUD</h1>
            <label for="name" class="form-label">Nama :</label>
            <input type="text" name="name" id="name" class="form-control" required>
            <br>
            <label for="nis" class="form-label">NIS :</label>
            <input type="text" name="nis" id="nis" class="form-control" required>
            <br>
            <label for="rombel" class="form-label">Rombel :</label>
            <input type="text" name="rombel" id="rombel" class="form-control mb-5" required>

            <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
        </div>
    </form>
    <div class="m-5 p-5 bg-white" style="border-radius: 10px;">
        <a href="pdfAll.php" class="btn btn-success mb-2"><i class="fas fa-print"></i> Print All</a>
        <table id="myTable" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Rombel</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['nis'] ?></td>
                        <td><?= $item['rombel'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="delete.php?id=<?= $item['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="pdfUser.php?id=<?= $item['id'] ?>" class="btn btn-success"><i class="fas fa-print"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        //DataTables jQuery
        $(document).ready(function() {
            $('#myTable').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "responsive": true,
                "columns": [{width: '5%'}, {width: '50%'}, null, null, {width: '15%'}],
                "dom": 'Bfrtip',
                "buttons": [
                    'colvis'
                ]
            });
        });
    </script>
</body>
</body>

</html>