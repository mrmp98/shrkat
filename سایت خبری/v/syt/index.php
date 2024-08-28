 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 </head>

 <body>
     <nav>
         <div class="container">
             <div class="row">
                 <div class="col-6">
                     <nav class="d-flex">
                         <ul class="nav">
                             <a href="../sign in/index.php">
                                 <li class="nav-item me-3"><i class="bi bi-person-circle fs-2 text-white sign-icon"></i></li>
                             </a>
                             <li class="nav-item mt-1 me-3 fw-bold"><a href=""
                                     class="text-decoration-none fs-5 text-white">تماس با ما</a></li>
                             <li class="nav-item mt-1 me-3 fw-bold"><a href=""
                                     class="text-decoration-none fs-5 text-white">درباره ما</a></li>
                             <li class="nav-item mt-1 me-3 fw-bold mt-1"><a href=""
                                     class="text-decoration-none fs-5">خانه</a></li>
                         </ul>
                     </nav>
                 </div>
                 <div class="col-6  d-flex justify-content-end">
                     <a href="" class="me-2 mt-1"><i class="bi bi-chat-left-quote fs-3  nav-icon"></i></a>
                     <a href="" class="text-decoration-none fs-3 text-white">qw</a>
                 </div>
             </div>
         </div>
     </nav>
     <?php require_once __DIR__ . "/../../c/syt.php";  ?>
     <div class="all-line container mt-3 bg-secondary"></div>
     <div class="all-line container mt-3 bg-secondary"></div>
     <footer>
         <div class="container">
             <div class="row">
                 <div class="col-12 bg-light mt-3">
                     <div class="d-flex justify-content-between">
                         <div>
                             <i class="bi bi-linkedin fs-3 text-dark me-1"></i>
                             <i class="bi bi-telegram fs-3 text-dark me-1"></i>
                             <i class="bi bi-whatsapp fs-3 text-dark me-1"></i>
                             <i class="bi bi-facebook fs-3 text-dark me-1"></i>
                             <i class="bi bi-instagram fs-3 text-dark me-1"></i>
                         </div>
                         <div>
                             <a href="" class="me-2 mt-2"><i class="bi bi-chat-left-quote fs-3  nav-icon"></i></a>
                             <a href="" class="text-decoration-none fs-3 text-dark">qw</a>
                         </div>
                         <div>
                             <h4 class="text-dark mt-1">غتنفغنفنفتسننع</h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <script src="js.js"></script>
    
 </body>

 </html>