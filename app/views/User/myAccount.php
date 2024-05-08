<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
</head>
<body>
    <h1>Welcome, <?php echo $data['profile']->first_name; ?>!</h1>

    

    <h2>Your Profile</h2>
    <p>Name: <?php echo $data['profile']->first_name; ?></p>
    <p>Name: <?php echo $data['profile']->last_name; ?></p>
    <p>Name: <?php echo $data['profile']->phone; ?></p>
    <p>Name: <?php echo $data['profile']->date_of_birth; ?></p>
    <p>Email: <?php echo $data['user']->email; ?></p>

    <h2>Your Bookings</h2>
    <ul>
        <?php foreach ($data['bookings'] as $booking): ?>
            <li><?php echo $booking->booking_date; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Your Camps</h2>
    <ul>
        <?php echo $data['camps'] ?>
    </ul>

    <h2>Your Membership</h2>
    <p>Type: <?php echo $data['membership']->membership_type; ?></p>
    <p>Expires on: <?php echo $data['membership']->expiry_date; ?></p>
</body>
</html>
