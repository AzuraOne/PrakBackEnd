<?php

include "koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $telp = htmlspecialchars($_POST['telp']); 
    print_r($username);
    echo "<br>";
    print_r($email);
    echo "<br>";
    print_r($password);
    echo "<br>";
    print_r($telp);




    $query = "INSERT INTO users VALUES ('','$username','$password','$telp','$email')";
	$result = mysqli_query($conn, $query);
    if (!$result) {
	die("Query Gagal dijalankan : " . mysqli_errno($conn)." - ". mysqli_error($conn));		
	}
	else {
        
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
	}
    

} 
else{
    echo "Aksi tidak valid";
}
