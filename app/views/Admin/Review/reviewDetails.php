<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Review') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/styles/reviewDetails.css">
</head>

<body>
    <div class="background">
        <div class="content">
            <h1><?= __('Review') ?></h1>
            <div class="review-header">
                <p class="reviewer-info"><strong><?= __('Written by:') ?> </strong>
                    <?php echo $data['userDetails']['first_name'] . ' ' . $data['userDetails']['last_name']; ?>
                    (<?php echo $data['userDetails']['email']; ?>) (<?php echo $data['userDetails']['phone']; ?>)</p>
                <p class="review-date"><?php echo date('Y/m/d', strtotime($data['review']->timestamp)); ?></p>
            </div>
            <!-- Link to profile details -->
            <div class="info-details">
                <a href="/Profile/infoDetails/<?php echo $data['userDetails']['profile_id']; ?>"><?php echo __('View Profile') ?></a>
            </div>
            <div class="review-details">
                <p class="rating">
                    <?php
                    $rating = $data['review']->rating;
                    // Generate star icons based on the rating value
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $rating) {
                            echo '<i class="fas fa-star"></i>'; // Solid star icon
                        } else {
                            echo '<i class="far fa-star"></i>'; // Empty star icon
                        }
                    }
                    ?>
                </p>
                <p class="review-text"><?php echo $data['review']->review_text; ?></p>
            </div>

            <div class="button-group">
                <!-- Link to delete review -->
                <a href="/Review/deleteReview/<?php echo $data['review']->review_id; ?>" class="delete-button"><?php echo __('Delete Review') ?></a>
            </div>
        </div>
    </div>
</body>

</html>
