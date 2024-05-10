<!DOCTYPE html>
<html>

<head>
    <title>Modify Membership</title>

    <style>
        .background {
            min-height: 100%;
            min-width: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            /* margin: 0; */
            /* padding: 0; */
            position: absolute;
        }

        .content {
            min-height: 100%;
            background-color: white;
            margin: 30px 341px;
            padding: 12px;
        }


        .title{
            display: flex;
            justify-content: center;
            margin-bottom: 12px;
        }

        .data{
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 10px;
            margin-bottom:10px;
        }
        #mem-id, #user-id, #mem-type, #start-id, #end-id{
            width: 18%;
            line-height: 2rem;
        }

        select{
            font-size: 1rem;
        }

        .save-btn{
            border: none;
            background-color: #ffda76;
            height: 34px;
            width: 136px;
            font-size: 0.93rem;
            border-radius: 0.6rem;
            display: flex;
            justify-content: center;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
        }

        .save-btn:hover{
            background-color: #fbd467;
        }

        .button{
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="background">
        <div class="content">
            <form method='POST'>
                <div class="title">
                    <h1><?= __('Modify User Membership') ?></h1>
                </div>
                <hr class="solid">
                <div class="data mem-id">
                    <p id="mem-id"><?= __('Membership ID:') ?> </p><p><?=$membership->membership_id?></p>
                </div>
                <div class="data user-id">
                    <p id="user-id"><?= __('User ID:') ?> </p><p><?=$membership->user_id?></p>
                </div>
                <div class="data mem-type">
                    <p id="mem-type"><?= __('Membership Type:') ?> </p>
                    <select id="mem-type-select" name="membership_type">
                        <option name="membership_type" value="Base Training" <?php echo $membership->membership_type == 'Base Training' ? 'selected' : '' ?>>Base Training</option>
                        <option name="membership_type" value="Premium Training" <?php echo $membership->membership_type == 'Premium Training' ? 'selected' : '' ?>>Premium Training</option>
                        <option name="membership_type" value="VIP Training" <?php echo $membership->membership_type == 'VIP Training' ? 'selected' : '' ?>>VIP Training</option>
                    </select>
                </div>
                <div class="data start-id">
                    <p id="start-id"><?= __('Start Date:') ?> </p><p><?=$membership->start_date?></p>
                </div>
                <div class="data end-id">
                    <p id="end-id"><?= __('End Date:') ?> </p><p><?=$membership->end_date?></p>
                </div>
                <div class="button">
                    <input class="data save-btn"type='submit' value='Save Changes'></input>
                </div>
            </form>
        </div>
    </div>
</body>
</html>