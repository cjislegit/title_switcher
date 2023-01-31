<?php
global $wpdb;

$titleTagTableName = $wpdb->prefix . "title_switcher";

$titleTagTable = $wpdb->get_results("SELECT * FROM $titleTagTableName");

if (!$titleTagTable) {
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $titleTagTableName (
        page_id int NOT NULL,
        title_tag text,
        PRIMARY KEY (page_id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

?>

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
                    <td class="col"><input type="text" name="" id=""></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type="button" class="btn btn-primary btn-sm d-block" value="Update Title Tags">
    </div>
</body>
</html>