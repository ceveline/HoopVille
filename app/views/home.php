<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/assets/styles/home.css">
    <title>HoopVille</title>
</head>
<body>
    <div class="background">
        <div class="content animated animatedFadeInUp fadeInUp">
            <div class="text">
                <div class="title">
                    <h1><?= __('HoopVille Performance Centre') ?></h1>
                </div>
                <div class="subtitle">
                    <h3><?= __('Take your game to the next level') ?></h3>
                </div>
           
            </div>
            <div class="buttons">
                <div class="more-info-btn">
                    <form action="User/services">
                        <button type='submit'><?= __('More info') ?></button>
                    </form>                 
                </div>
                    <form action="/register">
                        <div class="join-now-btn"><button><?= __('Join now') ?></button></div>
                    </form>
            </div>
        </div>
    </div>
    
</body>
</html>