<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camps</title>
    <style>
        * {
            margin: 0;
            color: white;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            margin-top: 30px;
        }

        .form-container {
          height:500px;
    width: 400px;
    background-color: ghostwhite;
    border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding: 10px;
    align-items: center;
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
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
            height: 40px;
            width: 225px;
            cursor: pointer;
            border: none;
            color: black;
            border-radius: 10px;
            margin-top: auto;
        
        }

        button:hover {
            transition: 0.2s;
            background-color: #FFCE00;
        }

        h1 {
            text-align: center;
        }

        h2 {
            color: black;
            text-align: center;
            margin-bottom: 10px;
        }

        


        .purchaseType {
            color: black;
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

        input[type="radio"]:checked~label {
            background-image: url('/assets/images/star_icon_full.png');
        }

        input[type="text"] {
            color: black;
        }

        option,
        select {
            color: black;
        }

        textarea {
            color: black;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .camp-image {
    width: 250px;
    height: 200px;
    margin-right: 45px;
    border-radius: 20px;
    margin-bottom: 10px;
    margin-left: 35px;
    object-fit: cover; 
    box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px; 
    transition: transform 0.3s ease; 
}

        .form-container:hover {
    background-color: #F4F4F4; 
    transform: scale(1.03); 
    transition: background-color 0.3s ease, transform 0.3s ease; 
}
.form-container h3 {
            margin-top: -20px; 
            padding: 5px;
            border-radius: 10px;
            background-color: black; 
            text-align: center;
            width: 100%;
            color: white;
            margin-bottom: 10px;
            font-size: 18px; 
        }
.campDays{
    font-weight: bolder;
}

        .btn{
          margin-top: 45px;
          font-weight: bold;
        }

        p{
          color: black;
        }

        h3{
          
            color: black;
            background-color: #FFDE59;
            text-align: center;
            width: 100%;
        }

        .camp-details p {
    margin-bottom: 10px;
    font-size: 16px;
    line-height: 1.5;
}

.description {
    font-weight: bold;
}

.price {
    color: #FF5722; 
}

.date {
    font-style: italic;
}

.registration-period {
    font-size: 14px;
    color: #777; 
}

.btn {
    margin-top: 20px;
    text-align: center;
}

.btn a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #FFDE59; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn a:hover {
    background-color: #F44336; 
}

    </style>
</head>
<body>
    <div style='height: 10px'></div>
    <h1>CAMPS</h1>
    <div class='container'>
    <?php foreach($data as $camp): ?>
        <div class="form-container">
            <h3><?php echo $camp->camp_type; ?></h3> 
            <img src="/assets/images/<?php echo $camp->price; ?>.png" alt="<?php echo $camp->camp_type; ?>" class="camp-image">
            <p><?php echo $camp->description; ?></p>
            <div class="campDays">
            <p>Camp Days</p>
    </div>
            <p><?php echo "$camp->start_date to $camp->end_date"?></p>
            <div class="campDays">
                <p>Registration period:</p>
    </div>
            <p><?php echo "$camp->registration_start to $camp->registration_end"; ?></p>
            <form action="" method="post">
                <div class="btn">
                    <a href="/User/camp/buy?camp_type=<?php echo $camp->camp_type; ?>">Join Now for <?php echo "$camp->price$"; ?>!</a>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
        
       
    </div>
</body>
</html>
