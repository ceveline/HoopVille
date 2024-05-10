<!-- app/views/Review/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>
</head>
<body>
    <h1>All Reviews</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Review ID</th>
                <th>User ID</th>
                <th>Rating</th>
                <th>Review Text</th>
                <th>Timestamp</th>
                <th>Author First Name</th>
                <th>Author Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['review'] as $review) : ?>
                <tr>
                    <td><?php echo $review->review_id; ?></td>
                    <td><?php echo $review->user_id; ?></td>
                    <td><?php echo $review->rating; ?></td>
                    <td><?php echo $review->review_text; ?></td>
                    <td><?php echo $review->timestamp; ?></td>
                    <td><?php echo $review->first_name; ?></td>
                    <td><?php echo $review->last_name; ?></td>
                    <td><a href="/Review/delete/<?php echo $review->review_id; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
