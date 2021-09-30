<?php

include "koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    $row = mysqli_fetch_array($query);
    if ($row['email'] == $email) {
        if ($row['password'] == $password) {
            $_SESSION['username'] = $row['username'];
            header("location: dashboard.php");
        }
        # code...
    }
    

} 
else{
    echo "Aksi tidak valid";
}


?>