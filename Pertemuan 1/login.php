<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="process.php" method="post">
        <ul>
            <li>
                <label for="uname">Masukkan Username</label>
                <input type="text" name="uname" id="uname" placeholder="Username" required>

            </li>
            
            <li>
                <label for="passwd">Masukkan Password</label>
                <input type="passwd" name="passwd" id="passwd" placeholder="password" required>
                
            </li>
            <li>
                <button type="submit">Login</button>
            </li>
        </ul>

    </form>
    
</body>
</html>