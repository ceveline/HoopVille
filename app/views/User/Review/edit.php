<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=__('Update Review')?></title>
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

button,  {
    height: 34px;
    width: 124px;
    font-size: 0.93rem;
    margin-top: 18px;
    margin-bottom: 45px;
    border-radius: 0.6rem;
    border: none;
    background-color: #ffda76;
}

button:hover, .delete:hover{
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

button, .delete{
    display: inline-block;
    padding: 10px 20px;
    width: 200px;
    background-color: #FFDE59; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover, .delete:hover {
    background-color: #F44336; 
}



.form-section {
  margin-bottom: 50px;
}
    


    </style>
</head>
<body>
    
    <div class='container'> 
        <form class="form-container" method="post" action="">
            <div class="form-section">
                <h2><?=__('Enter your Updated Review')?></h2>
                <textarea name="review_text" class="black-text" rows="5" cols="50" ><?= $data->review_text ?></textarea>
            </div>

            <div class="form-section">
                <h2><?=__('Select Your Updated Rating')?></h2>
                
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
                <button type="submit" name="update" id="update" value="update"><?=__('Update Review')?></button>
            </div>  
            <div class="form-section">
            <a href="/User/review/delete?id=<?php echo $data->review_id; ?>" class="delete" name="delete" id="delete"><?= __('Delete'); ?></a>
            </div>  
        </form>
    </div>
</body>
</html>
