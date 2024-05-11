<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>
    <style>
       .background {
    min-height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
}

.content {
    height: 550px;
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

.cost{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 25px;
    font-weight: bolder;
}

.register-form input[type="text"],

.register-form input[type="date"] {
    width: 248px;
    height: 32px;
    border-radius: 10px;
    padding-left: 10px;
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

button:hover{
    background-color: #fbd467;
}

.form-container{
  width: 1000px;
            height: auto;
            background-color: white;
            margin-top: 20px;
            padding: 20px;
            border-radius: 1rem;
            margin-left: 250px;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

    .purchaseType{
        color:black;
       
    }

    h1 {
            padding: 10px;
            color: black;
            background-color: #FFDE59;
            text-align: center;
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



input[type="text"]{
    color: black;
}

option,select{
    color:black;
}

textarea{
    color:black;
    margin:
}

button {
    margin-top: 20px;
    text-align: center;
}

button{
    display: inline-block;
    padding: 10px 20px;
    width: 200px;
    background-color: #FFDE59; /* Orange background color */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #F44336; /* Darker orange on hover */
}



.form-section {
  margin-bottom: 50px;
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