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
</head>
<body>
    <div class="background">
        <div class="content-container">
            <h1><?= __('Message Us') ?></h1>
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
                    <textarea id="message" name="message" rows="4" placeholder="<?= __('Enter your message') ?>" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?= __('Submit') ?></button>
            </form>
        </div>
    </div>
</body>
</html>
