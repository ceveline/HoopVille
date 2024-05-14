<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/styles/publication_list_user.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</head>
<style>
        

        .container {
            margin: 0 auto;
            flex-direction: column;
            align-items: center;
        }

        .main-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .reviews {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .review-item {
            margin-bottom: 20px;
            width: 1200px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            align-items: center;
            margin-left: 150px;
            transition: box-shadow 0.3s ease, transform 0.3s ease; /* Smooth transitions for box-shadow and transform */


        }

        .review-item h3 {
            margin-bottom: 10px;
        }

        .review-text {
            margin-bottom: 10px;
        }

        .rating {
            display: inline-flex;
            align-items: center;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            cursor: pointer;
            width: 30px;
            height: 30px;
            background-image: url('/assets/images/star-empty-icon.webp');
            background-size: cover;
            margin-right: 5px;
        }

        .review-item:hover {
            box-shadow: 8 12px 16px rgba(0, 0, 0, 0.2); 
            transform: scale(1.05); 

        }

        input[type="radio"]:checked ~ label {
            background-image: url('/assets/images/star_icon_full.png');
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="main-title">
                <h1><?= __('ALL REVIEWS') ?></h1>
            </div>
            <?php foreach ($data as $review): ?>
                <div class="review-item">
                    <div class="title">
                        <h3><?= $review->type;?></h3>
                    </div>
                    <div class="review-text">
                        <p><?= $review->review_text; ?></p>
                    </div>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" <?php echo ($review->rating == 5) ? 'checked' : ''; ?> disabled>
                        <label for="star5"></label>

                        <input type="radio" id="star4" name="rating" value="4" <?php echo ($review->rating == 4) ? 'checked' : ''; ?> disabled>
                        <label for="star4"></label>

                        <input type="radio" id="star3" name="rating" value="3" <?php echo ($review->rating == 3) ? 'checked' : ''; ?> disabled>
                        <label for="star3"></label>

                        <input type="radio" id="star2" name="rating" value="2" <?php echo ($review->rating == 2) ? 'checked' : ''; ?> disabled>
                        <label for="star2"></label>

                        <input type="radio" id="star1" name="rating" value="1" <?php echo ($review->rating == 1) ? 'checked' : ''; ?> disabled>
                        <label for="star1"></label>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>