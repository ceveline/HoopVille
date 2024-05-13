<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh;
        }

        .footer {
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.5);
            height: 5%;
            display: flex;
            justify-content: center; /* Align items horizontally */
            align-items: center; /* Align items vertically */
            background-color: #FFDE59;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer p {
            margin: 0; /* Remove default margin */
            color: black;
        }


    </style>
</head>

<body>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; <?= __('2024 Hoopville. Made by Ceveline, Sereen, Hussain, and Denis. All rights reserved.') ?></p>
    
        </div>
    </footer>
</body>

</html>
