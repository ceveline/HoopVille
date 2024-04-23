<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Publication</title>
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
            <h1>Create A Post</h1>
            <form class='main' method="post" action="">
                <!-- for image https://www.youtube.com/watch?v=xXrs4j-p3yE -->
                <div class="inputs">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title goes here">
                </div>
                <div class="inputs">
                    <label for="text" class="form-label">Text:</label>
                    <textarea id="text" form="main" class="form-control" name="text" rows="6" maxlength="500" placeholder="Type your content here"></textarea>
                </div>
                <div class="button-post">
                    <button type="submit" class="btn" name="action" value="Post" onclick="">Post</button>
                </div>
            </form>
        </div>
    </div>
</body>
</body>
</html>