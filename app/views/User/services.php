<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        * {
            margin: 0;
            color: white;
        }

        .background {
            min-height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            margin-top: 30px;
            min-height: 100%;
        }

        .form-container {
            height:400px;
            width: 350px;
            background-color: ghostwhite;
            border-radius: 20px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 10px;
            margin-left: 8cap0px;
            margin-top: 50px;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center; 
        }

        .form-container2 {
            height:400px;
            width: 350px;
            background-color: ghostwhite;
            border-radius: 20px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 10px;
            margin-left: 8cap0px;
            margin-top: 25px;
            align-items: center;
            display: flex; /* Added */
            flex-direction: column; /* Added */
            justify-content: center; /* Added */
        }
        
        .form-container2:hover {
            background-color: #F4F4F4;
            transform: scale(1.03);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .form-container2 h3 {
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

        .title h1 {
            text-align: center;
            font-size: 2rem;
            text-transform: uppercase;
            text-shadow: 0.2px 2px 8px #00000082;
            color: white;
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

        .images {
            width: 250px;
            height: 150px;
            margin-right: 45px;
            border-radius: 20px;
            margin-bottom: 10px;
            margin-left: 30px;
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
        }
        .subtitle p{
            font-weight: bolder;
            color: black;
        }

        .btn{
            margin-top: 45px;
            font-weight: bold;
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


        .training p {
            color: black;
            text-align: center;
        }


    </style>
</head>
<body>
<div class="background">
    <div style='height: 30px'></div>
    <div class="title">
        <h1><?=__('Services')?></h1>
    </div>
    <div class='container'>

        <div class="form-container">
            <h3><?=__('Camp')?></h3>
            <img src="/assets/images/servicescamp.jpg" alt="<?=__('camp')?>" class="images">
            
            <div class="subtitle">
                <p><?=__('Ultimate Training Camp')?></p>
            </div>
            <div class="training">
            <p><?=__('Exclusive Camp league to achieve better basketball skills!')?></p>
            </div>
            
            <form action="" method="post">
                <div class="btn">
                    <a href="/User/camp/list"><?=__('Learn more!')?></a>
                </div>
            </form>
        </div>

        <div class="form-container2">
            <h3><?=__('Booking')?></h3>
            <img src="/assets/images/servicesbooking.jpg" alt="<?=__('booking')?>" class="images">
            
            <div class="subtitle">
                <p><?=__('Booking system')?></p>
            </div>

            <div class="training">
                <p><?=__('Flexible booking system to have an open court for you and your friends!')?></p>
            </div>
            <form action="" method="post">
                <div class="btn">
                    <a href="/User/booking/create"><?=__('Learn more!')?></a>
                </div>
            </form>
        </div>

        <div class="form-container">
            <h3><?=__('Membership')?></h3>
            <img src="/assets/images/servicesmembership.jpg" alt="<?=__('membership')?>" class="images">
            
            <div class="subtitle">
                <p><?=__('Innovative membership plan!')?></p>
            </div>
            <div class="training">
                <p><?=__('Register for an effective membership plan to help you achieve your athletic goals!')?></p>
            </div>            
            <form action="" method="post">
                <div class="btn">
                    <a href="/Membership"><?=__('Learn more!')?></a>
                </div>
            </form>
        </div>

    </div>
    </div>
</div>
</body>
</html>
