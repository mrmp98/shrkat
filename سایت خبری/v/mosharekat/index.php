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
    <p>  عزیز خوش اومدی مشارکت های شما عبارت است از </p>
    <div id="div"><a id="a" href="../add post/index.php"><i id="i2" class="bi bi-cloud-plus"></i> افزودن پست </a></div>

    <div id="mama">
        <table id="mymediya">
            <tr>
                <th> گزینه ها </th>
                <th>تعداد سین </th>
                <th>تعداد ادیت </th>
                <th>لینک پست </th>
                <th>پست </th>
                <th>تایتل </th>
            </tr>
            <?php
            require_once __DIR__ . '/../../c/admin.php'; 
 $r= new admin() ; 
               
             ?>

        </table>
    </div>
    <div id="dokme">
        <div>
            <button> <a href="../syt/index.php"> بازگشت به سایت </a>
            </button>
            <button id="back"> <a href="../acc/acc.php"> بازگشت به اکانت </a></button>
        </div>
    </div>
    <script src="sscript.js"></script>
    <script>
     
    </script>
    <script src="../../c/EROR.js"></script>

</body>

</html>