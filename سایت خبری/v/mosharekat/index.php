<?php
 require_once __DIR__ . '/../../c/admin.php';
    session_start() ; 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <p> <?php $_SESSION['name'] ?> عزیز خوش اومدی مشارکت های شما عبارت است از </p>
    <div style="background-color: red; font-size: 50px;"><a href="../add post/index.html"><i style="background-color: black;" class="bi bi-cloud-plus"></i> افزودن پست </a></div>
    
    <div id="mama">
        <table>
            <tr>
                <th>تعداد سین </th>
                <th> گزینه ها </th>
                <th>تعداد ادیت </th>
                <th>لینک پست </th>
                <th>پست </th>
            </tr>
            <tr>
                <th> x </th>
                <th>
                    <div>
                        <i class="bi bi-trash3"></i>
                        <i class="bi bi-pencil-fill"></i>

                    </div>
                </th>
                <th>x</th>
                <th> <a href="#"> x </a></th>
                <th id="post">این یک متن تست است </th>
            </tr>

        </table>
    </div>
    <div id="dokme">
        <div>
            <button> <a href="../syt/index.html"> بازگشت به سایت </a>
            </button>
            <button style="margin-left: 40%;"> <a href="../acc/acc.php"> بازگشت به اکانت </a></button>
        </div>
    </div>
    <script src="script.js"></script> 
    
    <script src="../../c/EROR.js"></script>

</body>

</html>
<!-- <i class="bi bi-trash3"></i> -->

<!-- <i class="bi bi-pencil-fill"></i> -->