<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('All Reviews') ?></title>
    <link rel="stylesheet" href="/assets/styles/reviewList.css">
</head>

<body>
    <div class="background">
        <div class="content-container">
            <h1><?= __('All Reviews') ?></h1>
            <form action="/Review/search" method="GET" class="search-form">
                <div class="search-container">
                    <input type="text" id="search" name="query" placeholder="<?= __('Search') ?>" class="search-text">
                    <button type="submit" class="search-button"><?= __('Search') ?></button>
                </div>
            </form>
            <form action="/Review/filterByStars" method="GET" class="filter-form">
                <div class="filter-container">
                    <label for="stars-filter"><?= __('Filter:') ?></label>
                    <select name="filter" id="stars-filter" class="filter-dropdown">
                        <option value="most_stars"><?= __('Most Stars') ?></option>
                        <option value="least_stars"><?= __('Least Stars') ?></option>
                    </select>
                    <button type="submit" class="filter-button"><?= __('Apply') ?></button>
                </div>
            </form>
            <table>
                <tbody>
                    <?php if (isset($data['reviews'])): ?>
                        <?php foreach ($data['reviews'] as $review): ?>
                            <tr>
                                <td><?php echo $review->first_name; ?></td>
                                <td><?php echo $review->last_name; ?></td>
                                <td class="rating">
                                    <?php
                                    $rating = $review->rating;
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $rating) {
                                            echo '<i class="fas fa-star"></i>';
                                        } else {
                                            echo '<i class="far fa-star"></i>';
                                        }
                                    }
                                    ?>
                                </td>
                                <td><?php echo strlen($review->review_text) > 10 ? substr($review->review_text, 0, 10) . '...' : $review->review_text; ?>
                                </td>
                                <td>
                                    <a href="/Review/deleteReview/<?php echo $review->review_id; ?>"
                                        class="delete-button"><?= __('Delete') ?></a>
                                </td>
                                <td>
                                    <a href="/Review/reviewDetails/<?php echo $review->review_id; ?>"
                                        class="info-button"><?= __('Info') ?></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><?= __('No reviews found.') ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
