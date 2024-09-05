<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    table {
        margin-top: 50px;
    }

    table,
    th,
    td {
        border: 5px solid rgb(0, 0, 0);
        width: 60%;
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
    }
</style>

<body style="display: flex; justify-content: center; align-items: center;">
    <table>
        <tr>

            <th>وضعیت</th>
            <th>متن</th>

            <th>تایتل</th>
            <th>نویسنده</th>
            <th>تاریخ انتشار</th>
            <th>دسته بندی</th>
        </tr>
        <?php require_once __DIR__ . "/../../c/allowing.php"; ?>


    </table>
    <div id="response"></div>
    <script src="js.js"></script>
    <script src="../../c/EROR.js"></script>

</body>

</html>