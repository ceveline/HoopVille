<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Account</title>
    <style>
        .background {
            min-height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
        }

        .content {
            height: 650px;
            width: 850px;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding-top: 38px;
            margin: auto;
            margin-top: 204px;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .register-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 34px;
        }

        .profile {
            height: 650px;
            width: 850px;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding-top: 38px;
            margin: auto;
            margin-top: 204px;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .last-name {
            display: flex;
        }

        h1 {
            text-align: center;
        }

        .register-form label {
            margin-bottom: 5px;
            width: 140px;
        }

        .inputs {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 25px;
        }

        .cost {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 25px;
            font-weight: bolder;
        }



        button {
            height: 34px;
            width: 124px;
            font-size: 0.93rem;
            margin-top: 18px;
            margin-bottom: 45px;
            border-radius: 0.6rem;
            border: none;
            background-color: #ffda76;
        }

        ul {
            list-style-type: none;
        }

        .player-details {
            margin-left: 20px;
        }

        .player-details li {
            margin-bottom: 5px;
        }

        strong {
            font-weight: bold;
        }


        button a:hover {
            background-color: #fbd467;
        }

        .btn-container {
            text-align: right;
        }

        .btn {
            text-align: center;
            display: inline-block;
            padding: 5px 10px;
            background-color: #ffda76;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 30px;


        }

        .btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FFDE59;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .camps {
            max-height: 400px;
            overflow-y: auto;
        }

        .camp-list {
            padding: 10px;
        }

        .player-details {
            margin-left: 20px;
        }

        .player-details li {
            margin-bottom: 5px;
        }

        strong {
            font-weight: bold;
        }


        .btn a:hover {
            background-color: #F44336;
        }

        .inline-inputs {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .inline-inputs label {
            flex: 1;
            margin-right: 10px;
        }

        .inline-inputs input[type="text"] {
            flex: 1;
            max-width: 150px;
            height: 32px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 5px;
        }

        .background {
            min-height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .profile {
            width: 300px;
            height: auto;
            background-color: white;
            padding: 20px;
            border-radius: 1rem;
            margin-left: 55px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .membership {
            width: 300px;
            height: auto;
            background-color: white;
            padding: 20px;
            border-radius: 1rem;
            margin-top: 50px;
            margin-left: 55px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }


        .camps {
            width: 1000px;
            height: auto;
            background-color: white;
            margin-top: 20px;
            padding: 20px;
            border-radius: 1rem;
            margin-left: 50px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .bookings {
            width: 1000px;
            height: 300px;
            background-color: white;
            margin-left: 50px;

            padding: 20px;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .bookings h1,
        .camps h1 {
            margin-top: 0;
        }

        @media (max-width: 768px) {
            .background {
                flex-direction: column;
                align-items: center;
            }

            .profile,
            .bookings,
            .camps {
                width: 100%;
                margin: 0 0 20px 0;
            }

            .bookings,
            .camps {
                order: 1;
            }
        }

        .camp-list {
            padding: 10px;
        }

        .camp-item {
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }

        .camp-item:hover {
            background-color: #F4F4F4;
            transform: scale(1.03);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .player-details {
            margin-left: 20px;
        }

        .player-details li {
            margin-bottom: 5px;
        }

        .camp-divider {
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="background">

        <div class="stacked-sections">
            <div class="profile">
                <h2><?=__('Your Profile')?></h2>


                <p><?=__('First Name')?>: <?php echo $data['profile']->first_name; ?></p>
                <p><?=__('Last Name')?>: <?php echo $data['profile']->last_name; ?></p>
                <p><?=__('Phone')?>: <?php echo $data['profile']->phone; ?></p>
                <p><?=__('Date of Birth')?>: <?php echo $data['profile']->date_of_birth; ?></p>
                <p><?=__('Email')?>: <?php echo $data['user']->email; ?></p>

            </div>


            <div class="membership">
                <h2><?=__('Your Membership')?></h2>
                <p><?=__('Type')?>: <?php echo $data['membership']->membership_type; ?></p>
                <p><?=__('Expires on')?>: <?php echo $data['membership']->start_date; ?></p>
            </div>
        </div>

        <div class="stacked-sections">
            <div class="bookings">
                <h1><?=__('Your Bookings')?></h1>
                <ul>
                    <?php foreach ($data['bookings'] as $booking): ?>
                        <li><?php echo $booking->date; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="camps">
                <h1><?=__('Your Camps')?></h1>
                <div class="camp-list">
                    <ul>
                        <?php foreach ($data['camps'] as $camp): ?>
                            <hr class="camp-divider">

                            <li class="camp-item">
                                <strong><?=__('Player Information')?>:
                                    <?php echo $camp['first_name'] . ' ' . $camp['last_name']; ?></strong>
                                <ul class="player-details">
                                    <li><?=__('Type')?>: <?php echo $camp['camp_type']; ?></li>
                                    <li><?=__('Registration Date')?>: <?php echo $camp['timestamp']; ?></li>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>


            <div class="camps">
                <h1><?=__('Your Reviews')?></h1>
                <div class="camp-list">
                    <ul>
                        <?php foreach ($data['reviews'] as $review): ?>
                            <hr class="camp-divider">
                            <li class="camp-item">
                                <strong><?php echo $review->review_text ?></strong>
                                <ul class="player-details">
                                    <li><?=__('Type')?>: <?php echo $review->type; ?></li>
                                    <li><?=__('Rating')?>: <?php echo $review->rating; ?></li>
                                </ul>
                                <div class="btn-container">
                                    <a href="/User/review/edit?id=<?php echo $review->review_id; ?>" class="btn"><?=__('Edit')?></a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>


        </div>

    </div>






</body>

</html>