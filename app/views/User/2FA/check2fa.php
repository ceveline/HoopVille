<html>

<head>
  <title>Two-Factor Authentication</title>
  <link rel="stylesheet" href="/assets/styles/2FA.css">

  <style>
    body {
      display: flex;
      align-items: center;
    }
  </style>

</head>

<body>
  <div class='main'>

    <p style="text-align: center;">Submit the <strong>6-digit code</strong> for this site from your Authenticator app.
    </p>
    <form method="post" action="">
      <label>Current code:</label>
      <input class="totp" id="totp" type="text" name="totp"></input>
      <button class='verify-code-btn' type="submit" name="action">Verify code</button>
    </form>
  </div>
</body>

</html>