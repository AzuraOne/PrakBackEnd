<?php 
$conn = mysqli_connect("localhost","root","","CRUDCoba");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
