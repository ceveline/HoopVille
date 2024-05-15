<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Contact Form') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/styles/contact.css">
    <style>
        .background {
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
<<<<<<< HEAD
            align-items: flex-start;
            /* Adjusted alignment */
            padding-top: 50px;
            /* Adjusted padding */
=======
            align-items: flex-start; /* Adjusted alignment */
            padding-top: 50px; /* Adjusted padding */
>>>>>>> 3ba00d9fffb2e480416fb4f40db1aa0839d8f3d2
        }

        .content-container {
            background-color: white;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 40px;
            width: 850px;
        }

        h1 {
            font-size: 2rem;
            color: white;
            margin: 0;
            background-color: #FFDE59;
            text-align: center;
            padding: 10px 0;
            border-radius: 5px;
            text-transform: uppercase;
            text-shadow: 0.2px 2px 8px #00000082;
            margin-top: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .inputs {
            margin-bottom: 25px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
<<<<<<< HEAD
            width: 100%;
            /* Adjusted width */
=======
            width: 100%; /* Adjusted width */
>>>>>>> 3ba00d9fffb2e480416fb4f40db1aa0839d8f3d2
            height: 32px;
            border: none;
            border-bottom: 1px solid #ccc;
            padding-left: 10px;
            margin-bottom: 25px;
        }

        select {
            width: 100%;
        }

        button {
            height: 34px;
            width: 124px;
            font-size: 0.93rem;
            border-radius: 0.6rem;
            border: none;
            background-color: #ffda76;
<<<<<<< HEAD
            margin: auto;
            /* Center the button horizontally */
=======
            margin: auto; /* Center the button horizontally */
>>>>>>> 3ba00d9fffb2e480416fb4f40db1aa0839d8f3d2
        }

        button:hover {
            background-color: #fbd467;
        }
    </style>
</head>

<body>
    <h1><?= __('Message Us') ?></h1>
    <div class="background">
        <div class="content-container">
            <form method="post" action="/User/sendMessage">
                <div class="inputs">
                    <input type="text" id="name" name="name" placeholder="<?= __('Enter your name') ?>" required>
                </div>
                <div class="inputs">
                    <input type="email" id="email" name="email" placeholder="<?= __('Enter your email') ?>" required>
                </div>
                <div class="inputs">
                    <div class="select-container">
                        <select id="subject" name="subject" required>
                            <option value="" selected disabled><?= __('Select subject') ?></option>
                            <option value="camp"><?= __('Camp') ?></option>
                            <option value="booking"><?= __('Booking') ?></option>
                            <option value="membership"><?= __('Membership') ?></option>
                            <option value="other"><?= __('Other') ?></option>
                        </select>
                    </div>
                </div>
                <div class="inputs">
                    <textarea id="message" name="message" rows="4" placeholder="<?= __('Enter your message') ?>"
                        required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?= __('Submit') ?></button>
            </form>
        </div>
    </div>
</body>

</html>