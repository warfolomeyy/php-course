<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>сайт</title>
    <style>
        table, td { border: 1px solid black; border-collapse: collapse; padding: 15px; }
        table { width: 800px; margin: 20px auto; }
        { width: 250px; vertical-align: top; background: #e9e9e9; }
    </style>
</head>
<body>
<table>
    <tr>
        <td colspan="2" style="background: #f0f0f0; text-align: center;">
            <strong><?= $head1 ?></strong> |
            <?= $head2 ?> |
            <?= $head3 ?> |
            <?= $head4 ?>
        </td>
    </tr>
    <tr>