<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
    
</head>
<style>
body {
    font-family: "Noto Nastaliq Urdu", serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    text-align: center;
  }
  #icone{
    font-size: 50px;
    color: wheat; 
    position: absolute;
    margin-left: -650px;
    margin-top: -130px;
}
</style>
<body>
    <p>  ادمین عزیز خوش امدید </p>
    <div id="div"><a id="a" href="../aded/index.php"><i id="i2" class="bi bi-cloud-plus"></i> افزودن پست </a></div>
    <a href="../allow/index.php">
        <?php session_start() ;  echo ($_SESSION['vaziyat']== 'admin') ? "<i id='icone' class='bi bi-person-circle'></i></a>" : '' ;  ?>
    
    <div id="mama">
    <table id="mymediya">
    <tr>
        <th> گزینه ها </th>
        <th>تعداد سین </th>
        <th>تعداد ادیت </th>
        <th>دسته بندی  </th>
        <th>پست </th>
        <th>عنوان </th>
    </tr>
    <?php
    require_once __DIR__ . '/../../c/admin.php'; 
    $r = new admin(); 
    ?>
</table>

<div id="dokme">
    <div>
        <button> <a href="../syt/index.php"> بازگشت به سایت </a></button>
        <button id="back"> <a href="../acc/acc.php"> بازگشت به اکانت </a></button>
    </div>
</div>
<div id="response"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="scrriptt.js"></script>
                                                                                    
<script>
    function api(){
    let p = document.querySelectorAll('.x') ;
        p.forEach(pp => { 
            pp.addEventListener('click' , function(){

                
               $.ajax({
                    type : 'POST' , 
                    url  : 'process.php' , 
                    data : { id: pp.id} , 
                    success: function(response) {
                  
                    $('#response').html(response);
                },
                
                })
                location.reload() ; 
            })
        })
    
    
}

api() ; 
</script>
    <script src="../../c/EROR.js"></script>

</body>

</html>