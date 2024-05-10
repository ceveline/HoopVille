<!DOCTYPE html>
<html>
<head>
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
        <div class="logo">
            <img class='hoopville-logo' src="/assets/images/hoopvilleLogo.png"></img>
    </div>
    <div class="main">
        <div class="list">
            <ul>
                <li>
                    <a class="nav-link" href="/Home"><?= __('Home') ?></a>
                </li>
                <li>
                    <a class="nav-link" href="/User/services"><?= __('Services') ?></a>
                </li>
                <li>
                    <a class="nav-link" href="/User/aboutUs"><?= __('About') ?></a>
                </li>
                <li>
                    <a class="nav-link" href="/User/contact"><?= __('Contact') ?></a>
                </li>
                <li>
                    <a class="nav-link" href="/FAQ">FAQ</a>
                </li>
                <li>
                    <a class="nav-link" href="/Publication"><?= __('News & Updates') ?></a>
                </li>
                <li>
                    <a class="nav-link" href="/User/review/list"><?= __('Reviews') ?></a>
                </li>

                <?php if (isset($_SESSION['user_id']) || isset($_SESSION['admin_id'])) : ?>
                    <li><a class="nav-link" href="#"><?= __('My Account') ?></a></li>
                    <li><a class="nav-link" href="/logout"><?= __('Logout') ?></a></li>      
                <?php else : ?>
                    <li><a class="nav-link" href="/login"><?= __('Login') ?></a></li>
                <?php endif; ?>
            </ul>
        </div>
            <div class="lang">
            <p><a href="?lang=en"> EN </a> | <a href="?lang=fr"> FR </a></p>
        </div>
    </div>
        
    </header>
</body>

</html>