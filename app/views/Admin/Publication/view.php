<!DOCTYPE html>
<html>

<head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="/assets/styles/view_publication.css">
    <title><?= __('News & Updates') ?></title>
</head>

<body>
    <div class="background">
        <div class="content">
            <div class="container">

                <div class="title"><h1><?php echo $publication->title; ?></h1></div>

                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="card">
                                    <div class="text">
                                        <p><?= $publication->text ?></p>
                                    </div>
                                    <div class="timestamp">
                                        <p><?= __('Posted on') ?> <?= $publication->timestamp ?></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="buttons">
                    <?php if (isset($_SESSION['admin_id'])): ?>
                        <div class="edit-btn"><a href="/Publication/edit/<?php echo $publication->publication_id; ?>"><?= __('Edit') ?></a></div>
                        <div class="delete-btn"><a href="/Publication/delete/<?php echo $publication->publication_id; ?>"><?= __('Delete') ?></a></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
