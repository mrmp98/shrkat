<?php
require_once __DIR__ . '/../../c/edit_to_post.php';
$qw = new added();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        overflow-x: hidden;
        background-color: rgba(0, 0, 0, 0.195) !important;
    }

    .nav-img {
        width: 45px;
        height: 45px;
        border-radius: 50px;
    }
</style>

<body>

    <nav style="text-align: center;">
        <div class="row d-flex justify-content-center ">
            <div class="col-8 bg-dark" dir="rtl">

                <li class="nav-item d-flex">
                    <h5 class="text-white mt-2"> <?php $qw->qw(0, 'titel'); ?> </h5>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="row d-flex justify-content-center mt-1">
            <div class="col-10 bg-black">
                <h3 class="text-center text-white mt-3"><?php $qw->qw(0, 'mtn'); ?></p>
                    <a href="../mosharekat/"><BUtton type="submit">بازگشت</BUtton></a>

            </div>
        </div>
    </section>
    <script src="../../c/EROR.js"></script>

</body>

</html>