<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
</head>
<body>
    <h1>User Profiles</h1>
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
                    <td><?= $profile->first_name ?></td>
                    <td><?= $profile->last_name ?></td>
                    <td><?= $profile->phone ?></td>
                    <td><?= $profile->email ?></td>
                    <td>
                        <form action="delete.php" method="post" style="display:inline;">
                            <input type="hidden" name="profile_id" value="<?= $profile->profile_id ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
