<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <div class="container">
        <br>
        <div class="d-flex justify-content-center h-100">
            <aside class="col-sm-4">
                <form action="prosesindex.php" method="post">
                    <div class="card">
                        <article class="card-body">
                            <h4 class="card-title text-center mb-4 mt-1">Login</h4>
                            <hr>
                            <p class="text-success text-center">Masukan Username Dan Password</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="email" class="form-control" placeholder="Masukkan Email" type="email">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password" class="form-control" placeholder="Masukkan password" type="password">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-block"> Login </button>
                            </div> <!-- form-group// -->
                            
                            <div class="form-group">
                                <a class="btn btn-primary btn-block" href="register.php">Register</a>
                            </div>
                        </article>
                    </div> <!-- card.// -->

                </form>


            </aside> <!-- col.// -->
        </div>


    </div>
    <!--container end.//-->

    </article>

</body>

</html>