<?php 
    session_start();
    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];


    $truename = "Farhanang";
    $truepasswd = "Farhanang";
    if ($truename = $uname) {
        if ($truepasswd == $passwd) {
            echo "Username dan password Sama";
        }else {
            echo "Password tidak Sama";
        }
        
    }else {
        echo "Username dan password tidak sama";
    }



?>