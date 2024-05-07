<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>FAQ</title>
    <style>
        .background{
            min-height: 100%;
            min-width: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            /* margin: 0; */
            /* padding: 0; */
            position: absolute;
        }
        .content{
            min-height: 100%;
            background-color: white;
            margin: 30px 240px;
            padding: 12px;
        }

        .title{
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }
        .question1, .question2, .question3, .question4{
            /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
            border-radius: 1rem;
            display: flex;
            flex-direction: column;
            padding-left: 10px;
            margin-top: 15px;
            
        }

        .q1, .q2, .q3, .q4 {
            background-color: #ffda76;
            min-height: 30px; /* Set a minimum height */
            display: flex;
            align-items: center;
            word-wrap: break-word;
            padding: 10px; /* Add padding to create space inside the box */
            margin-top: 15px; /* Add margin to create space between questions */
            border-radius: 1rem;
        }

        .a1, .a2, .a3, .a4 {
            background-color: #fdf6e3;
            height: 30px;
            display: flex;
            align-items: center;
            padding: 10px; /* Add padding to create space inside the box */
            border-radius: 1rem;
        }

        /* Adjust padding for the anchor element */
        .q1 a, .q2 a, .q3 a, .q4 a {
            padding-left: 5px; /* Add left padding to the anchor element */
        }


        p {
            padding-left: 10px;
        }

    </style>
    <script>
            $(document).ready(function() {
                var a1 = $('.a1');
                var a2 = $('.a2');
                var a3 = $('.a3');
                var a4 = $('.a4');
                $('.a1, .a2, .a3, .a4').hide();

                $('.q1 a').click(function() {
                    $('.a1').toggle(); // Toggle visibility of answer when the question is clicked
                });
                $('.q2 a').click(function() {
                    $('.a2').toggle(); // Toggle visibility of answer when the question is clicked
                });
                $('.q3 a').click(function() {
                    $('.a3').toggle(); // Toggle visibility of answer when the question is clicked
                });
                $('.q4 a').click(function() {
                    $('.a4').toggle(); // Toggle visibility of answer when the question is clicked
                });
            });

    </script>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="title">
                <h1>Frequently Asked Question</h1>
            </div>
            <hr class="solid">
            <div class="questions">
                <div class="question1">
                    <div class="q1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum? <a href="#">+</a></p>
                    </div>
                    <div class="a1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum.</p>
                    </div>
                </div>
                <div class="question2">
                    <div class="q2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum? <a href="#">+</a></p>
                    </div>
                    <div class="a2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum.</p>
                    </div>
                </div>
                <div class="question3">
                    <div class="q3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum? <a href="#">+</a></p>
                    </div>
                    <div class="a3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum.</p>
                    </div>
                </div>
                <div class="question4">
                    <div class="q4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum? <a href="#">+</a></p>
                        
                    </div>
                    <div class="a4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada nunc vel quam dignissim, ac ullamcorper turpis dictum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>