<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Membership</title>

    <style>
        .content{
            background-color: white;
            width: 100%;
            /* padding: 15px; */
            /* border-radius: 1rem; */
            /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
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
        .button, #cancelLink, #goBackLink, #modify-btn, #cancel-btn{
            display: flex;
            margin-top: 12px;
            justify-content: center;
        }
        .edit-btn, .delete-btn, #cancelLink, #goBackLink, #modify-btn, #cancel-btn{
            background-color: #ffd257;
            border: none;
            width: 190px;
            display: flex;
            justify-content: center;
            border-radius: 1rem;
            margin-right: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        #cancel-link, #edit-link, #cancelLink, #goBackLink{
            font-size: 13px;
        }

        .content  a:link { 
            text-decoration: none; 
            color: white;
            text-transform: uppercase;
            font-weight: bold;
        }
        .content  a:visited { text-decoration: none; color: white;}
        .content  a:hover { text-decoration: none; }
        .content  a:active { text-decoration: none; }

        #confirmationInput{
            font-size: 1rem;
        }

        select{
            font-size: 1rem;
        }

        .current p {
            font-weight: bold;
        }

        .buttons{
            display: flex;
            justify-content: center;
        }

        #cancel-btn, #modify-btn{
            height: 32px;
            font-size: 13px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }
    </style>
    <script>
        $(document).ready(function() {
            //get the button
            var modifyBtn = $("#edit-link");
            var cancelBtn = $("#cancel-link");
            var backBtn = $('#goBackLink');
            var page1 = $('.page1');
            var page2 = $('.page2');
            var cancel_page = $('.cancel-page');

            cancel_page.hide();
            page2.hide();

            modifyBtn.click(function() {
                page1.hide();
                cancel_page.hide();
                page2.show();

            });

            cancelBtn.click(function() {
                page1.hide();
                page2.hide();
                cancel_page.show();
            });

            backBtn.click(function() {
                page1.show();
                page2.hide();
                cancel_page.hide();
            });

            var modifyBtn_p2 = $("#modify-btn");
            var cancelBtn_p2 = $("#cancel-btn");

            cancelBtn_p2.click(function() {
                page1.show();
                page2.hide();
                cancel_page.hide();
            });

        });

    </script>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="page1">
                <!-- <div class="title">My Membership</div> -->
                <div class="m-type">
                    <?php if (isset($membership->membership_type)) :?>
                        <p id='m-type'><?=$membership->membership_type?></p>
                    <?php else : ?>
                        <p id='m-type'>None</p>
                    <?php endif; ?>
                </div>
                <div class="start-date">
                    <?php if (isset($membership->start_date)) :?>
                    <p><?= __('Start date:') ?></p><p id='start-date'><?=$membership->start_date?></p>
                    <?php else : ?>
                        <p><?= __('Start date:') ?></p><p id='m-type'>-</p>
                    <?php endif; ?>
                </div>
                <div class="end-date">
                <?php if (isset($membership->end_date)) :?>
                    <p><?= __('End date:') ?></p><p id='start-date'><?=$membership->end_date?></p>
                    <?php else : ?>
                        <p><?= __('End date:') ?></p><p id='m-type'>-</p>
                    <?php endif; ?>
                    <!-- <p>End date:</p><p id='end-date'><?=$membership->end_date?></p> -->
                </div>
                <div class="button">
                    <div class="edit-btn">
                        <?php if (isset($membership->membership_type)) :?>
                            <a id='edit-link' href="#"><?= __('Modify') ?></a>
                        <?php endif; ?>
                    </div>
                    <?php if (isset($membership->membership_type)) :?>
                        <?php if ($membership->membership_type != 'Base Training') : ?>
                            <div class="delete-btn">
                                <a id='cancel-link' href="#"><?= __('Cancel membership') ?></a>
                            </div>                        
                        <?php endif; ?>
                    <?php endif; ?>
                    
                </div>
            </div>

            <!-- modify membership -->
            
            <div class="page2">
                <div class="title"><?= __('Modify Membership') ?></div>
                <div class="current">
                    <p><?= __('Current membership plan:') ?>: <?= $membership->membership_type?></p>
                </div>

                <form method='POST' action='/User/membership/edit'>
                    <div class="dropdown-menu">
                        <div class="subtitle">
                            <p><?= __('Select a new membership:') ?></p>
                        </div>
                        <select name="membership_type">
                        <!-- Option for Base Training (outside the loop) -->
                        <?php if ($membership->membership_type == 'Base Training') : ?>
                            <option name='membership_type' id='membership_type' value="Base Training" selected><? __('Base Training') ?></option>
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
                    <div class="buttons">
                        <input id='modify-btn'type='submit' value='Modify'></input>
                        <input id='cancel-btn' type='button' value='Back'></input>
                    </div>
                </form>
            </div>

            <div class="cancel-page">
                <div class="title"><?= __('Confirm Membership Cancellation') ?></div>
                <p><?= __('Type') ?> "<?=$membership->membership_type?>" <?= __('in the box below to cancel your membership:') ?> </p>
                <input type="text" id="confirmationInput" placeholder="<?=$membership->membership_type?>"/>
                <div class="button">

                    <a id="cancelLink" href="/User/membership/delete"><?= __('Cancel membership') ?></a>
                    <a id="goBackLink" href="#"><?= __('Back') ?></a>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $("#cancelLink").click(function(event) {
                        event.preventDefault();
                        
                        var confirmationText = $("#confirmationInput").val();
                        
                        // Check if the input is empty or doesn't match the membership type
                        if (confirmationText.length === 0 || confirmationText !== "<?=$membership->membership_type?>") {
                            alert("Please fill in the box correctly!");
                        } else {
                            window.location.href = $(this).attr("href");
                        }
                    });
                });
            </script>
        </div>
    </div>
</body>
</html>