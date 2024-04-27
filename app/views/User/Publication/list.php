<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/styles/publication_list_user.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="main-title">
                <h1>News & Updates</h1>
            </div>
            
            <!-- Search bars -->
            <div class="forms">
                <form action="/Publication/search" method="POST" class="mb-3">
                    <div class="search">
                    <div class="search-bar">
                        <input type="text" name="query" class="form-control" placeholder="Search by title or content" aria-label="Search query">
                    </div>
                    <div class="search-btn">
                        <button type="submit">Search</button>
                    </div>
                </form>
                <form action="/Publication" method="POST" class="mb-3">
                    <div class="view-all-btn">
                        <button type="submit">View all</button>
                    </div>
                </form>
            </div>
                
            </div>
            <table class="table">
                <tbody>
                    <?php foreach ($publications as $pub): ?>
                        <div class="card">
                            <div class="title">
                                <h3>
                                    <a href="/Publication/view/<?php echo $pub->publication_id;?>"><?php echo $pub->title; ?></a>
                                </h3>
                            </div>
                            <div class="text">
                                <?php if(strlen($pub->text) > 500) : ?>
                                    <p><?= substr($pub->text, 0, 500); ?>...<a id='read-more' href="/Publication/view/<?php echo $pub->publication_id;?>">Continue reading.</a></p>
                                    
                                <?php else: ?>
                                    <p><?= $pub->text; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="timestamp">
                                <p>Created on <?= $pub->timestamp?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>