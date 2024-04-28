<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memberships</title>
    <link rel="stylesheet" href="/assets/styles/Membership/list.css">
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="title">
                <h1>Memberships</h1>
            </div>
            <div class="membership-types">
                <?php foreach($memberships as $mb): ?>
                    <div class="card <?= $mb->membership_type ?>">
                        <div class="subtitle">
                            <h3><?= $mb->membership_type; ?></h3>
                        </div>
                        <div class="price">
                            <p>Price: <?= $mb->monthly_price?></p>
                        </div>
                        <div class="desc">
                            <p><?= $mb->description?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        // Get all elements with the class "card"
        var cards = document.querySelectorAll('.card');

        // Function to handle card click
        function cardClick(event) {
            // Remove the "selected" class from all cards
            cards.forEach(function(card) {
                card.classList.remove('selected');
            });
            
            // Add the "selected" class to the clicked card
            event.currentTarget.classList.add('selected');
            
            // Get the membership name of the clicked card
            var membershipName = event.currentTarget.querySelector('.subtitle h3').textContent;

            var content_div = document.querySelector('.content');
            var nextButton = document.createElement('a');
            nextButton.textContent = 'Next';
            nextButton.href = '#';

            if(membershipName != "") {
                content_div.appendChild(nextButton);
            }
            // var 
            // $content_dic.append()
            console.log('Chosen membership: ' + membershipName);
        }

        // Add click event listener to each card
        cards.forEach(function(card) {
            card.addEventListener('click', cardClick);
        });
    </script>
</body>
</html>
