<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Contact Us') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .background {
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%; /* Adjust width as needed */
            max-width: 1400px; /* Limit maximum width */
            margin: 0 auto; /* Center content horizontally */
        }

        .title-container {
            width: 100vw; /* Full viewport width */
            background-color: #FFDE59;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
            margin-bottom: 30px;
            border-radius: 5px;
            text-transform: uppercase;
            text-shadow: 0.2px 2px 8px #00000082;
        }

        h1 {
            font-size: 2rem; /* Same size as the title in About Us */
            color: white;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .options-container {
            background-color: ghostwhite;
            padding: 40px; /* Increased padding */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-radius: 10px; /* Slightly increased border radius */
            text-align: center;
            width: 900px; /* Adjust width as needed */
            max-width: 1400px; /* Limit maximum width */
            display: flex;
            justify-content: space-around; /* Horizontally distribute options */
        }

        .option {
            width: 30%; /* Set width for each option */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
        }

        .option .avatar {
            width: 100%; /* Make avatar fill its container */
            max-width: 200px; /* Limit maximum width */
            height: 150px;
            border-radius: 10px; /* Rounded corners */
            margin-bottom: 15px;
        }

        .info p {
            margin: 5px 0;
            font-size: 1rem; /* Adjust font size */
            color: #333; /* Darken the text color */
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="content">
            <div class="title-container">
                <h1><?= __('Contact Us') ?></h1>
            </div>
            <div class="container">
                <div class="options-container">
                    <div class="option">
                        <img class="avatar" src="/assets/images/Feras.png" alt="<?= __('Person 1') ?>">
                        <div class="info">
                            <p><?= __('Feras Saaida') ?></p>
                            <p>123-456-7890</p>
                            <p><a href="/User/contact/hussainamin285@gmail.com"> <?= __('hussainamin285@gmail.com') ?></a></p>
                        </div>
                    </div>
                    <div class="option">
                        <img class="avatar" src="/assets/images/Mikee.png" alt="<?= __('Person 2') ?>">
                        <div class="info">
                            <p><?= __('Mikee Dosado') ?></p>
                            <p>987-654-3210</p>
                            <p><a href="/User/contact/jane@example.com">jane@example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
