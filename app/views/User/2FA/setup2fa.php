<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Factor Authentication</title>
    <link rel="stylesheet" href="/assets/styles/2FA.css">
  </head>

<body>
  <div class="container">
  <body>
    <div>
      <img height=300 width=300 src="<?= $QRCode ?>"></img>
      <p><strong>Scan the above QR-code</strong> with your mobile Authenticator app, such as Google Authenticator. The
        authenticator app
        will
        generate codes that are valid for <strong>30 seconds only</strong>. Enter such a code and submit it while it is
        still valid to apply the 2-factor authentication protection to your account.</p>
      <form method="post" action="">
        <label>Current code:</label>
        <!-- for testing -->
        <input type="text" class="test" name="test"> 
        <input class="totp" id="totp" type="text" name="totp">
        <button class='verify-code-btn' type="submit" name="action">Verify code</button>
      </form>
    </div>
  </body>

</html>
