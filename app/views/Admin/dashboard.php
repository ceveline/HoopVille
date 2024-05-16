<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .container {
      height: calc(100vh - 108px);
      background-color: rgba(0, 0, 0, 0.3);
      /* margin-top: 80px; */
      margin-right: auto;
      margin-left: auto;
      text-align: center;
      padding: 50px;
      display: flex;
      gap: 60px;
      justify-content: center;
      align-items: center;

    }

    img {
      margin-top: 25px;
      border-radius: 10px;
    }

    .card {
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.9);
      height: 400px;
      width: 300px;
      transition: 0.4s;
    }

    .card:hover {
      transition: 0.4s;
      transform: scale(1.1);
    }

    h1 {
      text-align: center;
      padding: 20px;
    }

    button {
      background-color: #ffde59;
      height: 30px;
      width: 180px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
    }

    a {
      text-decoration: none;
      color: black;
    }
  </style>

</head>

<body>

  <div class="background">


    <div class="container">

      <div class="reviews card">
        <h1>Reviews</h1>
        <img src="https://images.pexels.com/photos/1752757/pexels-photo-1752757.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="Basketball" width="250">
        <button style="margin-top: 80px"><a href="/Admin/Review/list"><?= __('Reviews') ?> ▶</a></button>

      </div>
      <div class="bookings card">
        <h1>Bookings</h1>
        <img
          src="https://images.pexels.com/photos/1331750/pexels-photo-1331750.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Basketball" width="250">
        <button style="margin-top: 80px"><a href="/Admin/booking/list" id="bookings" name="bookings"><?= __('Bookings') ?> ▶</a></button>
      </div>
      <div class="news card">
        <h1>New & Updates</h1>
        <img
          src="https://images.pexels.com/photos/69773/uss-nimitz-basketball-silhouettes-sea-69773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Basketball" width="250">
        <button style="margin-top: 80px"><a href="/Publication"><?= __('New & Updates') ?> ▶</a></button>
      </div>
      <div class="news card">
        <h1>Users</h1>
        <img
          src="https://images.pexels.com/photos/1080882/pexels-photo-1080882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Basketball" width="250">
        <button style="margin-top: 80px"><a href="/Admin/User/view"><?= __('Users') ?> ▶</a></button>
      </div>

    </div>
  </div>

</body>

</html>