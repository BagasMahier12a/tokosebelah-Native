<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sebelah | Login User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <!-- Container -->
    <div class="container">
        <!-- Form login -->
        <div class="loginKiri">
            <div class="welcomeLogin">
                <div class="greeting">
                    <h1>WELCOME BACK!</h1>
                    <p>Don't have a account? <a href="register.php">Sign up</a></p>
                </div>
                <form action="login_proses.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                    <!-- Remember me -->
                    <div class="form-check">
                        <div>
                            
                            <label class="form-check-label" for="rememberMe"></label>
                        </div>
                        <!-- Forget password -->
                        <a href="../index.php">Back</a>
                    </div>
                    <!-- Button -->
                    <button type="submit" value="submit" name="submit" class="btn-login">Login</button>
                </form>
            </div>
        </div>

        <!-- Gambar -->
        <div class="gambarKanan">
            <div class="judulToko">
                 <h1><a style="" href="../index.php">Toko Sebelah</a></p></h1>
                <p class="desc">Shop your way out of troubles<br>
                    and stress.</p>
            </div>

            <div class="copyright">
                <p>@2021 • TokoSebelah</p>
                <p>All right reserved.</p>
            </div>
        </div>
    </div>

</body>

</html>