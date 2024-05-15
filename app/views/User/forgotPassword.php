<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Document') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/styles/forgetPassword.css">

</head>
<body>
    <div class="background">
        <div class="content">
            <h1><?= __('Forgot Password') ?></h1>
            <form class='password-form' method="post" action="/User/sendPasswordReset">
            <div class="inputs">
                    <label for="email" class="form-label"><?= __('Email:') ?></label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="<?= __('Jon123@gmail.com') ?>">
                </div>
                <button class="btn btn-primary"><?= __('Submit') ?></button>
            </form>
        </div>
    </div>
</body>
</html>
