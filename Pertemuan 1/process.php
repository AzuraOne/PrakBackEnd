<?php 
    session_start();
    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];


    $truename = "Farhanang";
    $truepasswd = "Farhanang";
    if ($truename = $uname) {
        if ($truepasswd == $passwd) {
            echo "Username dan password Sama";
            $_SESSION['uname'] = $uname;
            $_SESSION['passwd'] = $passwd;
            $_SESSION['status'] = 1;
            header( "Location: login.php" );

        }else {
            echo "Password tidak Sama";
        }
        
    }else {
        echo "Username dan password tidak sama";
    }



?>