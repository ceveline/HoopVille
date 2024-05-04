<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Camp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/styles/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <div class="background">
        <div class="content">
            <h1>Purchase</h1>
            <form class='purchase-form' method="post" action="">
                <div class="inputs">
                    <label for="first_name" class="form-label">First name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Jon">
                </div>
                <div class="inputs last-name">
                    <label for="last_name" class="form-label">Last name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Doe">
                </div>
                <div class="inputs">
                    <label for="phone" class="form-label">Phone number:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="5144312314">
                </div>
                <div class="inputs">
                    <label for="date_of_birth" class="form-label">Date of birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth">
                </div>
                <div class="inputs">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Jon123@gmail.com">
                </div>
                <div class="inputs">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password_hash" name="password_hash" placeholder="•••••">
                </div>
                <div class="inputs">
                    <label for="retype-password" class="form-label">Re-type password:</label>
                    <input type="password" class="form-control" id="retype-password" name="retype-password" placeholder="•••••">
                </div>
                <button type="submit" class="btn" name="action" value="Enrol In Camp" onclick="validateInput(event)">Register</button>

                <div class="login-now">
                    <p>Already have an account? <a href="/login">Login now!</a></p>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
