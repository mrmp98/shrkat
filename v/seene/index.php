<?php 
 require_once __DIR__ . '/../../c/edit_to_post.php' ; 
 $qw = new added() ;
  
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
<link rel="stylesheet" href="index.css">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    overflow-x: hidden;
    background-color: rgba(0, 0, 0, 0.195) !important;
}
/* start nav section */
.nav-img{
    width: 45px;
    height: 45px;
    border-radius: 50px;
}
/* end nav section */
</style>
<body >
    
    <nav style="text-align: center;">
        <div class="row d-flex justify-content-center ">
            <div class="col-8 bg-dark" dir="rtl" >
 
                    <li class="nav-item d-flex" >
                        <h5 class="text-white mt-2" > <?php $qw->qw(0 , 'titel');?> </h5>
                        
                    </li>
                    <h5 class="text-white mt-2" > <?php $qw->qw(0 , 'seen');?> تعداد بازدید  </h5>
                    <h5 class="text-white mt-2" > <?php $qw->user($qw->qqw(0,'user'));?> نویسنده  </h5>
                </ul>
            </div>
        </div>
 <div id="qw" class="<?php echo $qw->get() ?>">
     <div id="likee" title="Like" class="heart-container">
     <input id="Give-It-An-Id" class="checkbox" type="checkbox">
            <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="svg-celebrate">
                    <polygon points="10,10 20,20"></polygon>
                    <polygon points="10,50 20,50"></polygon>
                    <polygon points="20,80 30,70"></polygon>
                    <polygon points="90,10 80,20"></polygon>
                    <polygon points="90,50 80,50"></polygon>
                    <polygon points="80,80 70,70"></polygon>
                </svg>
            </div>
        </div>
        <p> 100 = تعداد لایک </p>
        </div>
    </nav>
 
    <section>
        <div class="row d-flex justify-content-center mt-1">
            <div class="col-10 bg-black">
                <h3 class="text-center text-white mt-3"><?php $qw->qw(0 , 'mtn'); ?></p>
                <a href="../syt"><BUtton type="submit">بازگشت</BUtton></a>

            </div>
        </div>
    </section>
    <div id="response"></div>
    <script src="js.js"></script>
    <!-- end header section -->
</body>
</html>