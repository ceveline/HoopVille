<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="/assets/styles/aboutUs.css"> -->
    <style>
        .background {
            min-height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
        }

        .about-section {
            display: flex;
            flex-direction: row;
            align-content: center;
            align-items: center;
            background-color: ghostwhite;
            width: 60%;
            padding: 12px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px; 
        }

        .about-section img {
            height: 400px;
        }

        .title {
            background-color: #FFDE59;
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 30px;
            padding: 10px;
            margin-bottom: 30px;
            font-size: 1rem;
            color: white;
            text-transform: uppercase;
            text-shadow: 0.2px 2px 8px #00000082;
        }

        .text-column{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .desc{
            text-align: justify;
            line-height: 1.5rem;
            padding: 20px;
        }

        .subtitle h2{
            font-size: 2.5rem;
            text-transform: uppercase;
        }
        

    </style>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <div class="about-section">
                <div class="image-column">
                    <img src="/assets/images/aboutUs2.jpg" alt="About Us Image">
                </div>
                <div class="text-column">
                    <div class="subtitle">
                        <h2>HoopVille</h2>
                    </div>
                    <div class="desc">
                        <p>
                            Hoopville is a private multi-sport performance center that is focused on the sport of basketball. 
                            The facility will be located in Montreal, Quebec catering to athletes of all sports, all levels and all ages.
                            Our mission is to provide a welcoming and supportive environment where athletes can develop their craft without limitations/restrictions.
                            With experienced and proven coaches/ownership, state-of-the art equipment and a variety of services tailored to the community of Montreal, we aim to become the go-to basketball facility in the area.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
