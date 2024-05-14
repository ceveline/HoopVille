<!DOCTYPE html>
<html>
<head>
    <title><?= __('Edit Publication') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/styles/create_publication.css">

</head>
<body>
<body>
    <div class="background">
        <div class="content">
            <h1><?= __('Edit Post') ?></h1>
            <form id='main' method="post" action="">
                <!-- for image https://www.youtube.com/watch?v=xXrs4j-p3yE -->
                <div class="inputs">
                    <label for="title"><?= __('Title:') ?></label>
                    <input type="text" id="title" name="title" placeholder="<?= __('Title goes here') ?>" value="<?=$publication->title?>">
                </div>
                <div class="inputs">
                    <label for="text" class="form-label"><?= __('Text:') ?></label>
                    <textarea form="main" id="text" class="text" name="text" rows="6" 
                    maxlength="3000" placeholder="<?= __('Type your content here') ?>"><?=$publication->text?></textarea>
                </div>
                <div class="button-post">
                    <button type="submit" class="btn" name="action" value="Post" onclick=""><?= __('Save Changes') ?></button>
                </div>
            </form>
        </div>
    </div>
</body>
</body>
</html>