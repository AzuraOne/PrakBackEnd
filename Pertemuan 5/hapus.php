<?php 
include "koneksi.php";
$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM keuangan WHERE id='$id'");
    if ($hapus) {
        header("location: laporankeuangan.php");
    } 
    else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
?>