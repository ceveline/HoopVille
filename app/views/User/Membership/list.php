<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="/app/views/User/Membership/list.js"></script>
    <link rel="stylesheet" href="/assets/styles/Membership/list.css">
    <title>Memberships</title>
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="page1">
                <div class="title">
                    <h1>Memberships</h1>
                </div>
                <div class="membership-types">
                    <?php foreach($memberships as $mb): ?>
                        <div class="card">
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
    </div>
</body>
</html>
