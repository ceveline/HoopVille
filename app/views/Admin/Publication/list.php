<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Updates</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/styles/publication_list.css">
</head>
<body>
    <div class="background">
        <div class="content">
            <div class="column-name">
                <tr>
                    <td>Title</td>
                    <td>Actions</td>
                </tr>
                <hr class="solid">
            </div>
            <div class="list">
                <?php foreach ($publications as $pub) : ?>
                    <tr class='table-rows'>
                        <td> <a href="/Publication/view/<?php echo $pub->publication_id; ?>"><?php echo $pub->title; ?></a>
                        </td>
                        <td class='buttons'>
                            <a href="/Publication/view/<?php echo $pub->publication_id; ?>" class="btn btn-primary">View</a>
                            <a href="/Publication/edit/<?php echo $pub->publication_id; ?>" class="btn btn-primary">Edit</a>
                            <a href="/Publication/delete/<?php echo $pub->publication_id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>