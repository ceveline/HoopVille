<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Review</title>
    <style>
         *      * {
            margin: 0;
            color: white;
        }

        .container {
      height: 500px;
      width: 1000px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
      background-color: ghostwhite;
      border-radius: 10px;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    h1 {
      padding: 10px;
      color: black;
      background-color: #FFDE59;
      text-align: center;
    }


    button {
      margin: 0 20px;
      background-color: #FFDE59;
      height: 30px;
      width: 80px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
    }

    button:hover {
      transition: 0.2s;
      background-color: #FFCE00;
    }

    

    h1{
        text-align: center;
    }

    h2{
        color: black;
        text-align: center;
        margin-bottom: 10px;
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

    .purchaseType{
        color:black;
       
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

.form-container {
  display: flex;
  flex-direction: column;
}

.form-section {
  margin-bottom: 50px;
}
    
    

    </style>
</head>
<body>
    <div style='height: 200px'></div>
    <h1>UPDATE REVIEW</h1>
    <div class='container'> 
        <form class="form-container" method="post" action="">
            
          
     
            <div class="form-section">
                <h2>Enter your Updated Review</h2>
                <textarea name="review_text" value='<?= $data->review_text ?>' class="black-text" rows="5" cols="50" >'<?= $data->review_text ?>'</textarea>
            </div>

        

            <div class="form-section">
                <h2>Select Your Updated Rating</h2>
                
                <div class="rating">
    <input type="radio" id="star5" name="rating" value="5" <?php echo ($data->rating == 5) ? 'checked' : ''; ?>>
    <label for="star5"></label>

    <input type="radio" id="star4" name="rating" value="4" <?php echo ($data->rating == 4) ? 'checked' : ''; ?>>
    <label for="star4"></label>

    <input type="radio" id="star3" name="rating" value="3" <?php echo ($data->rating == 3) ? 'checked' : ''; ?>>
    <label for="star3"></label>

    <input type="radio" id="star2" name="rating" value="2" <?php echo ($data->rating == 2) ? 'checked' : ''; ?>>
    <label for="star2"></label>

    <input type="radio" id="star1" name="rating" value="1" <?php echo ($data->rating == 1) ? 'checked' : ''; ?>>
    <label for="star1"></label>
</div>


            </div>

            <div class="form-section">
                <button type="submit" name="action" value="update">Update Review</button>
            </div>
        </form>
    </div>
</body>
</html>
