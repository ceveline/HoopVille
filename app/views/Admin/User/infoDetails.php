<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Profile Information') ?></title>
    <link rel="stylesheet" href="/assets/styles/infoDetails.css">
</head>

<body>
    <div class="background">
        <div class="content-container">
            <h1><?= __('Profile Information') ?></h1>
            <div class="profile-info">
                <p><strong><?= __('Name:') ?></strong> <span class="value"><?= $profile->first_name ?>
                        <?= $profile->last_name ?></span></p>
                <p><strong><?= __('Email:') ?></strong> <span
                        class="value"><?= isset($profile->email) ? $profile->email : __('N/A') ?></span></p>
                <p><strong><?= __('Phone:') ?></strong> <span
                        class="value"><?= isset($profile->phone) ? $profile->phone : __('N/A') ?></span></p>
                <!-- Display membership information -->
                <?php if ($membership): ?>
                    <h2 class="section-title"><?= __('Membership Information') ?></h2>
                    <div class="membership-details">
                        <p><strong><?= __('Type:') ?></strong> <span class="value"><?= $membership->membership_type ?></span></p>
                        <p><strong><?= __('Register Date:') ?></strong> <span class="value"><?= $membership->start_date ?></span></p>
                        <p><strong><?= __('Expiry Date:') ?></strong> <span class="value"><?= $membership->end_date ?></span></p>
                        <!-- Cancel membership button -->
                        <div class="cancel-button-container">
                            <form action="/Membership/cancelMembership/<?= $profile->profile_id ?>" method="post">
                                <input type="hidden" name="membership_id" value="<?= $membership->membership_id ?>">
                                <button type="submit" class="cancel-button"><?= __('Cancel Membership') ?></button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- Display booking information -->
                <?php if ($bookings): ?>
                    <h2 class="section-title"><?= __('Booking Information') ?></h2>
                    <ul class="booking-list">
                        <?php foreach ($bookings as $booking): ?>
                            <li>
                                <?= $booking->booking_type ?><br><br>
                                - <?= __('Date:') ?> <?= $booking->date ?>, <?= __('Time:') ?> <?= $booking->start_time ?> <?= __('to') ?> <?= $booking->end_time ?>
                                <!-- Cancel booking button -->
                                <div class="cancel-button-container">
                                    <form action="/Booking/cancelBooking/<?= $profile->profile_id ?>" method="post"
                                        style="display:inline;">
                                        <input type="hidden" name="booking_id" value="<?= $booking->booking_id ?>">
                                        <button type="submit" class="cancel-button"><?= __('Cancel Booking') ?></button>
                                    </form>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <!-- Display camp information -->
                <?php if ($camps): ?>
                    <h2 class="section-title"><?= __('Camp Information') ?></h2>
                    <ul class="camp-list">
                        <?php foreach ($camps as $camp): ?>
                            <li><?= $camp->camp_type ?><br><br>
                                <?php if (isset($camp->guest_name)): ?> <!-- Check if guest information exists -->
                                    - <?= __('Guest:') ?> <?= $camp->guest_name ?> <!-- Display guest name -->
                                <?php endif; ?>
                                <!-- Cancel camp button -->
                                <div class="cancel-button-container">
                                    <form action="/Camp/cancelCamp/<?= $profile->profile_id ?>" method="post"
                                        style="display:inline;">
                                        <input type="hidden" name="camp_id" value="<?= $camp->camp_id ?>">
                                        <button type="submit" class="cancel-button"><?= __('Cancel Camp') ?></button>
                                    </form>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <!-- Delete profile button -->
                <?php if (isset($profile)): ?>
                    <div class="delete-profile-container">
                        <form action="/Profile/delete/<?= $profile->profile_id ?>" method="post">
                            <input type="hidden" name="profile_id" value="<?= $profile->profile_id ?>">
                            <button type="submit" class="delete-button"><?= __('Delete Profile') ?></button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>
