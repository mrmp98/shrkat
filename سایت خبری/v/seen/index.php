<?php 
 require_once __DIR__ . '/../../c/edit_to_post.php' ; 
 $qw = new added() ; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
body {
    font-family: "Noto Nastaliq Urdu", serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    text-align: center;
    background-color: aquamarine;
  }
</style>
<body style="text-align: center;">
    <div> <h1><?php $qw->qw(0 , 'titel');   ?></h1></div>
    <div style=" word-wrap: break-word;overflow-wrap: break-word; width: 100%; ">
    <?php $qw->qw(0 , 'mtn'); ?>
    </div>
    <br>
    <br>
    <br>
    <br>
   <a href="../mosharekat/index.php"><BUtton type="submit">بازگشت</BUtton></a>
</body>
</html>