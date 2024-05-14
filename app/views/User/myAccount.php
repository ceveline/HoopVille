<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Account</title>
    <style>
        /**similar css to everything else */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .background {
            min-height: 100%;
            /* background-color: #f2f2f2; */
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            /* justify-content: center; */
            align-items: center;
        }

        .container {
            max-width: 1200px;
            width: 90%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 30px;
            /* min-height: 100%; */
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

        .container p {
            color: black;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }


       /**organizing classes css to everything else */
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
            line-height: 2rem;
        }

        .bookings {
    list-style-type: none;
}

.itemsToList {
    padding: 10px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Shadow effect */
    transition: box-shadow 0.3s, transform 0.3s; /* Smooth transition */
}

.itemsToList:hover {
    box-shadow: 0px 6px 10px rgba(255, 173, 51, 0.5); /* Slightly yellow-orange shadow on hover */
    transform: translateY(-2px); /* Move the list slightly up on hover */
}

.bookings li {
    margin-bottom: 20px;
    position: relative; 
}


.bookings li a.btn {
    position: absolute;
    right: 0;
    bottom: 20px;
}

.reviews li {
    margin-bottom: 20px;
    position: relative; 
}


.reviews li a.btn {
    bottom: 12px;
    position: absolute;
    right: 0;
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

            .membership{
                display: flex;
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
                    <a href="/User/profile/edit?id=<?php echo $data['profile']->profile_id?>" class="btn btn-primary"><?= __('Modify Profile'); ?></a>

                </div>

                <div class="membership">
                    <h2><?= __('Your Membership'); ?></h2>
                    <!-- <p><?= __('Type'); ?>: <?php $membership->membership_type; ?></p> -->
                    <!-- <p><?= __('Expires on'); ?> <?php echo $data['membership']->end_date; ?></p> -->
                    <!-- <a href="/Membership/individual" class="btn btn-primary"><?= __('Modify Membership'); ?></a> -->
                    <?php include('app/views/User/Membership/individual.php'); ?>
                </div>
            </div>

            <div class="stacked-sections">
                <div class="bookings">
                    <h2><?=__('Your Bookings'); ?></h2>
                    <ul class="itemsToList">
                    <?php foreach ($data['bookings'] as $booking): ?>
        <li>
        <span><strong>Date: <?php echo $booking->date; ?></strong></span><br>
            <span>Type: <?php echo $booking->booking_type ?> court</span><br>
            <span>Start Time: <?php echo $booking->start_time?> to <?php echo $booking->end_time?></span><br>
            <span>Status: 
                <?php if ($booking->status == 1) {
                    echo 'Accepted';
                } else if ($booking->status == 0) {
                    echo 'Pending';
                } elseif ($booking->status == 2) {
                    echo 'Declined';
                }   else {
                    echo 'Unknown';
                } ?>
            </span>
            <a href="/Booking/edit?id=<?php echo $booking->booking_id?>" class="btn btn-primary"><?= __('Modify'); ?></a>
        </li>
    <?php endforeach; ?>

                    </ul>
                </div>

                <div class="camps">
                    <h2><?=__('Your Camps'); ?></h2>
                    <div class="camp-list">
                    <ul class="itemsToList">
                            <?php foreach ($data['camps'] as $camp): ?>
                                <li>
                                    <strong><?= __('Player Information'); ?>: <?php echo $camp['first_name'] . ' ' . $camp['last_name']; ?></strong>
                                        <li><?= __('Type'); ?>: <?php echo $camp['camp_type']; ?></li>
                                        <li><?= __('Registration Date'); ?>: <?php echo $camp['timestamp']; ?></li>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="reviews">
                    <h2><?= __('Your Reviews'); ?></h2>
                    
                    <ul class="itemsToList">
                            <?php foreach ($data['reviews'] as $review): ?>
                                <li>
                                    <span><strong><?php echo $review->review_text ?></strong></span><br>
                                    
                                        <span><?= __('Type'); ?>: <?php echo $review->type; ?></span><br>
                                        <span><?= __('Rating'); ?>: <?php echo $review->rating; ?></span>
                                   
                                    
                                        <a href="/User/review/edit?id=<?php echo $review->review_id; ?>" class="btn"><?php echo __('Edit'); ?></a>

                                       
                                  
                                </li>
                            <?php endforeach; ?>
                        </ul>


                      
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>


