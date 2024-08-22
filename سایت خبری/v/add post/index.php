<?php
require_once __DIR__ . "/../../c/add_to_post.php" ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div class="dropdown">
        <button type="button" id="y" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
           انتخاب موضوع
        </button>
        <ul class="dropdown-menu">
          <li class="dropdown-item">ورزشی</li>
          <li class="dropdown-item">اقتصادی</li>
          <li class="dropdown-item">سیاسی</li>
        </ul>
    </div> 
    <br>
    <br>
    <br>
    <div>
        <input type="text" value="<?php //titel sql ?>" placeholder="title">
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="post">
        <form method="post">
            <textarea id="myTextarea" name="myTextarea" rows="20" cols="50"  placeholder="خبر خود را بنویسید"><?php //post sql ?></textarea>
            <br>
            <br>
            <div style="width: 200px; height: 40px; background-color: black; color: white; cursor: pointer ; display: flex; " id="submit">ثبت خبر</div>
            <button type="button" onclick="window.location.href='../acc/../mosharekat/index.php'">بازگشت</button>
        </form>
    </div>
    
    <script src="index.js"></script>
</body>
</html>
