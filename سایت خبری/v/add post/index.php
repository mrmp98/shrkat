<?php
 require_once __DIR__ . '/../../c/add.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->

</head>
<body style="background-color: rgb(30, 37, 37);">
    <div style="display: flex; justify-content: center; align-items:center ;">
        <form   method="post">
            
            <textarea id="myTextarea" name="myTextarea" rows="20" cols="50"></textarea>
            <button name="submit" type="submit">ثبت خبر </button>
            <button>  <a href="../acc/../mosharekat/index.php">بازگشت </a></button>
        </form>
        
    </div>
</body>
</html>