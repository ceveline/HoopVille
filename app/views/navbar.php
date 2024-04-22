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
    <link rel="stylesheet" href="/assets/styles/navbar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>

    </style>
</head>

<body>
    <header>
        <div class="logo"><img class='hoopville-logo' src="/assets/images/hoopvilleLogo.png"></img></div>
        <ul>
            <li>
                <a class="nav-link" href="#">Home</a>
            </li>
            <li>
                <a class="nav-link" href="#">Services</a>
            </li>
            <li>
                <a class="nav-link" href="#">About</a>
            </li>
            <li>
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li>
                <a class="nav-link" href="#">FAQ</a>
            </li>
            <li>
                <a class="nav-link" href="#">News & Updates</a>
            </li>
            <?php
            if (!isset($_SESSION['user_id'])) {
                echo '<li><a class="nav-link" href="#">Login</a></li>';
            } else {
                echo '<li><a class="nav-link" href="#">My Account</a></li>';
                echo '<li><a class="nav-link" href="/User/logout">Logout</a></li>';
            }
            ?>
        </ul>
    </header>
</body>

</html>