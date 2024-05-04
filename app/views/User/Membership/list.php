<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership options</title>
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
    display: flex; /* Added */
    flex-direction: column; /* Added */
    justify-content: center; /* Added */
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
    height: 150px;
    margin-right: 45px;
    border-radius: 20px;
    margin-bottom: 10px;
    object-fit: cover; 
    box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px; 
    transition: transform 0.3s ease; 
}

        .form-container:hover {
    background-color: #F4F4F4; 
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

    </style>
</head>
<body>
    <div style='height: 200px'></div>
    <h1>Memberships</h1>
    <div class='container'>
    <?php foreach($data as $membership): ?>
        <div class="form-container">
            <h3><?php echo $membership->membership_type; ?></h3> 
            <img src="/assets/images/spring.png" alt="<?php echo $membership->membership_type; ?>" class="camp-image">
            <p><?php echo $membership->description; ?></p>
            <p><?php echo "Monthly Price: $membership->monthly_price$" ?></p>
            <form action="registration_page.php" method="post">
                <input type="hidden" name="membership_type" value="<?php echo $membership->membership_type; ?>">
                <input type="hidden" name="monthly_price" value="<?php echo $membership->monthly_price; ?>">
                <div class="btn"> <button type="submit">Join Now!</button></div>
            </form>
        </div>
        <?php endforeach; ?>
       
    </div>
</body>
</html>
