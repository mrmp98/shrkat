<?php require_once __DIR__ . '/../../../سایت خبری/c/vorod.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>signup</h3>
                        <p>اطلعات خود را وارد کنید </p>
                        <form class="requires-validation" method= 'post' novalidate>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>

                            </div>
                            <div class="col-md-12" style="display: flex;">
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Password" required>
                                <p class="bi bi-eye-fill" id="cheshm"></p>
                            </div>
                            <p id="passwordLength">تعداد کاراکتر های شما </p>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="phone" placeholder="yorphone" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" placeholder="yor email" required>
                            </div>
                            <br>
                            <div>
                                <input type="submit" value="click" name="submit">
                            </div>
                        </form>
                        <a href="../sign in/index.php">singin<a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../c/EROR.js"></script>

    <script src="script.js"></script>
</body>

</html>