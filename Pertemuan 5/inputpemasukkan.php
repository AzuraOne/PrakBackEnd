<?php

include "koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    $nilaiuang = $_POST['uang'];
    $date = $_POST['tanggal'];
    $comment = htmlspecialchars($_POST['comment']);





    $query = "INSERT INTO keuangan VALUES ('','$nilaiuang','$comment','$date')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Gagal dijalankan : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
?>

        <div class="alert alert-primary" role="alert">
            Berhasil menginputkan!!
        </div>
<?php


    }
} 
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
    <div class="container">
        <br>
        <div class="d-flex justify-content-center h-100">
            <aside class="col-sm-6">
                <form action="" method="post">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <div class="form-floating mb-3">
                            <input name="uang" id="uang" class="form-control" placeholder="Masukkan uang yang ingin diinputkan" type="text">
                            <label for="uang">Input keuangan</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <label for="uang"></label>


                        </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <div class="input-group">

                            <input name="tanggal" class="form-control" placeholder="Masukkan input tanggal" type="date">
                        </div> <!-- input-group.// -->
                    </div> <!-- form-group// -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <div class="form-floating">
                            <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div><!-- input-group.// -->
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary btn-block" style="width: 100%; height: 100%"> Submit </button>
                    </div> <!-- form-group// -->

                </form>


            </aside> <!-- col.// -->
        </div>


    </div>
    <!--container end.//-->





</body>

</html>