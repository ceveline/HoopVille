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
    <link rel="stylesheet" href="/assets/styles/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
    <div class="background">
        <div class="content">
            <h1>Registration</h1>
            <form class='register-form' method="post" action="">
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
                <button type="submit" class="btn" name="action" value="Register" onclick="validateInput(event)">Register</button>

                <div class="login-now">
                    <p>Already have an account? <a href="/Admin/login">Login now!</a></p>
                </div>

                <script>
                    function validateInput(event) {
                        event.preventDefault(); // Prevent the form from submitting
                        var email = document.getElementById("email").value.trim();
                        var password = document.getElementById("password_hash").value.trim();
                        var retype_password = document.getElementById("retype-password").value.trim();

                        if (email === "" || password === "" || retype_password === "") {
                            alert("Please fill in all fields");
                            return;
                        }
                        if (password != retype_password) {
                            alert("Please make sure the passwords are the same");
                            document.getElementById("password_hash").style.borderColor = "red";
                            document.getElementById("retype_password").style.borderColor = "red";
                            return;
                        }

                        // If all fields are filled, submit the form
                        document.querySelector('.register-form').submit();
                    }
                </script>

            </form>
        </div>
    </div>
</body>
</html>
