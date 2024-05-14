<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/styles/login.css">

</head>
<body>
    <div class="background">
        <div class="content">

            <h1><?= __('Login') ?></h1>
            <form class='login-form' method="post" action="">
            <h2><?=$data?></h2>
                <div class="inputs">
                    <label for="email" class="form-label"><?= __('Email:') ?></label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Jon123@gmail.com">
                </div>
                <div class="inputs input2">
                    <label for="password" class="form-label"><?= __('Password:') ?></label>
                    <input type="password" class="form-control" id="password_hash" name="password_hash" placeholder="•••••">
                </div>
                <div class="forgot">
                    <p class="forgot-password"><a href="/User/forgotPassword"><?= __('Forgot password?') ?></a></p>
                </div>
                <button type="submit" class="btn btn-primary" name="action" value="Login"><?= __('Login') ?></button>
                <div class="register-now">
                    <p><?= __('Don\'t have an account?') ?> <a href="/register"><?= __('Register now!') ?></a></p>
                </div>
            </form>
        </div>

        <script>
        $(document).ready(function() {
            var dataValue = "<?=$data?>";
            if (dataValue.trim() !== '') {
                alert(dataValue);
            }
        });
    </script>

       
    </div>
</body>
</html>