<?php 
error_reporting(0);
session_start();


$name = $_SESSION['uname'];
$passw = $_SESSION['passwd'];
$stats = $_SESSION['status'];

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
    
    <?php if ($stats == 1) {
        ?><h1><a href="logout.php">Logout?</a></h1> <?php
     ?>
    <form action="process.php" method="post">

        <ul>
            <li>
                <label for="uname">Masukkan Username</label>
                <input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $name?>" required>

            </li>
            
            <li>
                <label for="passwd">Masukkan Password</label>
                <input type="passwd" name="passwd" id="passwd" placeholder="password" value="<?php echo $passw?>" required>
                
            </li>
            <li>
                <button type="submit">Login</button>
            </li>
        </ul>

    </form>
    <?php }else { ?>
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
        <?php 
            }?>
    
</body>
</html>