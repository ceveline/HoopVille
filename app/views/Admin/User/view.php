<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('User Profiles') ?></title>
    <link rel="stylesheet" href="/assets/styles/view.css">
</head>

<body>
    <div class="background">
        <div class="content-container">
            <h1><?= __('Users') ?></h1>
            <form action="/Profile/search" method="GET">
                <div class="search-container">
                    <input type="text" id="search" name="query" placeholder="<?= __('Search') ?>" class="search-text">
                    <button type="submit" class="search-button"><?= __('Search') ?></button>
                </div>
            </form>
            <table>
                <tbody>
                    <?php foreach ($profiles as $profile): ?>
                        <tr>
                            <td><?= $profile->first_name ?></td>
                            <td><?= $profile->last_name ?></td>
                            <td><?= $profile->phone ?></td>
                            <td><?= $profile->email ?></td>
                            <td>
                                <form action="/Profile/delete/<?= $profile->profile_id ?>" method="post" style="display:inline;">
                                    <input type="hidden" name="profile_id" value="<?= $profile->profile_id ?>">
                                    <button type="submit" class="delete-button"><?= __('Delete') ?></button>
                                </form>
                            </td>
                            <td>
                                <a href="/Profile/infoDetails/<?= $profile->profile_id ?>" class="info-button"><?= __('Info') ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
