<?php
require_once __DIR__ . "/../../c/edit_to_post.php";
$qw = new added();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="">

    <br>
    <br>
    <br>
    <div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="post">
        <form method="post">
            <input type="text" name="qwasd" value="<?php $qw->qw(0, 'titel');   ?>" placeholder="title">
            <br>
            <br>
            <textarea id="myTextarea" name="myTextarea" rows="20" cols="50" placeholder="خبر خود را بنویسید"><?php $qw->qw(0, 'mtn');  ?></textarea>
            <br>
            <br>
            <button type="submit" name="submmit" style="width: 200px; height: 40px; background-color: black; color: white; cursor: pointer ; display: flex; " id="">ویرایش خبر </button>
            <button type="button" onclick="window.location.href='../acc/../mosharekat/index.php'">بازگشت</button>
        </form>
    </div>

    <?php
    $qw->savee();
    ?>
    <script src="../../c/EROR.js"></script>
    <script src="index.js"></script>
</body>

</html>