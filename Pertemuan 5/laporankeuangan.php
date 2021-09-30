<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="navbar-brand" href="dashboard.php"> <i class="fa fa-home"></i> kembali ke Dashboard</a>

                </ul>
            </div>
        </div>
    </nav>

    <table class="table" style="margin-top: 40px;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nilai</th>
                <th scope="col">Comment</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM keuangan ORDER BY id ASC");
            $no = 0;
            while ($row = mysqli_fetch_array($query)) {
                $no++;
            ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $row['Uang'] ?></td>
                    <td><?= $row['Comment'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td>
                        <ul style="list-style-type: none;display: inline;">
                            <li> <a href="editpemasukan.php?id=<?=$row['id']?>" class="btn btn-primary">Edit</a></li>
                            <li> <a href="hapus.php?id=<?=$row['id']?>" class="btn btn-danger">Hapus</a></li>

                        </ul>
                    </td>

                </tr>

            <?php } ?>
        </tbody>
    </table>


</body>

</html>