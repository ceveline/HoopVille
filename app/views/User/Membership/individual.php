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
            <div class="page2"> 
                <div class="title">Modify Membership</div>
                <form method='POST' action='/User/membership/edit/<?=$membership->membership_id?>'>
                    <div class="dropdown-menu">
                        <div class="subtitle">
                            <p>Select membership:</p>
                        </div>
                        <select name="membership_type">
                        <!-- Option for Base Training (outside the loop) -->
                        <?php if ($membership->membership_type == 'Base Training') : ?>
                            <option name='membership_type' id='membership_type' value="Base Training" selected>Base Training</option>
                        <?php endif; ?>

                        <!-- Loop through other membership types -->
                        <?php foreach ($types as $type) : ?>
                            <?php if ($membership->membership_type != 'Base Training') : ?>
                                <option name='membership_type' id='membership_type' value="<?= $type->membership_type ?>" <?= ($type->membership_type == $membership->membership_type) ? 'selected' : '' ?>>
                                    <?= $type->membership_type ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>

                    </div>
                    <div class="modify-btn">
                        <input type='submit' value='Modify'></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>