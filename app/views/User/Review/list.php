<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reviews</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
     header {
      background-color: black;
    }

    body {
      background: lightgray;
      text-align: center;
      color: black;
     
  align-items: center;
    }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            padding: 10px;
            color: #333;
            background-color: #FFDE59;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #FFDE59;
            color: #333;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .rating {
            display: inline-flex;
            flex-direction: row-reverse;
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
        }

        input[type="radio"]:checked ~ label {
            background-image: url('/assets/images/star_icon_full.png');
        }

    </style>
</head>
<body>
<div style='height: 200px'>
  </div>
    <h1>ALL REVIEWS</h1>
    <div class='container'> 
    <form class="form-container">
    
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <thead>
                <tr>
                  <th>Purchase Type</th>
                    <th>Review Text</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($data as $review): ?>
                    <tr>
                    <td><?php echo $review->type; ?></td>
                        <td><?php echo $review->review_text; ?></td>
                        <td><div class="rating">
    <input type="radio" id="star5" name="rating" value="5" <?php echo ($review->rating == 5) ? 'checked' : ''; ?>>
    <label for="star5"></label>

    <input type="radio" id="star4" name="rating" value="4" <?php echo ($review->rating == 4) ? 'checked' : ''; ?>>
    <label for="star4"></label>

    <input type="radio" id="star3" name="rating" value="3" <?php echo ($review->rating == 3) ? 'checked' : ''; ?>>
    <label for="star3"></label>

    <input type="radio" id="star2" name="rating" value="2" <?php echo ($review->rating == 2) ? 'checked' : ''; ?>>
    <label for="star2"></label>

    <input type="radio" id="star1" name="rating" value="1" <?php echo ($review->rating == 1) ? 'checked' : ''; ?>>
    <label for="star1"></label>
</div> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

   

  
  </form>
    </div>
    

    
</body>
</html>