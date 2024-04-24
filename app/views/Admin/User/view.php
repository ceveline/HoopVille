<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <link rel="stylesheet" href="/assets/styles/view.css">
</head>

<body>
    <div class="background">
        <div class="content-container">
            <h1>Users</h1>
            <form action="/Profile/search" method="GET">
                <div class="search-container">
                    <input type="text" id="search" name="query" placeholder="Enter a keyword..." class="search-text">
                    <button type="submit" class="search-button">Search</button>
                </div>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($profiles as $profile): ?>
                        <tr>
                            <td><a href="/Profile/view/<?= $profile->profile_id ?>"><?= $profile->first_name ?></a></td>
                            <td><a href="/Profile/view/<?= $profile->profile_id ?>"><?= $profile->last_name ?></a></td>
                            <td><?= $profile->phone ?></td>
                            <td><?= $profile->email ?></td>
                            <td>
                                <form action="/Profile/delete/<?= $profile->profile_id ?>" method="post" style="display:inline;">
                                    <input type="hidden" name="profile_id" value="<?= $profile->profile_id ?>">
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
