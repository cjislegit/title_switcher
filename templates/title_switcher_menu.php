<?php
 $pages = get_all_page_ids();

 foreach ($pages as $page) {
    if (get_post_status( $page ) == 'publish') {
        echo $page;
    }
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
                <tr>
                    <td class="col">Home</td>
                    <td class="col"><input type="text" name="" id=""></td>
                </tr>
            </tbody>
        </table>
        <input type="button" class="btn btn-primary btn-sm d-block" value="Update Title Tags">
    </div>
</body>
</html>