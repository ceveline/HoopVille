<!DOCTYPE html>
<html>
<head>
    <title><?= __('News & Updates') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="/assets/styles/Membership/admin_list.css">
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="page1">
                <div class="column-name">
                    <h4 id='column-title'><?= __('Membership ID') ?></h4>
                    <h4 id='column-text'><?= __('User ID') ?></h4>
                    <h4 id='column-text'><?= __('Membership Type') ?></h4>
                    <h4 id='column-action'><?= __('Start Date') ?></h4>
                    <h4 id='column-action'><?= __('End Date') ?></h4>
                    <h4 id='column-action'><?= __('Actions') ?></h4>
                    </div> 
                    <hr class="solid">
                    <div class="list">
                        <table>
                            <?php foreach ($memberships as $mb) : ?>
                                <div class="pub-item">
                                    <tr class='table-rows'>
                                        <td id='left'><?php echo $mb->membership_id ?></td>
                                        <td id='middle'><?php echo $mb->user_id ?></td>
                                        <div class="m-t-div">
                                            <td id='middle' class='membership-type'><?php echo $mb->membership_type ?></td>
                                        </div>
                                        <td id='middle'><?php echo $mb->start_date ?></td>
                                        <td id='middle'><?php echo $mb->end_date ?></td>
                                        <div class="buttons">
                                            <td id='right'>
                                                <a id='edit-button' class="btn btn-primary" href="/Admin/membership/edit/<?= $mb->membership_id?>"><?= __('Edit') ?></a> 
                                                <a id='delete-button' class="btn btn-danger" href="/Admin/membership/delete/<?= $mb->membership_id?>"><?= __('Delete') ?></a>
                                            </td>
                                        </div>
                                    </tr>
                            <?php endforeach; ?>
                            
                        </table>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>