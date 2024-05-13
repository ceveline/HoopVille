<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .background {
            min-height: 100vh;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1200px;
            width: 90%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1,
        h2,
        h3 {
            color: #333;
        }

        h2 {
            border-bottom: 2px solid #ffda76;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            color: #666;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        .profile,
        .membership,
        .bookings,
        .camps,
        .reviews {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .camp-item {
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        .camp-item:hover {
            background-color: #fbd467;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ffda76;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #fbd467;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
            }

            .stacked-sections {
                flex-direction: column;
            }

            .profile,
            .membership,
            .bookings,
            .camps,
            .reviews {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="container">
            <div class="stacked-sections">
                <div class="profile">
                    <h2><?= __('Your Profile'); ?></h2>
                    <p><?= __('First Name'); ?>: <?php echo $data['profile']->first_name; ?></p>
                    <p><?= __('Last Name'); ?>: <?php echo $data['profile']->last_name; ?></p>
                    <p><?= __('Phone'); ?>: <?php echo $data['profile']->phone; ?></p>
                    <p><?= __('Date of Birth'); ?>: <?php echo $data['profile']->date_of_birth; ?></p>
                    <p><?= __('Email'); ?>: <?php echo $data['user']->email; ?></p>
                </div>

                <div class="membership">
                    <h2><?= __('Your Membership'); ?></h2>
                    <p><?= __('Type'); ?>: <?php echo $data['membership']->membership_type; ?></p>
                    <p><?= __('Expires on'); ?>: <?php echo $data['membership']->start_date; ?></p>
                </div>
            </div>

            <div class="stacked-sections">
                <div class="bookings">
                    <h2><?=__('Your Bookings'); ?></h2>
                    <ul>
                        <?php foreach ($data['bookings'] as $booking): ?>
                            <li><?php echo $booking->date; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="camps">
                    <h2><?=__('Your Camps'); ?></h2>
                    <div class="camp-list">
                        <ul>
                            <?php foreach ($data['camps'] as $camp): ?>
                                <li class="camp-item">
                                    <strong><?= __('Player Information'); ?>: <?php echo $camp['first_name'] . ' ' . $camp['last_name']; ?></strong>
                                    <ul class="player-details">
                                        <li><?= __('Type'); ?>: <?php echo $camp['camp_type']; ?></li>
                                        <li><?= __('Registration Date'); ?>: <?php echo $camp['timestamp']; ?></li>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="reviews">
                    <h2><?= __('Your Reviews'); ?></h2>
                    <div class="camp-list">
                        <ul>
                            <?php foreach ($data['reviews'] as $review): ?>
                                <li class="camp-item">
                                    <strong><?php echo $review->review_text ?></strong>
                                    <ul class="player-details">
                                        <li><?= __('Type'); ?>: <?php echo $review->type; ?></li>
                                        <li><?= __('Rating'); ?>: <?php echo $review->rating; ?></li>
                                    </ul>
                                    <div class="btn-container">
                                        <a href="/User/review/edit?id=<?php echo $review->review_id; ?>" class="btn"><?php echo __('Edit'); ?></a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
