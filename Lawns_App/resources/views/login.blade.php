<?php

use App\Http\Controllers\CustPagesController;

$username = CustPagesController::SessionUsername();
$password = CustPagesController::SessionPassword();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1a52a82c6c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Lawns.io</title>
</head>

<body>
    <section class="login-section">
        <h2 class="login-title-main">Lawns.io</h2>
        <div class="login-inner-container">
            <h1 class="login-title">
                Login
            </h1>
            <div class="form-container">
                <form class="login-form" action="user" method="POST">
                    @csrf
                    <label for="userName">Username:</label>
                    <input type="text" name="userName" value="<?php echo $username ?>" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" minlength="3" value="<?php echo $password ?>" required>
                    <input id="submit" type="submit" name="submit" value="Submit">
                </form>
                <p><a>Forgot Password?</a></p>
                <p><a>Forgot Username?</a></p>
                <p><a>Create New Account</a></p>
            </div>
            <div class="oauth-container">
                <span class="google-span"><i id="google" class="fab fa-google fa-4x" value=""></i><a class="google">google</a></span>
                <span class="instagram-span"><i id="instagram" class="fab fa-instagram fa-4x"></i><a class="instagram">instagram</a></span>
                <span class="facebook-span"><i id="facebook" class="fab fa-facebook fa-4x"></i><a class="facebook">facebook</a></span>
            </div>
        </div>
    </section>
</body>

</html>