<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/styles/view_publication.css">
    <title>Main</title>
</head>

<body>
    <div class="background">
        <div class="content">
        <div class="container">

            <h1><?php echo $publication->title; ?></h1>

            <?php if (isset($_SESSION['admin_id'])): ?>
                <div class="edit-delete-buttons">
                    <a href="Publication/edit/<?php echo $publication->publication_id; ?>">Edit</a>
                    <a href="Publication/delete/<?php echo $publication->publication_id; ?>">Delete</a>
                </div>
            <?php endif; ?>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="card">
                                <div class="text">
                                    <p><?= $publication->text ?></p>
                                </div>
                                <div class="timestamp">
                                    <p>Created on <?= $publication->timestamp ?></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>

</html>
