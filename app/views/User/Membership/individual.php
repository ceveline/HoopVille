<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Membership</title>

    <style>
        .content{
            background-color: white;
            width: 30%;
            padding: 15px;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            line-height: 30px;
        }
        .content .title{
            border-bottom: 1px solid #ccc;
            padding-bottom: 7px;
            margin-bottom: 10px;
            word-wrap: break-word;
            line-height: 1.8;
            font-size: 1.4rem;
            font-weight: bold;
        }
        .page1 #m-type{
            font-weight: bold;
        }
        .page1 .start-date, .page1 .end-date{
            display: flex;
        }
        .page1 #start-date, .page1 #end-date{
            margin-left: 5px;
        }
    </style>
    <script>
        $(document).ready(function() {
            //get the button
            var modifyBtn = $("#edit-btn");
            var page1 = $('.page1');

            modifyBtn.click(function() {
                // page1.hide();
            });

        });

    </script>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="title">My Membership</div>
            <div class="page1">
                <div class="m-type">
                    <p id='m-type'><?=$membership->membership_type?></p>
                </div>
                <div class="start-date">
                    <p>Start date:</p><p id='start-date'><?=$membership->start_date?></p>
                </div>
                <div class="end-date">
                    <p>End date:</p><p id='end-date'><?=$membership->end_date?></p>
                </div>
                <!-- <div class="price">
                    <p>Price:</p>
                    <p id='m-price'><?=$type->monthly_price?>/month</p>
                </div> -->
                <div class="button">
                    <div class="edit-btn">
                        <a id='edit-btn' href="#">Modify</a>
                    </div>
                </div>
            </div>

            <!-- modify membership -->
            
        </div>
    </div>
</body>
</html>