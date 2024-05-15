<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script type="text/javascript" src="/app/views/User/Membership/list.js"></script> -->
    <link rel="stylesheet" href="/assets/styles/Membership/list.css">
    <title><?= __('Memberships') ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="page1">
                <div class="title">
                    <h1><?= __('Memberships') ?></h1>
                </div>
                <div class="membership-types">
                    <?php foreach($memberships as $mb): ?>
                        <div class="card">
                            <div class="subtitle">
                                <h3><?= $mb->membership_type; ?></h3>
                            </div>
                            <div class="price">
                                <p><?= $mb->monthly_price?><?= __('/month') ?></p>
                            </div>
                            <div class="desc">
                                <p><?= $mb->description?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="page2"> <!-- Show the time -->
                <div class="title"><h1><?= __('Review Your Order') ?></h1></div>
                <form method="post" action="/User/membership/create">
                    <div class="confirmation">
                        <div class="subtitle">
                        </div>
                        <div class="price">
                        </div>
                        <div class="desc2">
                        </div>
                    </div>
                    <div class="buttons-p2">
                        <div class="p2-buttons">
                            <div class="back-btn">
                                <input class='btn2' type="button" value="<?= __('Back') ?>"></input>
                            </div>
                        </div>
                        <div class="confirm-btn">
                            <input class='btn' type="submit" value="<?= __('Confirm') ?>"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var chosenMembership = [];

        $(document).ready(function() {
            // get page2
            var page2_div = $('.page2');
            page2_div.hide();

            // a div for the next button
            var buttonDiv = $('<div>').addClass('next-btn-div');
            
            //next button
            var nextBtn = $("<a>").text('<?= __('Next') ?>').hide();
            nextBtn.addClass('nextButton'); // add the 'nextButton' class

            // append the "next" button inside the div
            buttonDiv.append(nextBtn);
            
            // append the div to the content section
            $('.content').append(buttonDiv);

            /* ------------------------------------------- */
            //confirm button
            

            // set up click event handler for the "Next" button
            nextBtn.click(function() {
                $('.page1').hide();
                page2_div.show();
                nextBtn.hide();
            });

            // get back button
            var backBtn = $('.back-btn');

            backBtn.click(function() {
                page2_div.hide();
                $('.card').css('background-color', '');
                $('.page1').show();
            });

            chooseMembership(nextBtn);
            // confirmation();
        });

        function chooseMembership(nextBtn) {
            var page2_div = $('.page2');

            // Find the element with the class "subtitle" inside the page2 section
            var subtitle_p2 = page2_div.find('.subtitle');
            var price_p2 = page2_div.find('.price');
            var desc_p2 = page2_div.find('.desc2');

            $('.card').click(function() {
                var subtitle = $(this).find('.subtitle').text();
                var price = $(this).find('.price').text();
                var desc = $(this).find('.desc').text();

                if (chosenMembership[0] == subtitle) {
                    chosenMembership = []; //clear the array
                    $('.card').css('background-color', ''); //clear the background color of the card
                    subtitle_p2.empty();
                    price_p2.empty();
                    desc_p2.empty();
                    console.log(chosenMembership);
                    nextBtn.hide();
                    return;
                }

                chosenMembership = []; //clear the array
                $('.card').css('background-color', ''); //clear the background color of the card
                $(this).css('background-color', '#ffda76');

                chosenMembership.push(subtitle.trim());
                chosenMembership.push(price.trim());
                chosenMembership.push(desc.trim());

                // Update the visibility of the "Next" button
                if(chosenMembership.length > 0) {
                    nextBtn.show();
                } else {
                    nextBtn.hide();
                }

                confirmation();

                console.log(chosenMembership);
            });
        }

        function confirmation() {
            // get the page2 section using its class
            var page2_div = $('.page2');
            
            // Find the element with the class "subtitle" inside the page2 section
            var subtitle = page2_div.find('.subtitle');
            var price = page2_div.find('.price');
            var desc = page2_div.find('.desc2');

            subtitle.empty();
            price.empty();
            desc.empty();

            // Set the text of the found subtitle element to the first item of chosenMembership array
            subtitle.append($('<p>').text('<?= __('Membership type:') ?>').css('font-weight', 'bold'));
            subtitle.append($('<input>').attr('class', 'membership_type').attr('type', 'text').attr('name', 'membership_type').attr('readonly', 'true').val(chosenMembership[0]));

            price.append($('<p>').text('<?= __('Price: ')?>').css('font-weight', 'bold'));
            price.append($('<p>').text(chosenMembership[1]));

            desc.append($('<p>').text('<?= __('What\'s included: ') ?>').css('font-weight', 'bold'));
            desc.append($('<p>').text(chosenMembership[2]));

        }
    </script>
</body>
</html>
