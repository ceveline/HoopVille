<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/styles/resetPassword.css">
</head>

<body>

    <div class="background">
        <div class="content">
            <h1>Reset Password</h1>

            <form class='password-form' method="post" action="/User/processResetPassword">
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

                <div class="inputs">
                    <label for="password" class="form-label">New password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="inputs">
                    <label for="password_confirmation" class="form-label">Repeat password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <button class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>

</body>

</html>