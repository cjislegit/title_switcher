<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title Switcher</title>
</head>
<body>
    <div class="container d-flex flex-column align-items-center">
        <table class="table w-50">
            <thead>
                <tr>
                    <th class="col w-50">Page</th>
                    <th class="col w-50">Title Tag</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach (PUBLISHED_PAGES as $id): ?>
                <tr>
                    <td class="col"><?= get_the_title($id) ?></td>
                    <td class="col"><input class="newTitles" type="text" name="" id="<?= $id ?>"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type="button" id="submit" class="btn btn-primary btn-sm d-block" value="Update Title Tags">
    </div>
    <div id="receiving_div_id">
        <p>Nothing loaded yet</p>
    </div>
</body>
</html>